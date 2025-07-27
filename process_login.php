<?php
session_start();

// Username & password bisa lo ganti sesuai mau lo
$valid_username = "kaelvya";
$valid_password = "06072004";

if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: home.php");
} else {
    echo "<script>alert('Username atau password salah!');window.location='index.php';</script>";
}
