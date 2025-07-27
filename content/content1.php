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
      <h1>Pertemuan Pertama</h1>
      <img src="../assets/images/foto1.jpg" alt="Pertemuan Pertama">
      <p>
        Hari itu, kita sama sekali belum kenal. Kamu dari jurusan Ilmu Hukum, aku dari Manajemen. Walau satu universitas, Universitas Serasan, rasanya kita seperti dua orang asing yang kebetulan ada di ruangan yang sama. Suasana setelah pembekalan masih terasa riuh, semua orang sibuk dengan kelompoknya masing-masing. Aku cuma duduk di kelompok 6, nggak mikir apa-apa selain besok berangkat KKN ke Desa Tanjung Lalang, Kecamatan Tanjung Agung, Muara Enim.
      </p>
      <p>
        Awalnya kamu ada di kelompok 8, tapi entah gimana, temenmu ngajak tukeran dan kamu pindah ke kelompokku. Aku cuma angguk-angguk aja, nggak kepikiran banyak. Hari itu rasanya penuh kegiatan, dari diskusi kecil sampai foto kelompok. Kita belum ngobrol sama sekali karena semua orang sibuk dengan urusannya masing-masing.
      </p>
      <p>
        Yang aku ingat, di hari itu pikiran lagi ke mana-mana lebih ke persiapan buat besok, gimana caranya sampai ke desa, siapa bawa apa, dan apa yang bakal kita hadapi di KKN nanti. Kamu ada di situ, tapi yaudah, masih terasa asing.
      </p>
      <p>
        Kalau diingat sekarang, hari itu mungkin nggak ada yang terlalu spesial. Tapi ternyata, dari pertemuan yang biasa-biasa aja itu, kita tanpa sadar mulai berada di cerita yang sama.
      </p>
    </div>

    <div class="pager">
      <a href="../home.php" class="btn outline">← Kembali ke Home</a>
      <a href="content2.php" class="btn">Lanjut Cerita →</a>
    </div>
  </div>

</body>
</html>
