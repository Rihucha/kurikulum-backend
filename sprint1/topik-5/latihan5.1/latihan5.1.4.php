<?php
function luasTrapesium($atap, $alas, $tinggi){
    return ($atap+$alas)/2*$tinggi;
}
echo "=========================================\n";
echo "    Program Menghitung Luas Trapesium    \n";
echo "=========================================\n";

echo "Inputkan nilai atap : ";
$atap = trim(fgets(STDIN));
echo "Inputkan nilai alas : ";
$alas = trim(fgets(STDIN));
echo "Inputkan nilai tinggi : ";
$tinggi = trim(fgets(STDIN));

$hasil = luasTrapesium($atap, $alas,$tinggi);

echo "Luas Segitiga adalah ".$hasil."\n";

?>