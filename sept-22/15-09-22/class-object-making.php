<?php

class AddTwoNumber{
    var $num1;
    var $num2;
    function addNum(){
        return ($this->num1+$this->num2);
    }

}

$add=new AddtwoNumber();
$add->num1=5;
$add->num2=6;
echo $add->addNum();//11
echo "<br/>";

class Car{
    public $color='green';
    public $comp;
    public $hasSunRoof=true;
}

$bmw=new Car();
echo $bmw->color;//green by default values of property of class
echo "<br/>";

//now giving new property value
$bmw->color='red';
$bmw->comp='bmw';
echo $bmw->color.' and '.$bmw->comp;//red




?>