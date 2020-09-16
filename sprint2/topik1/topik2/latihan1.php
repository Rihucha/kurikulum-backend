<?php

class kucing
{
    protected static 
    $pi = 3.14;

    public static function persegi(){
        echo "Silahkan masukkan panjang persegi!\n";
        $panjang = trim(fgets(STDIN));
        echo "Silahkan masukkan tinggi persegi!\n";
        $tinggi = trim(fgets(STDIN));
        echo "Luas Persegi : ".$panjang*$tinggi." meter\n";
        echo "Keliling Persegi : ".(($panjang+$tinggi)*2)." meter\n";
    }
    public static function lingkaran(){
        echo "Silahkan masukkan diameter lingkaran!\n";
        $diameter = trim(fgets(STDIN));
        echo "Luas Lingkaran : ".(($diameter/2)*self::$pi)." meter\n";
        echo "Keliling Lingkaran : ".($diameter*self::$pi)." meter\n";
    }
    public static function trapesium(){
        echo "Silahkan masukkan sisi AB!\n";
        $ab = trim(fgets(STDIN));
        echo "Silahkan masukkan sisi BC!\n";
        $bc = trim(fgets(STDIN));
        echo "Silahkan masukkan sisi CD!\n";
        $cd = trim(fgets(STDIN));
        echo "Silahkan masukkan sisi DA!\n";
        $da = trim(fgets(STDIN));
        echo "Silahkan masukkan panjang t!\n";
        $t = trim(fgets(STDIN));
        echo "Luas Lingkaran : ".((($cd+$ab)*$t)/2)." meter\n";
        echo "Keliling Trapesium : ".($ab+$bc+$cd+$da)." meter\n";
}
}
function mulai(){
echo "==========================================================\n";
echo "||                DIPILIH dulu mamank :V                ||\n"; 
echo "==========================================================\n";

echo "Tekan '1' untuk menghitung  'persegi'!                    \n";
echo "Tekan '2' untuk menghitung  'lingkaran'!                  \n";
echo "Tekan '3' untuk menghitung  'trapesium'!                  \n";
echo "Tekan 'CTRL+c' untuk keluar dari aplikasi                 \n";

$bangundatar = trim(fgets(STDIN));
if($bangundatar == "1"){
    kucing::persegi();
}if($bangundatar == "2"){
    kucing::lingkaran();
}if($bangundatar == "3"){
    kucing::trapesium();
}
mulai();
}
mulai();

?>