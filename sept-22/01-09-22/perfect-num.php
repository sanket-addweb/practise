<?php
$num=28;
$sum=0;

for($i=1;$i<$num;$i++){
    $res=$num%$i;
    if($res==0){
        $sum=$sum+$i;
    }
}
if($sum==$num){
    echo $num.' is perfect';
}
else{
    echo $num.' is not perfect';
}

?>