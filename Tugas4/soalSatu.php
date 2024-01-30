<!-- 1. Dari bilangan berikut, kelompokan nilai-nilai tersebut menjadi kelompok kompeten
 (lebih dari atau sama dengan 75) dan belum kompeten (selain dari itu). 
 Lalu tampilkan berdasarkan kelompok tersebut.
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];
 -->

<?php
$nilai = [75, 77, 87, 70, 90, 81, 69, 87, 66];

foreach ($nilai as $value) {
    if ($value >= 75) {
        $kompeten[] = $value;
    } else {
        $belumKompeten[] = $value;
    }
}

echo "Kelompok Kompeten: <ol>";
foreach ($kompeten as $value) {
    echo "<li>" .  $value .   "</li>";
}
echo "</ol><br>";

echo "Kelompok Belum Kompeten: <ol> ";
foreach ($belumKompeten as $value) {
    echo "<li>". $value . "</li>";
}
echo "</ol><br>";
?>