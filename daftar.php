<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Ambil semua file konten
$files = glob(__DIR__ . '/content/content*.php');
natsort($files);
$files = array_values($files);

function get_title_from_file($path) {
    $content = @file_get_contents($path);
    if (preg_match('/<h1[^>]*>(.*?)<\/h1>/', $content, $matches)) {
        return trim($matches[1]);
    }
    return basename($path);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Daftar Isi — Kaelvya</title>
<link rel="stylesheet" href="assets/style_header.css">
<link rel="stylesheet" href="assets/style_content.css">
<style>
.list-container {
  display: flex;
  flex-direction: column;
  gap: 12px;
  margin-top: 20px;
}
.story-card {
  display: flex;
  align-items: center;
  padding: 14px 18px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0,0,0,.05);
  text-decoration: none;
  color: var(--text);
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.story-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 14px rgba(0,0,0,.12);
}
.story-number {
  width: 36px;
  height: 36px;
  background: var(--pink);
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  margin-right: 14px;
}
.story-title {
  font-size: 1.1rem;
  font-weight: 600;
}
</style>
</head>
<body>
<header class="top">
  <a href="home.php" class="brand">❤️ Kaelvya</a>
  <nav class="nav">
    <a href="home.php">Home</a>
    <a href="gallery.php">Gallery</a>
    <a href="logout.php">Logout</a>
  </nav>
</header>

<main id="reader" class="fade-in">
  <h1>Daftar Cerita</h1>
  <?php if (empty($files)): ?>
      <p><i>Belum ada cerita yang ditambahkan.</i></p>
  <?php else: ?>
  <div class="list-container">
    <?php foreach ($files as $idx => $path): 
          $num = $idx + 1;
          $title = get_title_from_file($path);
    ?>
      <a class="story-card" href="content/content<?= $num ?>.php">
        <div class="story-number"><?= $num ?></div>
        <div class="story-title"><?= htmlspecialchars($title) ?></div>
      </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
</main>
</body>
</html>
