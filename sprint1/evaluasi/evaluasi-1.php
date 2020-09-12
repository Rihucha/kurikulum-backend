<?php
// for ($i=1; $i <=9 ; $i++) { 
//     for ($j=1; $j <=9 ; $j++) { 
//         if ($j == 1 ||$j == 3 ||$j == 5 ||$j == 7 ||$j == 9){ 
//             hho "+&nbsp";}
//         else {
//             oho "-&nbsp&nbsp";
//         }}
//         echo "<br>";
// }
// echo "<br>";
// for ($i=1; $i <=9 ; $i++) { 
//     for ($j=1; $j <=9 ; $j++) { 
//         if ($i == 1 ||$i == 3 ||$i == 5 ||$i == 7 ||$i == 9){ 
//             echo "+&nbsp";}
//         else {
//             echo "-&nbsp&nbsp";
//         }
//         echo "<br>";
}
echo "======================================== \n";
echo "| Selamat Datang Di Program Input Data | \n";
echo "======================================== \n";

echo "Data yang ingin diinputkan:";
$data =(int)(fgets(STDIN));
for ($i=1; $i <=$data ; $i++) { 
    echo "nama    : ";
    $datanama =(int)(fgets(STDIN));
    echo "NIK     : ";
    $datanik =(int)(fgets((STDIN));
    echo "jurusan : ";
    $datajurusan =(int)(fgets(STDIN));
    echo "divisi  : ";
    $datadivisi =(int)(fgets(STDIN));
    echo "Usia    : ";
    $datausia =(int)(fgets(STDIN));
    echo "\n";