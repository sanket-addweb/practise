<?php

$num=[12,23,34,11,10,3];

$min_num=$num[0];
for($i=0;$i<count($num);$i++){
    if($num[$i]<$min_num){
        $min_num=$num[$i];
    }
}
echo $min_num;

?>

