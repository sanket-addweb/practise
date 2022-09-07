<?php

$num1=array(
    array(1,2,3,4,5),
    array(5,4,3,2,1)
);
$num2=array(
    array(1,2,3,4,5),
    array(5,4,3,2,1)
);

for($i=0;$i<2;$i++){
    for($j=0;$j<5;$j++){
        $sum[$i][$j]=$num1[$i][$j]+$num2[$i][$j];
    }
}

for($k=0;$k<2;$k++){
    for($l=0;$l<5;$l++){
        echo $sum[$k][$l].", ";
    }
    echo '<br/>';
}
?>