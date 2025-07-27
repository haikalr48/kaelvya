<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
$images = glob('assets/images/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Gallery — Kaelvya</title>
<link rel="stylesheet" href="assets/style_header.css">
<link rel="stylesheet" href="assets/style_gallery.css">
</head>
<body>
<header class="top">
  <a href="home.php" class="brand">❤️ Kaelvya</a>
  <nav class="nav">
    <a href="home.php">Home</a>
    <a href="daftar.php">Daftar Cerita</a>
    <a href="logout.php">Logout</a>
  </nav>
</header>

<main id="reader" class="fade-in">
  <h1>Gallery</h1>
  <div class="grid">
    <?php foreach ($images as $index => $img): ?>
      <img src="<?= $img ?>" alt="photo" data-index="<?= $index ?>">
    <?php endforeach; ?>
  </div>
</main>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
  <button class="close" id="closeBtn">✖</button>
  <button class="prev" id="prevBtn">⟨</button>
  <img id="lightboxImg" src="" alt="">
  <button class="next" id="nextBtn">⟩</button>
</div>

<script>
const images = document.querySelectorAll('.grid img');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightboxImg');
let currentIndex = 0;

images.forEach((img, idx) => {
  img.addEventListener('click', () => {
    currentIndex = idx;
    showImage(idx);
  });
});

function showImage(idx) {
  lightboxImg.src = images[idx].src;
  lightbox.classList.add('active');
}

document.getElementById('closeBtn').addEventListener('click', () => {
  lightbox.classList.remove('active');
});

document.getElementById('nextBtn').addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % images.length;
  showImage(currentIndex);
});

document.getElementById('prevBtn').addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  showImage(currentIndex);
});

lightbox.addEventListener('click', (e) => {
  if (e.target === lightbox) {
    lightbox.classList.remove('active');
  }
});
</script>
</body>
</html>
