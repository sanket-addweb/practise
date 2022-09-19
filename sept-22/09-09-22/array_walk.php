<?php
//array ma walk kari ne aek aek value bahar nikalse
function myfunction($value,$key)
{
echo "The key $key has the value $value<br>";
}
$a=array("a"=>"Red","d"=>"green","c"=>"blue");
array_walk($a,"myfunction");



$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');

function test_print($item, $key)
{
    echo "$key holds $item\n";
}

array_walk_recursive($fruits, 'test_print');//works
// array_walk($fruits,'test_print');//Error because we cannot iterate array $sweet

?>