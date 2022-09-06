<?php

$num=[12,23,43,29,20,14,8];

$sumOdd=0;
$sumEven=0;
for($i=0;$i<count($num);$i++){
    if($num[$i]%2==0){
        $sumEven=$sumEven+1;
    }
    else{
        $sumOdd=$sumOdd+1;
    }
}

echo "Number of odd number is $sumOdd and Number of Even number is $sumEven";

?>