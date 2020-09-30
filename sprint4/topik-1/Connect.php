<?php

    class Connect{

        public function __construct(){
            $server = "localhost";
            $user = "ridho";
            $pass = "12345";

            try {
                $this->conn = new PDO("mysql:host=$server;dbname=blog", $user, $pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection Failed : ".$e->getMessage();
            }
        }

        public function getDataGet(){
            $sql = "SELECT * FROM barang";
            $stm = $this->conn->prepare($sql);
            $stm->execute();

            $result = $stm->fetchAll(pdo::FETCH_ASSOC);
            return $result;
        }

        public function insertDataGet($NamaBarang, $Harga){
            $sql = "INSERT INTO barang(NamaBarang,Harga) VALUES (?, ?);";
            $stm = $this->conn->prepare($sql);
            $stm->execute([$NamaBarang,$Harga]);
        }

        public function getDataPost(){
            $sql = "SELECT * FROM pengirim";
            $stm = $this->conn->prepare($sql);
            $stm->execute();

            $result = $stm->fetchAll(pdo::FETCH_ASSOC);
            return $result;
        }

        public function insertDataPost($NamaKurir, $NamaPengirim, $AsalBarang, $TujuanBarang){
            $sql = "INSERT INTO pengirim(NamaKurir,NamaPengirim,AsalBarang,TujuanBarang) VALUES('$NamaKurir','$NamaPengirim','$AsalBarang','$TujuanBarang');";
            $stm = $this->conn->prepare($sql);
            $stm->execute();
        }
    }
?>