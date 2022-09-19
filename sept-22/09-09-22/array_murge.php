<?php
//array murge it will be re index and start with zero
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);//Array ( [color] => green [0] => 2 [1] => 4 [2] => a [3] => b [shape] => trapezoid [4] => 4 )



//But in case unoin (+ operator) index of two array not change, sequence not change and array with same key show only in first array value
echo "<br/>";
$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$result = $array1 + $array2;
var_dump($result);

echo "<br/>";

//array_merge() with non-array types
//for that use (array) before that variable and then
$beginning = 'foo';
$end = array(1 => 'bar');
$result = array_merge((array)$beginning, (array)$end);
print_r($result);

?>
