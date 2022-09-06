<?php

$num=array(
    array(1,2,3,4,5),
    array(1,-2,3,4,-5)
);
$sum=0;

for($i=0;$i<2;$i++){
    if($i<2){
        for($j=0;$j<5;$j++){
            $sum=$sum+$num[$i][$j];
        }
        echo $sum.": sum of element row number $i <br/>";
        $sum=0;
    }
}


?>