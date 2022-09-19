<?php

class Cars{
    public $comp;
    public $color='white';
    public function wheel($radii){
        // $dia=12;
        $area=3.14*pow($radii,2);
        echo "Weel area is $area";
    }
    
}
$bmw=new Cars();
$bmw->comp='BMW';
echo $bmw->wheel(4);


class WheelScrew extends Cars {
    public function numScrew(){
        echo '6 number of screw required';
    }
}

$swift=new wheelScrew();
echo $swift->color;//white this is parent class property
echo '<br/>';
echo $swift->numScrew();


?>
