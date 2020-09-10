
<?php
echo "Masukkan Jumlah Input : ";
$input = (int) fgets(STDIN);

for ($i=0; $i<$input;$i++){
    echo "Masukkan Nilai : ";
    $nilai = (int) fgets(STDIN);
    $arr[] = $nilai;
}

rsort($arr);
$arr2 = array_unique($arr);
$arr3 = array_reverse($arr);
$result = array_slice($arr2, 0, 3);
$result1 = array_slice($arr3, 0, 3);
echo "Highest ="."\n";
foreach ($result as $key => $value) {
    echo $value."\n";
}
echo "Lowest = "."\n";
foreach ($result1 as $key => $value) {
    echo $value."\n";
}

?>