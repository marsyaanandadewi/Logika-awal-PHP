<?php

$totalBelanja = 250000;
$batasMinVoucher = 100000;
$potonganHarga = 10000;

if ($totalBelanja > $batasMinVoucher) {
    $totalBelanja -= $potonganHarga;
    echo "Andi mendapatkan voucher potongan harga sebesar 10.000. Total yang harus dibayar: $totalBelanja";
} else {
    echo "Andi tidak mendapatkan voucher potongan harga. Total yang harus dibayar: $totalBelanja";
}
?>
