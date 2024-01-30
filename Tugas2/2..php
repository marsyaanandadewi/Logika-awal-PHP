<?php
$nilaiMatematika = 80;
$nilaiBahasaInggris = 78;
$nilaiBahasaIndonesia = 92;

$rataRata = ($nilaiMatematika + $nilaiBahasaInggris + $nilaiBahasaIndonesia) / 3;


$nilaiMinMatematika = 87;
$nilaiMinBahasaInggris = 85;
$nilaiMinBahasaIndonesia = 87;
$rataRataMin = 85;


if ($nilaiMatematika >= $nilaiMinMatematika
    && $nilaiBahasaInggris >= $nilaiMinBahasaInggris
    && $nilaiBahasaIndonesia >= $nilaiMinBahasaIndonesia
    && $rataRata >= $rataRataMin) {
    echo "<span style=' color: green'>Peserta diterima </span>, dengan nilai rata-rata :  "  . number_format($rataRata, 2);
} else {
    echo "<span style=' color: red'>Peserta tidak diterima </span>, dengan nilai rata-rata :  " . number_format($rataRata, 2);
}
?>
