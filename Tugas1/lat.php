<?php
$angka = "22";

if (is_string($angka)) {
    echo "\"$angka\" adalah teks";       
    echo '"' . $angka . '" adalah teks';
} else {
    echo "$angka adalah number";
}

//terdapat sati variabel yang memiliki value -5. Tentukan lah apakah variabel tersebut masuk kedalam bilangan bulat positif , bilangan bulat negatif atau bilangan cacah. Dan apakah variabel tersebut merupakan variabel kelipatan 3

//$a = -5

//terdapat dua variabel yg menyimpan data angka
//$angka1 = 10;
//$angka2 = 3;
//apabla hasil perhitungn bagi antara angka1 dan angka2 merupakan desimal , maka hasil akan dibulatkan tertampil
//seperti berikut: 10:3 = 3,33333 jika dibulatkan menjadi 3
//apabila hasil perhhitungan bukan desimal:
// 10:5 = 2

// terdapat sebuah variable yang menyimpan data tahun
$year = 2023;
// seperti yang diketahui,untuk tahun tahun yang merupakan kelipatan 4,pada bulan februari nyaterdapat tanggal 29
// buatlah pengkondisian jika tahun merupakan kelipatan 5, maka akan menampilkan :
//tahun 2024,bulan februari sampai dengan tanggal 29
// selain dari itu, akan menampilkan :
// tahun 2023,bulan februari sampai dengan tanggal 28