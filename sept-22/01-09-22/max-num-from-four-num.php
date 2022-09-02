<?php
$num1=93;
$num2=90;
$num3=50;
$num4=80;

if($num1>$num2){
    if($num1>$num3){
        if($num1>$num4){
            echo $num1.' is largest';
        }
        else{
            echo $num4.' is largest';
        }
    }
    else{
        if($num3>$num4){
            echo num3.' is largest';
        }
        else{
            echo num4.' is largest';
        }
    }
}
else{
    if($num2>$num3){
        if($num2>$num4){
            echo $num2.' is largest';
        }
        else{
            echo $num4.' is largest';    
        }
    }
    else{
        if($num3>$num4){
            echo $num3.' is largest';
        }
        else{
            echo $num4.' is largest';
        }
    }
}

?>