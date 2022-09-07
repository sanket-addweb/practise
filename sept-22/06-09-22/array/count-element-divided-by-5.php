<?php

$num=[12,10,40,30,25,13,8,89];
$count=0;

foreach($num as $numValues){
    if($numValues%5==0){
        $count=$count+1;
    }
}
echo "The number of element devided by 5 is ".$count;


?>