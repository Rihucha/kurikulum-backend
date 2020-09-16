<?php

class perpustakaan{
    public $daftarbuku =[
        [ 
        "judul" => "merah putih",
        "isbn"  =>  "0001",
       ],
       [
       "judul" => "darah indonesia",
        "isbn"  => "0002",
        ],
       [ 
         "judul" => "laskar pelangi",
         "isbn"  => "0003",
       ],
       [
       "judul" => "negeri seribu istana",
        "isbn"  => "0004",
       ]
    ];

    public function daftar_buku(){
        print_r($this->daftarbuku);
    }

    public function minjam($pinjam){
        if ($pinjam == 0){
            $infobuku = $this->daftarbuku[$pinjam]["judul"];
            print_r($infobuku);
            echo "\n";
        }if ($pinjam == 1){
            $infobuku = $this->daftarbuku[$pinjam]["judul"];
            print_r($infobuku);
            echo "\n";
        }if ($pinjam == 2){
            $infobuku = $this->daftarbuku[$pinjam]["judul"];
            print_r($infobuku);
            echo "\n";
        }if ($pinjam == 3){
            $infobuku = $this->daftarbuku[$pinjam]["judul"];
            print_r($infobuku);
            echo "\n";
        }
    }
    protected function balikin($balik){
        if ($balik == 0){
            $infobuku = $this->daftarbuku[$balik]["judul"];
            print_r($infobuku);
            echo "\n";
        }if ($balik == 1){
            $infobuku = $this->daftarbuku[$balik]["judul"];
            print_r($infobuku);
            echo "\n";
        }if ($balik == 2){
            $infobuku = $this->daftarbuku[$balik]["judul"];
            print_r($infobuku);
            echo "\n";
        }if ($balik == 3){ 
            $infobuku = $this->daftarbuku[$balik]["judul"];
            print_r($infobuku);
            echo "\n";
        }
    }
}

$perpustakaan = new perpustakaan();
echo "=========================================\n";
echo "       Ada Yang Bisa Saya Bantu          \n";
echo "=========================================\n";
echo "1.minjam buku\n";
echo "2.kembalikan buku\n";
$pilih = trim(fgets((STDIN)));

if ($pilih == "1"){
    echo $perpustakaan->daftar_buku();
    echo "pilih buku yang akan di pinjam!\n";
    $isbn = trim(fgets((STDIN)));
        $perpustakaan->minjam($isbn);
}if($pilih == "2"){
    echo $perpustakaan->daftar_buku();
    echo "pilih buku yg akan di kembalikan!\n";
    $isbn = trim(fgets(STDIN));
    $perpustakaan->balikin($isbn);

}if($pilih != "1" || $pilih != "2"){
    echo "____________\nTerimakasih\n____________\n\n";
}
?>
