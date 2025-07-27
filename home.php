<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kaelvya — Our Story</title>
<link rel="stylesheet" href="assets/style_home.css">
</head>
<body>

<!-- HERO SECTION -->
<header class="hero">
  <div class="inner">
    <div class="logo">❤️</div>
    <h1>Hai, Kaelvya</h1>
    <p class="tagline">Setiap momen kita abadi di sini</p>
    <button class="btn-cta" onclick="window.location='content/content1.php'">
      Lihat Cerita Kita ➜
    </button>
    <nav class="top-nav">
      <a href="home.php">Home</a>
      <a href="gallery.php">Gallery</a>
      <a href="daftar.php">Daftar Cerita</a>
      <a href="logout.php">Logout</a>
    </nav>
  </div>
  
  <!-- MUSIC PLAYER -->
  <audio id="bg-music" loop>
    <source src="assets/music.mp3" type="audio/mpeg">
  </audio>
  <button id="music-toggle">🎵 Play Music</button>
</header>

<!-- MAIN CONTENT -->
<main class="container card">
  <ul class="tabs">
    <li class="active">Introduction</li>
    <li>First Section</li>
    <li>Second Section</li>
    <li>Get Started</li>
  </ul>

  <section class="panel active">
    <h2>Selamat datang sayang ❤️</h2>
    <p>Ini rumah semua kenangan kita. Mulai baca dari <b>Introduce</b> ya.</p>
    <a class="btn" href="content/content1.php">Mulai Introduce ➜</a>
  </section>

  <section class="panel">
    <h2>Gallery</h2>
    <p>Kumpulan foto-foto kita.</p>
    <a class="btn outline" href="gallery.php">Buka Gallery</a>
  </section>

  <section class="panel">
    <h2>Daftar Isi</h2>
    <p>List semua halaman/cerita (bakal panjang sampai 100+).</p>
    <a class="btn outline" href="daftar.php">Lihat Daftar Isi</a>
  </section>

  <section class="panel">
    <h2>Pengaturan</h2>
    <p>Kapan-kapan kita tambahin setting (ganti password, dll).</p>
  </section>
</main>

<!-- SCRIPT -->
<script>
const tabs = document.querySelectorAll('.tabs li');
const panels = document.querySelectorAll('.panel');
tabs.forEach((tab, idx) => {
  tab.addEventListener('click', () => {
    document.querySelector('.tabs li.active').classList.remove('active');
    document.querySelector('.panel.active').classList.remove('active');
    tab.classList.add('active');
    panels[idx].classList.add('active');
  });
});

// MUSIC TOGGLE
const music = document.getElementById('bg-music');
const btnMusic = document.getElementById('music-toggle');
btnMusic.addEventListener('click', () => {
  if (music.paused) {
    music.play();
    btnMusic.textContent = '🔇 Pause Music';
  } else {
    music.pause();
    btnMusic.textContent = '🎵 Play Music';
  }
});
</script>
</body>
</html>
