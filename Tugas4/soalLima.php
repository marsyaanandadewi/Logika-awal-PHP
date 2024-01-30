<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$bil = array_merge($bil1, $bil2);  // Menggabungkan dua array
$bil = array_unique($bil); // Menghapus nilai duplikat
rsort($bil);// Mengurutkan array dari terbesar ke terkecil

foreach ($bil as $bilangan) {
    echo $bilangan . " ";
}


