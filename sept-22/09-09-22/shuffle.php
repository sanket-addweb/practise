<?php
//rendom order ma fervi dese shuffle()
$numbers = range(1, 20);
print_r($numbers);
echo "<br/>";
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
//7 6 10 14 4 20 12 9 2 17 11 1 15 13 5 18 3 19 8 16
// when you refresh you get new order of values of array
?>