<?php
//inheritance
//single 
//a->b

//multi level inheritance
//a->b b->c c->d

//multiple inheritance use interface instead of this 
//a & b ->c

//hirarchial inheritance


//in multiple inheritance
class class1{
    function fun1(){

    }
    function test(){

    }
}
class class2{
    function fun1(){

    }
}
// class class3 extends class1  class2{
// }//here show error because we cannot extends more than one class in single class


// therefore use interface

interface class3{
    function fun1();
    //method or function not contain body inside interface
    // All the methods declared in the interface should be public. 
    //we can not declare constructor inside interface
    //Interfaces cannot contain variables.
    //we cannot create object of interface
    //it is mendetory to use interface method inside child class


}
interface class4{
    function fun2();
}
class class5 implements class3,class4{
    function fun1(){
        echo "this is class 4 and use of interface class2";
    }
    function fun2(){
        echo "This is class 4 and use of interface class2";
    }
}
// $obj2=new class3();//Uncaught Error: Cannot instantiate interface class3 
$obj1=new class5();
$obj1->fun1();
$obj1->fun2();
?>