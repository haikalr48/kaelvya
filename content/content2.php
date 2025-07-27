<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pertemuan Pertama</title>
  <link rel="stylesheet" href="../assets/style_content.css">
  <style>
.content img {
  max-width: 100%;
  max-height: 400px;
  object-fit: cover;
  border-radius: 10px;
  margin: 20px auto;
  display: block;
}
  </style>
</head>
<body>

  <!-- TOP NAV -->
  <div class="top">
    <a href="../home.php" class="brand">❤️ Kaelvya</a>
    <div class="nav">
      <a href="../home.php">Home</a>
      <a href="../gallery.php">Gallery</a>
      <a href="../daftar.php">Daftar Isi</a>
      <a href="../logout.php">Logout</a>
    </div>
  </div>

  <!-- READER -->
  <div id="reader">
    <div class="content">
      <h1>Perjalanan Ke Desa Tanjung Lalang</h1>
      <img src="../assets/images/foto2.jpg" alt="Perjalanan Ke Desa Tanjung Lalang">
      <p>
        Pagi itu, aku dan dia masih belum saling sapa. Rasanya masih asing, bahkan sekadar senyum pun belum ada. Kami berangkat dengan tiga mobil. Dia ikut mobil dosen pembimbing lapangan, sedangkan aku bawa mobil sendiri. Perjalanan pertama kami bukan langsung ke desa tujuan KKN, tapi ke Desa Tanjung Karangan, tempat kelompok 7 berada.
      </p>
      <p>
        Awalnya kami diarahkan ke tambak ikan milik kadesnya. Ternyata, beliau nggak ada di sana. Di tambak itu lah, untuk pertama kalinya aku dan dia berbicara. Pertanyaannya simpel, “Lahir tahun berapa?” Aku jawab 2001, dan dia langsung komentar singkat, “Tua.” Aku cuma nyengir mendengar jawabannya. Itu obrolan pertama kami, receh tapi cukup membekas.
      </p>
      <p>
        Setelah itu, kami diarahkan ke rumah kades Tanjung Karangan. Di sana, dia tiba-tiba membaca tulisan di bajuku yang bertuliskan “Punk is attitude.” Aku cuma senyum malu-malu, sementara dia tampak kepo dengan tulisan itu. Walau cuma sepele, tapi momen itu terasa lucu kalau diingat sekarang.
      </p>
      <p>
        Setelah urusan di Tanjung Karangan selesai, kami melanjutkan perjalanan ke desa tujuan KKN, yaitu Desa Tanjung Lalang. Di tengah jalan, kami sempat nyasar lagi karena salah belok. Untungnya, akhirnya kami berhasil sampai. Di sana, kami langsung menuju rumah kepala desa dan disambut hangat. Beliau menerima berkas, memberikan ucapan selamat datang, serta menyiapkan posko untuk KKN kami.
      </p>
      <p>
        Setelah semua urusan selesai, kami pun kembali ke rumah masing-masing. Hari itu kami memang belum banyak ngobrol, tapi mungkin tanpa sadar, hari itu adalah pintu kecil yang membuka cerita berikutnya.
      </p>
    </div>

    <div class="pager">
      <a href="content1.php" class="btn">← Cerita Sebelumnya</a>
      <a href="content3.php" class="btn">Lanjut Cerita →</a>
    </div>
  </div>

</body>
</html>
