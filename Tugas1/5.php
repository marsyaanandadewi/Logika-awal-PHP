<?php
$angka1 = 20; 
$angka2 = 3;  

$hasil = $angka1 / $angka2;

if (is_float($hasil) || is_double($hasil)) {
    echo "$angka1 : $angka2 = $hasil dibulatkan menjadi  " . round($hasil);
} else {
    echo "$angka1 : $angka2 = $hasil";
}
?>

