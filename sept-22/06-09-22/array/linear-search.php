<?php

$num=array(12,23,324,12,3,45,67);

function searchArr($arr,$x){
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]==$x){
            echo "The Index of $x is $i<br/>";
        }
    }
}

 searchArr($num,12);
 searchArr($num,45);



?>