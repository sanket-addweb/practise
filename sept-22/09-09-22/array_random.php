<?php
//random key generate and return its values
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 3);
echo $input[$rand_keys[0]] . "<br/>";
echo $input[$rand_keys[1]] . "<br/>";
// echo $input[$rand_keys[2]] . "<br/>";
?>