<?php
$array1 = array("a" => "green", "red", "blue",  "d" => "brown", "0"=>"black");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);

print_r($result);//Array ( [0] => black [1] => blue [d] => brown )// If it having name index then return that index othervise return numaric index
?>