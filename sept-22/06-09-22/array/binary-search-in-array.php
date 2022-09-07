<?php

$num=array(12,23,45,64,89,29,23);

function binarySearch($arr,$x){
    if(count($arr)==0){
        echo 'please enter correct length of array';
    }
    $low=0;
    $heigh=count($arr)-1;
    for($i=0;$i<count($arr);$i++){
        $mid=floor(($low+$heigh)/2);
        if($arr[$i]==$x){
            echo "<br/>The index number of $x is $i <br/>";
            
        }
        elseif($arr[$mid]<$x){
            $low=$mid+1;
        }
        else{
            $heigh=$mid-1;
        }
    }
}
binarySearch($num,45);
binarySearch($num,23);




?>