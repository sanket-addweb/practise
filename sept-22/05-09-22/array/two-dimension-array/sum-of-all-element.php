<?php

$num=array(
    array(1,2,3,4,5),
    array(1,-2,3,4,-5)
);

$sum=0;
for($i=0;$i<2;$i++){
    for($j=0;$j<=count($num);$j++){
        $sum=$sum+$num[$i][$j];
    }
}
echo $sum;

?>