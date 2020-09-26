<?php


class Santri{
    public function __construct(){
        $server = "localhost";
        $user = "ridho";
        $pass = "12345";

        try {
            $this->conn = new PDO("mysql:host=$server;dbname=siswa",$user, $pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Failed: ".$e->getMessage()."\n";
            exit;
        }
    }

    public function read(){
        $sql = "SELECT * FROM santri;";
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        
        $result = $stm->fetchAll(pdo::FETCH_ASSOC);
        return $result;
        
    }

    public function insert(){
        // echo "\n\nMenu Input Data\n";
        // echo "===============\n\n";

        echo "Ingin input berapa banyak : ";
        $banyak = trim(fgets(STDIN));
        for($i=0;$i<$banyak;$i++){
            echo "Input Nama : ";
            $arr[$i]['nama'] = trim(fgets(STDIN));
            echo "Input Nilai : ";
            $arr[$i]['nilai'] = trim(fgets(STDIN));
            echo "\n";
        }
        
        foreach ($arr as $key => $value) {
            //insert into snatri values('','','')
            $sql = "INSERT INTO santri(nm_santri,nilai) VALUES('".$value['nama']."','".$value['nilai'].");";
            $stm = $this->conn->prepare($sql);
            $stm->execute();
        }

        print_r($this->read());
        
    }
    

    public function update(){
        // echo "\n\nMenu Update Data\n";
        // echo "================\n\n";

        print_r($this->read());
        echo "\nInput ID Data yang ingin diubah : ";
        echo "Input Nama : ";
        $id = trim(fgets(STDIN));
        echo "Input Nilai : ";
        $nilai = trim(fgets(STDIN));

        $sql = "UPDATE santri SET nm_santri = '".$nama."', nilai=".$nilai." WHERE id_santri=".$id.";";
        $stm = $this->conn->prepare($sql);
        $stm->execute();

        print_r($this->read());

    }

    public function delete(){
        // echo "\n\nMenu Hapus Data\n";
        // echo "===============\n\n";

        print_r($this->read());
        echo "\nInput ID Data yang ingin dihapus : ";
        $id = trim(fgets(STDIN));

        $sql = "DELETE FROM santri WHERE id_santri=".$id.";";
        $stm = $this->conn->prepare($sql);
        $stm->execute();

        print_r($this->read());
    }
}

 $konek = new santri();
 $konek->delete();
 $konek->update();

 