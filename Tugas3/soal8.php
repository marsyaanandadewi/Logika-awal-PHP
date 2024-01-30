
<!-- persentase kehadiran setiap siswa dalam satu bulan adalah 100%
sakit dan izin berkurang 3%, alfa berkurang 5%, hadir ga berkurang -->

<?php
$persentase = 80;
$izin = 0.03;
$alfa = 0.05;
$hadir = 0;

$kehadiran = ($persentase - $izin) ? '' : (($persentase - 0.05) ? 'alfa' : 'hadir');

?>

