<?php
$num=1234;
$rev=0;
$old=$num;
while($num!=0){
    $r=$num%10;
    $rev=$rev*10+$r;
    $num=round($num/10);
}
$num=$old;
echo 'Reverse of '.$num.' is '.$rev;

?>