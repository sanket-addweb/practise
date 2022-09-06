<?php

function show($name){
    
    return "<br/>Hello $name";
}
$name='Sanket';
// show($name);//Dispaly Hello Sanket
$uName=show($name);
echo $uName.' welcome to here';
echo "$uName welcome to here";//variable inside double qoutes works here
echo '$uName welcome to here';//variable inside single quotes not works here


?>