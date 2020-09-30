
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location:session.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <div style="display: flex; justify-content: center;">
        <div class="box">
        <p class="text_login">Berhasil Login, <strong><?= $_COOKIE['user'] ?></strong></p>
        <hr>
        <div style="display: flex; justify-content: center;">
        </div>
        <form action="" method="get">
            <button class="login_button" type="submit" name="logout" onclick="return confirm('Anda yakin ?')">Logout</button>
        </form>
    </div>
</body>
</html>


<?php

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('location:session.php?pesan=logout');
}