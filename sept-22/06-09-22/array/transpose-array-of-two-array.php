<?php
$num1=array(
    array(2,2,4),
    array(5,12,3),
    array(2,23,12)
);
// $num2=array(
//     array(1,2,23,4,5),
//     array(8,4,12,2,1)
// );

for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        $trans[$i][$j]=0;
        $trans[$i][$j]=$num1[$j][$i];
    }
}

for($k=0;$k<3;$k++){
    for($l=0;$l<3;$l++){
        echo $trans[$k][$l].", ";
    }
    echo '<br/>';
}
?>