<?php
    function multiple($nilai){
        foreach($nilai as $key => $value){
            $nilai[$key]*=3;
        }
        print_r($nilai);
    }
    $bil= [2,3,4,5,6,7,8,9];
    print_r($bil);
    multiple($bil);
    
?>