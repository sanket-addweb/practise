<?php

function addition($a=12,$b=4){
    $sum=$a+$b;
    return $sum;
}

addition(20,22);// not display therefore assign to this any variable and then print that variable
echo addition(20,22);//42

$x=addition(20,29);
echo '<br/>'.$x;//49

//By using default value in function you can call with or without values passing to that function, even signle values you pass then also works
$oneValue=addition(10);//14
echo '<br/>'.$oneValue;

//if you are not pass any values then take default values
$noValues=addition();
echo '<br/>'.$noValues;

?>