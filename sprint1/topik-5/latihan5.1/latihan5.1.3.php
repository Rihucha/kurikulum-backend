<?php
function luasLingkaranR($r){
    return 3.14*($r*$r);
}
function luasLingkaranD($d){
    return (1/4)*3.14*($d*$d);
}
echo "=========================================\n";
echo "    Program Menghitung Luas Lingkaran    \n";
echo "=========================================\n";

echo "1. Menggunakan Diameter\n";
echo "2. Menggunakan Jari-Jari\n";
echo "Pilih inputan : ";
$pilih = trim(fgets(STDIN));

switch($pilih){
    case 1:
        echo "\nInput Diameter : ";
        $nilai = trim(fgets(STDIN));
        $hasil = luasLingkaranD($nilai);
    break;
    case 2:
        echo "\nInput Jari-Jari : ";
        $nilai = trim(fgets(STDIN));
        $hasil = luasLingkaranR($nilai);
    break;
}

echo "Luas Lingkarn adalah ".$hasil."\n";

?>