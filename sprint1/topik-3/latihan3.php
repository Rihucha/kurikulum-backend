<?php
$n = 9;
for ($i = $n ; $i > 0 ; $i--){
    for ($j = $n ; $j > 0 ; $j--){
        // echo "(".$i.",".$j.")";
        if($j < $i){
            if($j < $i)
            echo " - ";
            continue;
        }else{
            echo "+ ";
        }
    }
    echo "<br>";
}