
<!-- passing argument by Reference means  any changes make in argument that is make changes in orignal argument -->
<?php

function increment(&$i){

    $i++;
    return $i;
}

$i=10;
increment($i);
echo $i;//11

$a=40;
increment($a);
echo '<br/>'.$a;//41// any changes make in argument that is make changes in orignal argument

//function with return statement----------------------------------
function increament2($i){
    $i++;
    return $i;
}

$b=15;

echo '<br/>'. increament2($b);//it display return value of function incremetn2() i.e, 16
echo '<br/>'.$b;// it display 15

//function with echo statement-------------------------------------------------
function increament3($i){
    $i++;
    echo '<br/>'.$i;
    // return $i;
}

$c=30;
increament3($c);//display 31 that means echo statment required to display on browser, which is inside function, may be outside function but it is required, only return se kam na chale, nut sometime arithemtic operation ma kam chale 6 withoout echo


?>