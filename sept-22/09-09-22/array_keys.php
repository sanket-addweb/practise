<?php

//return the key of array as array
$array = array(0 => 100, "color" => "red",1=>"blue");
print_r(array_keys($array));//Array ( [0] => 0 [1] => color [2] => 1 

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));//Array ( [0] => 0 [1] => 3 [2] => 4 ) 

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));
?>