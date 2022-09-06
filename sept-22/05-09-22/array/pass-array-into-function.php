<?php

echo "Pass an array into the function<br/>";

$num=[12,23,34,45,54,43,32,21];

function average($arr){
    $total=0;
    //by for loop
    // for($i=0;$i<count($arr);$i++){
    //     $total=$total+$arr[$i];
    // }

    //by foreach loop
    echo 'By foreach loop<br/>';
    foreach($arr as $arrValues){
        $total=$total+$arrValues;
    }
    $avg=round($total/count($arr));
    return $avg;
}

echo 'The average of array element is '.average($num);



?>