<?php

//buatlah sebuah fungsi yang akan mengahasilkan sebuah array dari banyak data yang di terima. data yang dikirim
//bentuk string nama nama jurusan. jika nma ajurusan ada yang di panggil diplikat, maka yang dimasukan ke array
//hanya salah satunya saja (caplslock).
// contoh pemanggilan argumentnya : namafunc("PPLG", "HTL", "KLN", "PMN", "pplg"). maka akan menghasilkan
// arrayy ["PPLG", "HTL, "KLN", "PMN"]


function createArray(...$jurusan) {
    return array_values(array_unique(array_map('strtoupper', $jurusan)));
}

print_r(createArray("PPLG", "HTL", "KLN", "PMN", "MPLB", "pplg", "htl"));


// $result = createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl");
// echo "[" . implode(", ", $result) . "]";