<?php

$num=array(12,23,45,64,89,29,23);

function binarySearch($arr,$x){
    if(count($arr)==0){
        return false;
    }
    $low=0;
    $heigh=count($arr)-1;
    for($i=0;$i<count($arr);$i++){
        $mid=floor(($low+$heigh)/2);
        if($arr[$i]==$x){
            return true;
        }
        elseif($arr[$mid]<$x){
            $low=$mid+1;
        }
        else{
            $heigh=$mid-1;
        }
    }
    return false;
}
$arr=$num;
$x=45;

if(binarySearch($arr,$x)==true){
    echo 'Element is exit';
}
else{
    echo "Element is not exit";
}




?>