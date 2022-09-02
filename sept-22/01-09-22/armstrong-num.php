<?php
$num=152;
$arm=0;
$old=$num;

while($num!=0){
    $r=$num%10;
    $arm=$arm+$r*$r*$r;
    $num=round($num/10);
}
$num=$old;
if($num==$arm){
    echo $num.' is armstrong';
}
else{
    echo $num.' is not armstrong';
}

?>