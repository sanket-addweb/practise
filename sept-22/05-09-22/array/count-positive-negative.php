<?php

$num=[12,23,-23,0,22,-9,0,-3,1];
$countN=0;
$countP=0;
$countZ=0;
for($i=0;$i<count($num);$i++){
    if($num[$i]<0){
        $countN=$countN+1;
    }
    elseif($num[$i]>0){
        $countP=$countP+1;
    }
    else{
         $countZ=$countZ+1;
    }
    
}

echo "In array number of Positive Element is $countP and Nagative is $countN and Zero is $countZ";


?>