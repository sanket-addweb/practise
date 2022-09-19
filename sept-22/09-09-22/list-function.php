<?php

$info = array('coffee', 'brown', 'caffeine');

// Listing all the variables
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.<br/>";

// Listing some of them
list($drink, , $power) = $info;
echo "$drink has $power.<br/>";

list($drink,$color, )=$info;
echo "$drink have color $color<br/>";

// Or let's skip to only the third one
list( , , $power) = $info;
echo "I need $power!<br/>";



list($a, list($b, $c)) = array(1, array(2, 3));

print_r("$a, $b, $c");
?>
