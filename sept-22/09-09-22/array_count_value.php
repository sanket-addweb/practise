<?php
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));

$arr=array(12,4,"Harry",12,"Harry",12,"Apple",12);
print_r(array_count_values($arr));
// var_dump(array_count_values($arr));
echo array_count_values($arr);//It return array so not use echo
?>
