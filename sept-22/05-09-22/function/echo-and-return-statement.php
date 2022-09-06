<?php

//function with return statement----------------------------------

function increament2($i){
    $i++;
    return $i;
}

$b=15;
$x=increament2($b);
$sum=$x+10;
echo $sum;//return 26 because $x take as a number because of reutrn statement inside function


//function with echo statement-------------------------------------------------

function increament3($i){
    $i++;
    // echo '<br/>'.$i;
    echo $i;
    // return $i;
}

$x=increament3($b);
$sum=$x+10;
echo $sum;//return 1610 because $x take as a string because of echo statement inside function


//function return statement with returning string
function show($name){
    
    echo "<br/>Hello $name";
}
$name='Sanket';
show($name);//Dispaly Hello Sanket


function show2($name){
    
    // echo "<br/>Hello $name";
    return "<br/>Hello $name";
}
$name='Sanket';
show2($name);//Not display output
echo show($name);// now it display Hello Sanket
?>