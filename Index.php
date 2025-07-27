<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kaelvya❤️</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <video autoplay muted loop id="bg-video">
        <source src="assets/bg.mp4" type="video/mp4">
    </video>
    <div class="login-box">
        <h2>Login Dulu Sayang ❤️</h2>
        <form method="POST" action="process_login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>
