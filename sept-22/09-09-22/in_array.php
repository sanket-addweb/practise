<?php

$os = array("Mac", "NT", "Irix", "Linux","Window");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
if (in_array("mac", $os)) {
    echo "Got mac";
}
if(in_array('Window',$os)){
    echo "Got Window";
}


$a = array(array('p', 'h'), array('p', 'r'), 'o');

if (in_array(array('p', 'h'), $a)) {
    echo "'ph' was found<br/>";
}

if (in_array(array('f', 'i'), $a)) {
    echo "'fi' was found<br/>";
}
if(in_array('o',$a)){
    echo " o was found";
}
?>
