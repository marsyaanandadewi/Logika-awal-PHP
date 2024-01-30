<?php

$panjang = 13;
$lebar = 9;
$luas = $panjang * $lebar;

if ($luas < 90) {
    $tipeRumah = "Tipe Rumah: 36";
} elseif ($luas >= 90 && $luas <= 96) {
    $tipeRumah = "Tipe Rumah: 45";
} elseif ($luas > 96 && $luas <= 120) {
    $tipeRumah = "Tipe Rumah: 54";
} elseif ($luas > 120 && $luas <= 150) {
    $tipeRumah = "Tipe Rumah: 60";
} else {
    $tipeRumah = "Tipe Rumah: 70";
}

echo$tipeRumah;
?>