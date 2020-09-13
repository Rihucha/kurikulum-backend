<?php
    $luasSegitiga = function($alas, $tinggi){
        return ($alas*$tinggi)/2;
    };
    echo "========================================\n";
    echo "    Program Menghitung Luas Segitiga    \n";
    echo "========================================\n";

    echo "Inputkan nilai alas : ";
    $alas = trim(fgets(STDIN));
    echo "Inputkan nilai tinggi : ";
    $tinggi = trim(fgets(STDIN));

    $hasil = $luasSegitiga($alas,$tinggi);

    echo "Luas Segitiga adalah ".$hasil."\n";

?>