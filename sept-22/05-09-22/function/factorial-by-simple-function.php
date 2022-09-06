<?php
$fact=1;
function factorial($num){
    global $fact;
    for($i=1;$i<=$num;$i++){
        $fact=$fact*$i;
    }
    return $fact;
}

echo factorial(5);

?>