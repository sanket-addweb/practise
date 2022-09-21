<?php
//final keyword before class keyword means 
// this class is final cannot be extended
//final keyword before function keyword means 
// this function is final cannot be use in other inherited child classes
//final prevents overriding of class and overriding of function

//Cannot declare property as final, the final modifier is allowed only for methods, classes, and class constants
?>


 <?php
final class BaseClass {
   public function test() {
       echo "BaseClass::test() called\n";
   }

   // As the class is already final, the final keyword is redundant
   final public function moreTesting() {
       echo "BaseClass::moreTesting() called\n";
   }
}

// class ChildClass extends BaseClass {
// }
// Results in Fatal error: Class ChildClass may not inherit from final class (BaseClass)

class class2{
    // final public $name="Sanket";//Cannot declare property as final

}


?>

?>