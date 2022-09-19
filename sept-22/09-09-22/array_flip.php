<?php
// change key to vlaues and values became key
$input = array("a" => 1, "b" => 1, "c" => 2);
$flipped = array_flip($input);

print_r($flipped);//Array ( [1] => b [2] => c )


$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

print_r($flipped);//Array ( [oranges] => 0 [apples] => 1 [pears] => 2 )
?>