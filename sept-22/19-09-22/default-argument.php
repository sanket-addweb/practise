<?php

class class1{
    public function __construct(){
        echo "This is class 1";
    }
}

class class2 extends class1{

}
$obj1=new class2();//This is class 1

//now default argument
class class3{
    // public $name;
    public function __construct($name="sanket"){
        echo "This is class 1 and name is $name";
    }
}

//now use constructor in child class
class class4 extends class3{

}
$obj2=new class4("Manoj");//This is class 1 and name is Manoj
$obj3=new class4();//This is class 1 and name is sanket

class class5{
    // public $name;
    public function __construct($name="sanket"){
        echo "This is class 1 and name is $name";
    }
}

class class6 extends class5{
    public function __construct(){
        echo "I am class6";
    }
}
$obj4=new class6();//I am class6 //Here we use constructor in child class But in child class having no any constructor then parent class constructor call


//therefore now If we want to use parent constructor property and method then use parent keyword

class class7{
    // public $name;
    public function __construct($name="sanket"){
        echo "This is class 1 and name is $name";
    }
}

class class8 extends class7{
    public function __construct(){
        echo "I am class6";
        parent::__construct();
    }
}
$obj5=new class8('Mohit');//I am class6This is class 1 and name is sanket

//Now passing argument in child class contructor and from that pass to parent class constructor
class class9{
    // public $name;
    public function __construct($name="sanket"){
        echo "This is class 1 and name is $name";
    }
}

class class10 extends class9{
    public function __construct($name){
        echo "I am class6";
        parent::__construct($name);
    }
}
$obj6=new class10('Mohit');//I am class6This is class 1 and name is Mohit

//now accessing parent class variable inside child class
class class11{
    public $name;
    public $address="Mahesana";
    public function __construct($name="sanket"){
        $this->name=$name;
        echo "This is class 1 and name is $this->name";
    }
}

class class12 extends class11{
    public function __construct($name){
        echo "I am class6";
        parent::__construct($name);
    }
    public function Myfun(){
        // $address10=parent::$address;//Error because we can access static property and method and constructor only
        //with this you can use self keyword to access property of current class in current class
        echo $this->address;
    }
}
$obj7=new class12('Mohit');
echo $obj7->Myfun();
?>