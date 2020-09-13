
<?php
    $calcRectangleArea = function($width, $length): int{
        return $width*$length;
    };

    echo "=======================================\n";
    echo "Program Menghitung Luas Persegi Panjang\n";
    echo "=======================================\n";

    echo "Inputkan nilai lebar : ";
    $lebar = trim(fgets(STDIN));
    echo "Inputkan nilai panjang : ";
    $panjang = trim(fgets(STDIN));

    $hasil = $calcRectangleArea($lebar,$panjang);

    echo "Luas persegi panjang adalah ".$hasil."\n";
?>