<?php
//Union (+ operator common key ni calue nai ave)
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "D" => "strawberry", "c" => "cherry");

$c = $a + $b; // Union of $a and $b
echo "Union of \$a and \$b: \n";
var_dump($c);
echo "<br/>";

$c = $b + $a; // Union of $b and $a
echo "Union of \$b and \$a: \n";
var_dump($c);
echo "<br/>";

$a += $b; // Union of $a += $b is $a and $b
echo "Union of \$a += \$b: \n";
var_dump($a);

?>