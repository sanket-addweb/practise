<?php
$array1 = array("a" => "green", "red", "blue","d"=>"yellow");
$array2 = array("b" => "green", "yellow", "red","k"=>"brown");
$result = array_intersect($array1, $array2);
print_r($result);//Array ( [a] => green [0] => red [d] => yellow )
?>
