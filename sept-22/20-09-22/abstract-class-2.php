<?php
//abstract class contain at least one abstract function
//abstract function must be declare in parent class not implimented i.e, not give any property and method inside that
//abstract class could not create object 
//abstract class and child class must containt abstract function

//use 
//whenever we want that parent class function must be use in child class then make parent class to abstract class with abstract keyword

Abstract class parentClass{
    abstract function test();
    
}

class child1{
    function test(){
        echo "This is required in child";
    }
}

$obj1=new child1();
$obj1->test();


abstract class banks{
    abstract function id_proof();
}

class hdfc extends banks{
    public function id_proof(){
        echo "Please submit Id_proof while opening account it is mandatory";
    }
}

hdfc::id_proof();//Please submit Id_proof while opening account it is mandatory
$sanket=new hdfc();
$sanket->id_proof();//Please submit Id_proof while opening account it is mandatory

?>