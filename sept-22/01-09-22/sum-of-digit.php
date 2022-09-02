<?php
$num=12346;
$sum=0;
$old=$num;

while($num!=0){
    $r=$num%10;
    // $rev=$rev*10+$r;
    $sum=$sum+$r;
    $num=($num/10);
}

echo 'Sum of digit of number is '.$sum;

?>