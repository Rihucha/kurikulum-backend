<?php

for ($n=1; $n <= 9; $n++) { 
    for ($m=1; $m <= 9; $m++) {
        if ($n == 9 || $n >= 5 && $m == 9 || $n == 5 || $n < 5 && $m == 1 || $n == 1) {
            echo "&nbsp+&nbsp";
        } else {
            echo "&nbsp&nbsp-&nbsp";
        }
    }
    echo "<br>";
}

