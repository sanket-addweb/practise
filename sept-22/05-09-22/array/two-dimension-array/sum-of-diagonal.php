<?php

$num=array(
    array(1,2,3,4,),
    array(1,2,3,4,),
    array(2,45,34,23),
    array(12,23,55,89)
);

$sum=0;

for($i=0;$i<4;$i++){
    for($j=0;$j<=$i;$j++){
        if($i==$j){
            $sum=$sum+$num[$i][$j];
        }
    }
}
echo "Sum of Diagonal of square matrices is $sum";


?>