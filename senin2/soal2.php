<?php

//buatlah semua fungsi yang akan mengubah sebuah number menjadi format "" untuk ribuat dan "M" untuk jutaan
//misal 9500 menjadi 9,5k atau 1.700.000 menjadi 1,7M 

function formatNumber($number){
    if ($number >= 1000000) {
        $format = number_format($number / 1000000, 1) . " M";
    } elseif ($number >= 1000) {
        $format = number_format($number / 1000, 1) . " K";
    } else {
        $format = number_format($number);
    }

    echo $format;
}

formatNumber(9500);
echo "<br>";
formatNumber(1700000);
