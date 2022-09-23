<?php

class CheckStatic{
    var $publicVar='I am var with not static';
    public static $my_static='This is var under static';

    public function myFunction(){
        return self::$my_static;
    }
}

print CheckStatic::$my_static;//works
// print CheckStatic::$publicVar;//fatal error
$obj=new CheckStatic();
echo $obj->myFunction();//works
echo "<br/>";
echo CheckStatic::myFunction();//works


//uses
class class1{
    public function __construct(){
        echo "This is constructor it is automatically call when object is created";
    }

    public static function myFun(){
        echo "This is function under static keyword";
    }
}

class1::myFun();//without creating object we can access static property but not constructor

//if you want to access constructor make object from that class
$obj2=new class1();//works //This is constructor it is automatically call when object is created
//constructor automatically call when object is made



//Difference between static property and non-static property

class class2{
    public $name='Kartik';
    public static $address='Viramgam';

}

//access by className::propertyName
echo "<bt/>";
// class2::$name;//Not works // Uncaught Error: Access to undeclared static property
echo class2::$address;//works because it is static property

//access by creating class instant i.e object
$obj8=new class2();
echo "<br/>";
echo $obj8->name;
// echo $obj8->address;//Not works because it is static property

//static property can access inside static method and non-static method
//but non-statc property can not be access inside static method

class class3{
    public $sName='Vaibhav';
    public static $rollNo=22;
    public function fun1(){
        echo $this->sName;
        echo self::$rollNo;
    }
    public static function staticFun(){
        // echo $this->sName;//not works because it is non static property we can not access inside static function
        // echo $this->rollNo;//not works because it is static property we cannot use $this to access static property
        echo self::$rollNo;//works because it is static property
    }
}

$obj9=new class3();
echo "<br/>";
$obj9->fun1();//vaibhav 22
class3::staticFun();//22
?>