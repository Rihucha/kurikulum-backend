<?php

if (!isset($_COOKIE['user'])) {
    header('location: admin.php');
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
        <p class="text_login">Berhasil Login, <strong><?= $_COOKIE['user'] ?></strong></p>
        <hr>
        <div style="display: flex; justify-content: center;">
        </div>
        <form action="" method="get">
            <button class="login_button" type="submit" name="logout" onclick="return confirm('Anda yakin ?')">Logout</button>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</html>

<?php
if (isset($_GET['logout'])) {
    unset($_COOKIE['user']);
    setcookie('user', null, -1, '/');
    header('location: cookie.php?pesan=logout');
}
?>