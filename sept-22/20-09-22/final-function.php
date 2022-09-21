<?php
//final keyword before class keyword means 
// this class is final cannot be extended
//final keyword before function keyword means 
// this function is final cannot be use in other inherited child classes
//final prevents overriding of class and overriding of function

class BaseClass {
    public function test() {
        echo "BaseClass::test() called\n";
    }
    
    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
 }
 
 class ChildClass extends BaseClass {
    // public function moreTesting() {
    //     echo "ChildClass::moreTesting() called\n";
    // }
 }
 // Results in Fatal error: Cannot override final method BaseClass::moreTesting()
  ?>