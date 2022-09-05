<?php


function displayName(){
    $name='Sanket';
    // global $name;
    echo 'Your name is '.$name;
}

displayName();

echo '<br/>Outside the function local variable'.$name;//show undefine variable $name



?>