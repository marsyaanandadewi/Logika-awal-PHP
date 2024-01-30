<?php
// Total pembelian
$total_pembelian = 130000;

// Program diskon
$diskon = ($total_pembelian > 100000) ? 0.07 : 0.05;

// Hitung jumlah diskon
$jumlah_diskon = ($diskon / 100) * $total_pembelian;

// Hitung total yang harus dibayar
$total_bayar = $total_pembelian - $jumlah_diskon;

echo "Total pembelian: Rp " . number_format($total_pembelian, 0, ',', '.') . "\n";
echo "Diskon {$diskon}%: Rp " . number_format($jumlah_diskon, 0, ',', '.') . "\n";
echo "Total yang harus dibayar: Rp " . number_format($total_bayar, 0, ',', '.') . "\n";
?>
