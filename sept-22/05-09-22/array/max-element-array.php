<?php

$num=[12,23,34,11,10,3];

$max_num=$num[0];
for($i=0;$i<count($num);$i++){
    if($num[$i]>$max_num){
        $max_num=$num[$i];
    }
}
echo $max_num;

?>