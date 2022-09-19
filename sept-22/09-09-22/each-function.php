<?php

//each() is return key and value from array and move the array-pointer to next element

$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
$bar = each($foo);
print_r($bar);//Array ( [1] => bob [value] => bob [0] => 0 [key] => 0 )

$bar2=each($foo);
print_r($bar2);//Array ( [1] => fred [value] => fred [0] => 1 [key] => 1 )
?>