<?php
    for ($i = 1; $i <= 30; $i++ ) {
        $bagi = 90;
        $hasil = $bagi / $i;
        if ($bagi % $i == 0 ) /*memeriksa apakah nilai variabel $bagi dapat dibagi habis oleh nilai variabel $i tanpa sisa*/{
            echo $bagi. " : ".$i. " = ".$hasil. "<br>"; 
        }
    }
?>