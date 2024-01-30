<?php
// function biodata($nama, $jurusan = "NULL") {
//     echo "hello, $nama! anda di terima sebagai siswa jurusan $jurusan , ";
// }

// biodata("putri");
// biodata("puta", "TJKT");

//------------------------------------------------------------------

function perkalianLima( &$angka){ //<- dan, jadi $ tu ngambil nilai yang sudah di eksekusi
echo $angka *= 5;
    
}

$no = 2;
echo perkalianLima($no); //10
echo $no; //kalo pake dan di atas dia hasilnya jadi 10, kalo dannya di hapus dia hasilnya 2

//menghasilkan 2