<!-- buatlah urutan perkalian 1-10 2-10 3-10 
1x1 =1 sampai denga 3x10 = 30
-->

<!-- baris: loop pertama di ambil dari kontenya ada berapa
kolom : loop kedua ambil dari jumlah kolom di per konten -->
<?php
for ($i=1 ; $i <= 3; $i++) { 
    for ($a=1; $a <= 10; $a++) { 
        echo "$a x $i = " . $a * $i . "|";
    } 
    echo "<br>";
}