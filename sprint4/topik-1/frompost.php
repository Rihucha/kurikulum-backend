<?php
    include 'Connect.php';
    $kelas = new Connect;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1 class="text-center pt-5">Halaman Form POST</h1>
    <div class="card mt-3">
  <div class="card-header bg-primary text-white">
    form input data Kiriman
  </div>
  <div class="card-body">
   <form method="post" action="">
   <div class="container"
            <form action="" method="POST" class="pt-3 m-5" >
                <div class="from-group">
                    <label for="NamaKurid">NamaKurir</label>
                    <input type="text" class="form-control" name="NamaKurir" id="NamaKurir">
                </div>
                <div class="from-group">
                    <label for="Namapengirim">NamaPengirim</label>
                    <input type="text" class="form-control" name="NamaPengirim" id="NamaPengirim">
                </div>
                <div class="from-group">
                    <label for="Asalbarang">AsalBarang</label>
                    <input type="text" class="form-control" name="AsalBarang" id="AsalBarang">
                </div>
                <div class="from-group">
                    <label for="TujuanBarang">Tujuan Barang</label>
                    <input type="text" class="form-control" name="TujuanBarang" id="TujuanBarang">
                </div>
                <button type="submit" class="btn btn-success" name="bsave">Save</button>
    <button type="submit" class="btn btn-danger" name="breset">Reset</button>

            </form>
            <?php 
                if(isset($_POST['bsave'])){
                    $kurir = $_POST['NamaKurir'];
                    $pengirim = $_POST['NamaPengirim'];
                    $asal = $_POST['AsalBarang'];
                    $tujuan = $_POST['TujuanBarang'];

                    $kelas->insertDataPost($kurir, $pengirim, $asal, $tujuan);
                    header("connect.php");  }
            ?>
        </div>
        <div class="card mt-3">
      <div class="card-header bg-success text-white">
        Data Kiriman
      </div>
      <div class="card-body">
      
    <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kurir</th>
                    <th scope="col">Pengirim</th>
                    <th scope="col">Asal Barang</th>
                    <th scope="col">Tujuan Barang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $data = $kelas->getDataPost();
                        $i = 1;
                        foreach($data as $key => $value):
                    ?>           

                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $value['NamaKurir'] ?></td>
                            <td><?= $value['NamaPengirim'] ?></td>
                            <td><?= $value['AsalBarang'] ?></td>
                            <td><?= $value['TujuanBarang'] ?></td>
                        </tr>

                    <?php endforeach; ?>  
                </tbody>
            </table>
        </div>
    </div>