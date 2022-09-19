<?php

//compair values of two  array and return first array element which is not present in  second array
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
print_r($result);//Array ( [b] => brown [c] => blue [0] => red )

//key => value pairs are considered equal only if (string) $elem1 === (string) $elem2 .

$array1 = array(0, 1, 2);
$array2 = array("00", "01", "2");
$result = array_diff_assoc($array1, $array2);
print_r($result);//Array ( [0] => 0 [1] => 1 )
?>