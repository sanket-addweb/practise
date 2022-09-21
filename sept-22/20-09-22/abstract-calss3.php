<?php

//Properties cannot be declared abstract

//difference between inteface and abstract class
// 1. Interfaces may not include properties
// 2.Interface method must not be abstract
// 4. iterface contain only abstract function i.e, function without body 
    //but abstract class may contain abstract function as well as normal function plus     property

abstract class parentClass{
    public $name='Sanket';
    private $address="Mahesana";
    public function fun(){
        echo $this->address;
        echo "<br/> We are in parent class and this is a normal function";
    }
    abstract protected function myFun();
}

class class2 extends parentClass{
    public function myFun(){
        parent::fun();
        echo "Now we are in child class2 and with function of parent class fun()";
    }
}

$obj1=new class2();
$obj1->Myfun();

//difference with interface
interface  class1{

    public function fun();//works
    public function Myfun();//works
    // abstract public function fun1();//Error Interface method class1::fun1() must not be abstract
    // public function myFun(){

    // }//Error iterface contain only abstract function i.e, function without body
}



?>