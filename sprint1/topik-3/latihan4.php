<?php
$n = 9;
for ($i = $n ; $i > 0 ; $i--){
    for ($j = 1 ; $j < 9 ; $j++){
        // echo "(".$i.",".$j.")";
        if($j < $i){
            echo " - ";
        }else{
            echo "+";
        }
    }
    echo "<br>";
}
?>
