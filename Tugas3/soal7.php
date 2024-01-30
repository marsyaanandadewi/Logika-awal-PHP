<!-- predikat terhadap hasil ujian diber ketika 
mendapat predikat a jika nilai lebih dari 90 
predikat b jika lebih dari 75
selain itu c -->
<?php

$nilai = 85;

$predikat = ($nilai > 90) ? 'A' : ($nilai > 75 ? 'B' : 'C');

echo "Mendapatkan predikat: $predikat";

// $nilai = 80;
// echo $nilai > 90 ? 'A' : (($nilai > 75) ? 'B' : 'C');

// ?>
