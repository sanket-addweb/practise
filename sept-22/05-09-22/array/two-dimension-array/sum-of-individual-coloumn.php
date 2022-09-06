<?php

$num=array(
    array(1,2,3,4,5),
    array(1,2,3,4,5)
);

$sum=0;

for($j=0;$j<5;$j++){
    if($j<5){
        for($i=0;$i<2;$i++){
            $sum=$sum+$num[$i][$j];
        }
        echo "The sum of $j column $sum <br/>";
        $sum=0;
    }
}


?>