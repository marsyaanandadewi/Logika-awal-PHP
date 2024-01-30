<?php

$array = array(1, 2, 3);

var_dump($array);
// echo($array);
echo "<br>";

print_r($array);
echo "<br>";


//kalo mau munculin pake echo harus pake looping
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i];
}
echo "<br>";

foreach ($array as $key => $value) { //key itu index ke berapanya, kalo value itu isinya 
    echo "index ke- $key = ". $value . "<br>";
}

