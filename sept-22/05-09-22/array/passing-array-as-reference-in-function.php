<?php

$num=array(11,12,13,14,15);
// $num=[11,12,13,14,15];

function arrFunction(&$arr){
    for($i=0;$i<count($arr);$i++){
        $arr[$i]=$arr[$i]+20;
    }
}

arrFunction($num);

foreach($num as $numValues){
    echo $numValues.', ';
}



?>