<?php

$num1=[12,23,34,45,56];
$num2=array(65,54,43,32,21);

echo 'Before swap element of array 1 <br/> ';
foreach($num1 as $num1Values){
    echo $num1Values.", ";
}
echo "<br/>The array element of 2 is <br/>";

foreach($num2 as $num2Values){
    echo $num2Values.", ";
}


    for($j=0;$j<count($num1);$j++){
        $array[$j]=$num1[$j];
        $num1[$j]=$num2[$j];
        $num2[$j]=$array[$j];
    }

    echo "<br/><br/>The array element of 1 is <br/>";

    foreach($num1 as $num1Values){
        echo $num1Values.", ";
    }
    echo "<br/>The array element of 2 is <br/>";

    foreach($num2 as $num2Values){
        echo $num2Values.", ";
    }



?>