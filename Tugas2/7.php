<?php

$totalPembelian = 130000;
$hari = date("D");

if ($hari == "Tue") {
    $diskon = 0.05;

    if ($totalPembelian >= 100000) {
        $diskon += 0.07;
    }
} else {
    $diskon = 0;
}
$jumlahDis = $diskon  *  $totalPembelian;
$pembayaran = $totalPembelian - $jumlahDis;
echo "Mendapatan Diskon ($diskon%) Seharga: " . number_format( $jumlahDis, 0, ',', '.')  . " Dengan pembayaran : " . number_format($pembayaran, 0, ',', '.');

?>