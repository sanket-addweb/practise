<?php

$input = array("red", "green", "blue", "yellow");
array_splice($input, 2);//remove all element from postion 2
var_dump($input);//array(2) { [0]=> string(3) "red" [1]=> string(5) "green" }

echo "<br/>";
$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, -1);
var_dump($input);

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, count($input), "orange");//start removing element from position 1 and from that position remove number of element(length) and add orrange at postion 1
var_dump($input);// array(2) { [0]=> string(3) "red" [1]=> string(6) "orange" }

echo "<br/>";
$input = array("red", "green", "blue", "yellow");
array_splice($input, -1, 1, array("black", "maroon"));//start removing of element from last number 1 element and from that position remove 1 number of element and add black,maroon at last postion 1
var_dump($input);
?>