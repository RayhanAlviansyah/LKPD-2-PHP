<?php
    for ($block = 1; $block <= 2; $block++) /*jumlah block/kelompok*/ {
        for ($baris = 1; $baris <= 4; $baris++) /*jumlah baris sumbu y*/ {
            for ($kolom = 1; $kolom <= 8; $kolom++)/*jumlah kolom sumbu x*/ {
                echo "*";
            }
            echo "<br>";
        }
        echo "<br>";
    }
?>