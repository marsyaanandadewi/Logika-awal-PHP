<?php
$usia = 17;

if ($usia > 6 && $usia <=12 ) {
    echo "Umur $usia waktu tidur yang baik 10 jam";
} elseif ($usia > 12 && $usia  <= 18) {
    echo "Umur $usia waktu tidur yang baik 8-9 jam";
} elseif ($usia > 18 && $usia  <= 40) {
    echo "Umur $usia Waktu tidur yang baik 7-8 jam";
} else {
    echo "test";
}
?>
