<?php
$berat = 44 ;
$tinggi = 148 ;


$imt = $tinggi (100) ^2;
$kategori = $berat / ($tinggi * 2);
 
if($imt < 18.5 ){
    echo"$imt berat badan kurang";
}elseif (18.5 < 22.9 ){
  echo"$imt berat badan normal";
}elseif(22.9 - 24.9){
    echo"$imt berat badanlebih";
}elseif($imt >= 25){
    echo"berat badan obesitas";
}else{
    echo"tidak valid";
}