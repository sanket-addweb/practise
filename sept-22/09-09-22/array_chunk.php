<?php

$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 3));
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 1));
// print_r(array_chunk($input_array, 0));//error
// print_r(array_chunk($input_array, 2, true));
?>