<?php
    $bill = [80,77,65,89,55,12,90,86];
    $bill2 = [77,99,55,81,45,90,91,98];
    $bil = array_merge($bill,$bill2);
    $bilangan = array_unique($bil);
    sort($bilangan);
    echo "Hasil : ". implode(", ", $bilangan);
    // implode berfungsi mengambil array dan mengubahnya menjadi string.
?>