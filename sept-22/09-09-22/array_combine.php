<?php
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);

$a1 = array('green', 'red', 'yellow');
$b1 = array('avocado', 'apple', 'banana','Mango');
$c1 = array_combine($a1, $b1);

print_r($c1);//Error array_combine(): Both parameters should have an equal number of elements
?>