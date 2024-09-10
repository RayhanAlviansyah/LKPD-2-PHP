<?php
    function Kalimat($Huruf) {
        // menghitung panjang string
        if (strlen($Huruf) > 50) {
            //mengembalikan substring berdasarkan posisi awal dan panjang yang ditentukan.
            return substr($Huruf, 0, 50) . " ...";
        } else {
            return $Huruf;
        }
    }
    
    $kalimat = "Lorem ipsum dolor sit amet consectetur";
    $hasil = Kalimat($kalimat);
    
    echo "Kalimat Awal : ".$hasil;
    
?>