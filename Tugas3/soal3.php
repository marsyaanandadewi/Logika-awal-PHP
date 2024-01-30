<!-- - nasi goreng = 15000
        - ayam bakar = 20000
        - nasi kebuli = 25000
        - aneka jus = 8000
        - es teh manis = 3000
        - es jeruk = 5000
    Rumah amakan beni mengadaakan program jumat berkah dengan memberikan 
    diskon sebesar 5% dihari jumat dan 2% dihari senin. hitunglah harga yang harus di bayar jika dani ingin 
    membeli 2 nasi kebuli, 1 ayam bakar, 2 nasi goreng (gunakan hari secara otomatis dari hari ini) -->

<?php

$NasiGoreng = 15000;
$AyamBakar = 20000;
$NasiKebuli = 25000;


$jumlahNasiGoreng = 2;
$jumlahAyamBakar = 1;
$jumlahNasiKebuli = 2;

$totalHarga = ($jumlahNasiGoreng * $NasiGoreng) + ($jumlahAyamBakar * $AyamBakar) + ($jumlahNasiKebuli * $NasiKebuli);
$hariIni = Date('D');


if ($hariIni == "Fri") {
    $diskon = 5;
} elseif ($hariIni == "Mon") {
    $diskon = 2;
} else {
    $diskon = 0;
}

$totalHargaDiskon = $totalHarga - ($diskon / 100 * $totalHarga);

echo "Total harga yang harus dibayar : " . $totalHargaDiskon;
?>