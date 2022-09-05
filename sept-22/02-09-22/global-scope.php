<?php

$name='Sanket';

function displayName(){
    global $name;
    echo 'Your name is '.$name;
}

displayName();

echo '<br/>Outside the function global variable'.$name;



?>