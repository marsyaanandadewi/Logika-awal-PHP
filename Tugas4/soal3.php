<!--  dari array tersebut hitunglah jumlah rata-rata dari nilai tiap-tiap siswa. lalu tampilkan seperti berikut
 1. Andi : 81.2  -->

<?php
$student = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],  
    ],
    [
        'nama' => 'Bani',
        'nilai' => [80, 80, 82, 78, 88],  
    ],
    [
        'nama' => 'Dani',
        'nilai' => [80, 77, 82, 79, 82],  
    ],
    [
        'nama' => 'Eko',
        'nilai' => [80, 78, 90, 78, 88],  
    ],

];

echo "<ol>";
foreach ($student as $key => $value) {
    echo "<li>" . $value ['nama'] . " = " . (array_sum($value['nilai'])/
    count($value['nilai'])) . "</li>";
}
echo "</ol>";