You sent
<?php

//buatlah sebuah fungsi yang akan menerima data array berikut, serta angka yang di cari . misalnya ingin mencari
//angka 

$data = [80, 90, 75, 100, 85, 100, 65];


function searchNumber($angkaYangDicari, ...$data) {
    $jumlah = 0;
    foreach ($data as $value) {
        if ($value == $angkaYangDicari) {
            $jumlah += 1; 
        }
    }
    return $jumlah;
}

$angkaYangDicari = 100;
echo "jumlah angka $angkaYangDicari = " . searchNumber($angkaYangDicari, 100, 20, 40, 80, 100);
echo "<br>";
$angkaYangDicari2 = 80;
echo "jumlah angka $angkaYangDicari2 = " . searchNumber($angkaYangDicari2, 100, 20, 40, 80, 100);