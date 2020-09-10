<?php
echo "Masukkan Jumlah Input : ";
$input = (int) fgets(STDIN);

for ($i=0; $i<$input;$i++){
    echo "Masukkan Nilai : ";
    $nilai = (int) fgets(STDIN);
    $arr[] = $nilai;
}

echo "\n";

arsort($arr);
$jumlah = array_count_values($arr);
echo "Modus = ";
foreach ($jumlah as $key => $value) {
    if ($value == max($jumlah)){
        echo $key.", ";
    }
}
echo "\n Frequensi = ".max($jumlah);

echo "\n";
rsort($arr);
$count = count($arr);
$sum = array_sum($arr);
$tengah = round($count/2);
$total1 = $sum/$count;
$total2 = $arr[$tengah-1];
echo "Mean = ".$total1;
echo "\n";
echo "Median = ".$total2;
echo "\n";
?>