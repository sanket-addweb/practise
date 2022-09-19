<?php
//string to array with seperator
/* 
   A string that doesn't contain the delimiter will simply
   return a one-length array of the original string.
*/
$input1 = "hello World";
$input2 = "hello,there";
$input3 = ',';
var_dump( explode( ',', $input1 ) );//return hello world because seperator is not match
var_dump( explode( ' ', $input1 ) );//return 0->hello 1->world
var_dump( explode( ',', $input2 ) );//0->hello 1->there
var_dump( explode( ',', $input3 ) );//0->'' 2->''
var_dump( explode( ' ', $input1,1 ) );//return only 1 element 0->hello world
var_dump( explode( ' ', $input1 ,2) );//return  2 element 0->hello 1->world

?>