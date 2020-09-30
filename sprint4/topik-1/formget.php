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
    <?php
        include 'Connect.php';
        $conn = new Connect;
    ?>
    <h1 class="text-center pt-5">Halaman Form GET</h1>
    <div class="card mt-3">
  <div class="card-header bg-primary text-white">
    form input data barang
  </div>
  <div class="card-body">
   <form method="get" action="">
   <div class="container"
            <form action="" method="get" class="pt-3 m-5" >
            <div class="from-group">
              <label for="NamaBarang">Barang</label>
          <!-- <table class="table table-bordered table-striped"> -->
              <input type="text" class="from-control" name="NamaBarang" id="Barang">
          </div>
          <div class="from-group">
              <label for="Harga">Harga</label>
              <input type="text" class="from-control" name="Harga" id="Harga">
          </div>
      </div>
                <button type="submit" class="btn btn-success" name="bsave">Save</button>
    <button type="submit" class="btn btn-danger" name="breset">Reset</button>

            </form>
            <?php

                if(isset($_GET['bsave'])){
                    $NamaBarang = $_GET['NamaBarang'];
                    $Harga = $_GET['Harga'];

                    $conn->insertDataGet($NamaBarang,$Harga);

                    header("location:formget.php");
                    exit;
                }
            
            ?>
        </div>
        <!-- awal card table -->
    <div class="card mt-3">
      <div class="card-header bg-success text-white">
        daftar barang
      </div>
      <div class="card-body">
      
    <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NamaBarang</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $data = $conn->getDataGet();
                        $i = 1;
                        foreach($data as $key => $value):
                    ?>
                    
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $value['NamaBarang'] ?></td>
                        <td><?= $value['Harga'] ?></td>
                    </tr>

                    <?php endforeach;?>                    
                </tbody>
            </table>
        </div>
    </div>