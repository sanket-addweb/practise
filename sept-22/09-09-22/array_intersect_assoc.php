<?php

//It compair both values and key and return that element of array1 which is not present in array2
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "blue", "red","k"=>"brown");
$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array);//Array ( [a] => green )
?>