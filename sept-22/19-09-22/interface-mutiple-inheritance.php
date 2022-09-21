<?php
//interface with class must be contain one abstract function(function without body)
//no constructor in interface
//All function must be public
//interface support multiple inheritance
//we cannot amke object from interface class 
//we cannot make constructor inside interface class



interface class1{
    public function test();
}

class class2 implements class1{
    public function test(){
        echo "This is function inside class2";
    }
}

class2::test();
echo "<br/>";
$obj1=new class2();
$obj1->test();

//while multiple inheritance
interface class4{
    public function myFun1();
}
interface class5{
    public function myFun2();
}

class class6 implements class4,class5{
    public function myFun1(){
        echo "I am function 1";
    }
    public function myFun2(){
        return "I am function2";
    }
}

$obj2=new class6();
echo $obj2->myFun2();
$obj2->myFun1();


interface A{
    public function foo($name);
}

interface B{
    public function bar();
}

interface C extends A,B{
    public function boo();
}

class D implements C{
    public function foo($name){
        echo "This is interface from class A and name is $name";
    }
    public function bar(){
        echo "This is interface from class B";
    }
    public function boo(){
        echo "This is interface from class C";
        echo "Here Class D not directly interface with A and B but by Class C";
    }
}

$obj3=new D;
$obj3->foo('savan');
?>