
<?php
//buatlah sebuah fungsi yang akan menghitung lembar uang rupiah.
//contoh: 140500
//lembar rupiah:
//- Rp. 100.000 : 1
//- Rp. 20.000 : 2
//- Rp. 500: 1

function rupiah($number) {
    $jumlahRupiah = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];

    foreach ($jumlahRupiah as $nilai) {
        $lembar = floor($number / $nilai);

        if ($lembar > 0) {
            echo "Rp. $nilai : $lembar " . "<br>";
        }
        $number %= $nilai;
    }
}
rupiah(180500);

?>