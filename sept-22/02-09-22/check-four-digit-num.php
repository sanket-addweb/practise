<?php
$num=121;
$sum=0;

while($num!=0){
   $r = $num%10;
   $num=round($num/10);
   $sum=$sum+1;
}

if($sum==4){
    echo "The num is four digit number";
}
else{
    echo "The num is not four digit number";
}

?>