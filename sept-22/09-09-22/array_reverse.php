<?php
$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);// Array ( [0] => Array ( [0] => green [1] => red ) [1] => 4 [2] => php )
$preserved = array_reverse($input, true);//numaric index  not change remain same as previous array if you set second parameter true
//Array ( [2] => Array ( [0] => green [1] => red ) [1] => 4 [0] => php )

print_r($input);
print_r($reversed);
print_r($preserved);
?>