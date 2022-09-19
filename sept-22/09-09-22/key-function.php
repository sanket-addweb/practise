<?php
$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');

// this cycle echoes all associative array
// key where value equals "apple"
while ($fruit_name = current($array)) {
    if ($fruit_name == 'apple') {
        echo key($array), "\n";
    }
    next($array);
}

$age=['Sanket'=>21,"Savan"=>20,"Arvind"=>20,'Hiten'=>21];
foreach($age as $ageKey => $ageValue){
    if($ageValue==21){
        echo $ageKey;
        echo "<br/>";
    }
}
while($age_value=current($age)){
    if($age_value==21){
        echo key($age);
        echo "<br/>";
    }
    next($age);
}

?>