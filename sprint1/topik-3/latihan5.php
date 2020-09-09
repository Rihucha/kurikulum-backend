<?php
$n = 9;
for ($i = $n ; $i > 0 ; $i--){
    for ($j = $n ; $j > 0 ; $j--){
        if($i==$j||$i+$j==10){
            echo " + ";
        }elseif($i+$j>10 && $j<$i || $i+$j<10 && $j>$i){
            echo " + ";
        }
        else{
            echo " - ";
        }
    }
    echo "<br>";
}
?>