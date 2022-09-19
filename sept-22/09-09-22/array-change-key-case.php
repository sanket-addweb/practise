<?php
$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));

print_r(array_change_key_case($input_array,CASE_LOWER));

echo "<br/>";
$arr=array("apple","mAnGo","bAnaNA");//here not works because it keys is number and its case is no matter change or not
print_r(array_change_Key_case($arr,CASE_UPPER));
print_r(array_change_key_case($arr,CASE_LOWER));
?>