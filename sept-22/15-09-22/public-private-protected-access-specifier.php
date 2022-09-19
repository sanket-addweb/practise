<?php

class Farma{
    public $comp;
    private $making_formula='Janor method for formulation of liquid nitrogen to vapour form';
    protected $equation='Good if you use within company otherwise you know what happen';
}

class Ajanta extends Farma{
    public $numDepart=12;
    public $location;
    function makeProduct(){
        parent::$equation;
        echo $eqution;
    }
}

$ajantaPart1=new Ajanta();
echo $ajantaPart1->numDepart."<br/>";
echo $ajantaPart1->location='Dahej';
echo $ajantaPart1->$making_formula;//fatal error
echo $ajantaPart1->makeProduct();//Fatal error
?>