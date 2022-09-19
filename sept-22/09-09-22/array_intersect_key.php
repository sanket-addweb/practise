<?php
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green','red' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

print_r(array_intersect_key($array1, $array2));//Array ( [blue] => 1 [red] => 2 )
?>