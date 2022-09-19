<?php


$fruits = array("lemon", "orange", "banana", "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

$age=array("Mohan"=>34,"Ramesh"=>21,"Mohit"=>18,"Amit"=>29);

// sort($age);//sort according to value
// print_r($age);
// asort($age);//acording to values
// print_r($age);

// ksort($age);//according to keys
// print_r($age);

// arsort($age);//decending according to values
// print_r($age);

krsort($age);//decending according to keys
print_r($age);
?>