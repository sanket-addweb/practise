<?php

function odd($var)
{
    // returns whether the input integer is odd
    return ($var & 1);
}

function even($var)
{
    // returns whether the input integer is even
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Odd :<br/>";
print_r(array_filter($array1, "odd"));
echo "<br/>Even:<br/>";
print_r(array_filter($array2, "even"));




$entry = [
    0 => 'foo',
    1 => false,
    2 => -1,
    3 => null,
    4 => '',
    5 => '0',
    6 => 0,
];
echo "<br/>";
print_r(array_filter($entry));//return only foo and -1 values from $entry
?>
