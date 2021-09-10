<?php

$rekursif =[ [90,80,60,100,127,81,51,99],
];

function nilaimak($array){
    $a = count($array);
    $max = $array[0];
    for($i = 1; $i < $a; $i++)
    if($max < $array[$i])
       $max = $array[$i];
       return $max;
}

function nilaimin($array){
    $a = count($array);
    $min = $array[0];
    for($i = 1; $i < $a; $i++)
    if($min > $array[$i])
       $min = $array[$i];
       return $min;
}
$array = array(90,80,60,100,127,81,51,99);
echo "Nilai Terbesar  : ".nilaimak($array);
echo "<br>";
echo "Nilai Terkecil : ".nilaimin($array);
?>