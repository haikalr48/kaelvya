<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$files = glob(__DIR__ . '/content/content*.html');
natsort($files);
$files = array_values($files);

$i = isset($_GET['i']) ? (int)$_GET['i'] - 1 : 0;
if ($i < 0 || $i >= count($files)) $i = 0;
$current = $files[$i];

$prev = $i > 0 ? $i : null;
$next = $i < count($files) - 1 ? $i + 2 : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kaelvya — Cerita</title>
<link rel="stylesheet" href="assets/style_header.css">
<link rel="stylesheet" href="assets/style_content.css">
</head>
<body>
<header class="top">
  <a href="home.php" class="brand">❤️ Kaelvya</a>
  <nav class="nav">
    <a href="home.php">Home</a>
    <a href="gallery.php">Gallery</a>
    <a href="daftar.php">Daftar Isi</a>
    <a href="logout.php">Logout</a>
  </nav>
</header>

<main id="reader" class="fade-in">
  <div class="content">
    <?php include $current; ?>
  </div>
  <div class="pager">
    <?php if ($prev): ?>
      <a class="btn outline" href="content.php?i=<?= $prev ?>">⬅ Sebelumnya</a>
    <?php endif; ?>
    <?php if ($next): ?>
      <a class="btn" href="content.php?i=<?= $next ?>">Selanjutnya ➡</a>
    <?php endif; ?>
  </div>
</main>
</body>
</html>
