<?php

//normal function
function displayNo($num){
    if($num<=5){
        echo "<br/> $num";
    }
}
displayNo(2);

// Move to recursive function(function inside function pote call thase and output ape jase untill condition false)
function displayNo2($num){
    if($num<=5){
        echo "<br/> $num";
    }
    displayNo2($num+1);
}
displayNo2(2);



?>