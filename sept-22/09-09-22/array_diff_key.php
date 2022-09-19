<?php
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);

print_r(array_diff_key($array1, $array2));//Array ( [blue] => 1 [red] => 2 [purple] => 4 )



$array1 = array('blue' => 1, 'red'  => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);
$array3 = array('blue' => 6, 'yellow' => 7, 'mauve' => 8);

print_r(array_diff_key($array1, $array2, $array3));//Array ( [red] => 2 [purple] => 4 )
?>
