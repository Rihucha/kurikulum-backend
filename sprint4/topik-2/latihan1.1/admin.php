<?php
if (isset($_POST['submit'])) {
    if ($_POST['username'] == 'kasih' && $_POST['password'] == '12345') {
        setcookie('user', $_POST['username'], time() + 3600, "/");
        header('location:success.php');
    } else {
        header('location:admin.php?pesan=gagal');
    }
}

if (isset($_COOKIE['user'])) {
    header('location: success.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <div class="box">
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan']=="gagal") {
                echo "<div class='alert'>Username atau Password salah !</div>";
        ?>
  <?= $hasil; ?>
  <div class="row justify-content-center align-items-center" style="height:720px;">
    <div class="col-6">
        <h1 class="text-center">Selamat Datang ke halaman Admin</h1>
        <h3 class="text-center">Hallo <?= $_COOKIE['name'] ?></h3>
        <form action="" method="post" class="text-center mt-3">
            <input class="btn btn-primary" type="submit" name="logout" value="Logout">
        </form>
    </div>
  </div>
  <?php
            } else if ($_GET['pesan'] == "logout") {
                echo "<div class='alert'>Berhasil Logout !</div>";
            }
        } 
        ?>    

        <form action="" method="post">

            <div class="container">
            <h2>Login</h2>     
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form_control" placeholder="Username..." required />

            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form_login" placeholder="Password..." required />
            
            <input type="submit" name="submit" class="btn btn-sm btn-primary" value="LOGIN">
                      
            </div>  
        </form>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</html>