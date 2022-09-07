<?php

$num=[12,32,2,3,23,4,7];
$sum=0;
foreach($num as $numValues){
    if($numValues%2==0){
        $sum=$sum+$numValues;
    }
}
echo "sum of even number element $sum";


?>