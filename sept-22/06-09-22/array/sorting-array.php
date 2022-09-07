<?php

$num=array(12,23,89,24,2,43,3);

function sortArr($arr){
    for($i=1;$i<count($arr);$i++){
        $key=$arr[$i];
        $j=$i-1;

        while($j>=0 && $arr[$j]>$key){
            $arr[$j+1]=$arr[$j];
            $j--;
        }
        $arr[$j+1]=$key;
        
    }
    return $arr;
}

$newNum=sortArr($num);
// print_r(sortArr($num));
print_r($newNum);
foreach($newNum as $values){
    echo $values."<br/>";
}
?>