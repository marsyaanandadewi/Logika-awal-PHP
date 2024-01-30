<?php
// Buatlah sebuah fungsi yang akan membandingkan dua buah string nama.
// Lalu, menampilkan jumlah karakter dari dua nama tersebut dan menampilkan
// nama yang memiliki jumlah karakter lebih banyak serta selisihnya.

function pembandingNama($nama1, $nama2) {
    $jumlah1 = strlen(str_replace(' ', '', $nama1));
    $jumlah2 = strlen(str_replace(' ', '', $nama2));

    if ($jumlah1 > $jumlah2) {
        $hasil = $jumlah1 - $jumlah2;
        echo "$nama1 memiliki jumlah karakter lebih banyak, dan memiliki selisih: $hasil karakter";
    } elseif ($jumlah1 < $jumlah2){
        $hasil = $jumlah2 - $jumlah1;
        echo "$nama2 memiliki jumlah karakter lebih banyak, dan memiliki selisih: $hasil karakter";
    } else {
        echo "Keduanya memiliki jumlah karakter yang sama";
    }
}

pembandingNama("Marsya An", "syaya ga gaaaa");
?>