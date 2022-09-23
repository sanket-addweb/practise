<!-- constant And static property to access outside class we use '::'  
  1. by making mathod with self:: keyword inside class
   2. by classname with doublecolon i.e, MyClass::CONST_VALUE 
     3. If we want to access in child class use parent keyword i.e 
     echo parent::static_property_name or constant_name inside child class
      4. only static variable use in static function
        5. echo self::$str1;//error not only access static property by self keyword here str1 is property without static keyword-->

<!-- uses

    1.when you want to use class property and method without creating object
    2. when we need to call class by creating oject but we not need to call its constructor then use static property and method because we access static property without creating object
    therefore if not created object then obeoulsy constructor not call-->

<?php
class MyClass {
    const CONST_VALUE = 'A constant value';
    public $fruitsName='Apple';
    public function MyFunction(){
        echo self::CONST_VALUE;
    }
}

$classname = 'MyClass';
echo $classname::CONST_VALUE;//A constant value
echo "<br/>";

echo MyClass::CONST_VALUE;//A constant value
$obj2=new MyClass();
echo $obj2->MyFunction();//A constant value
echo $obj2->fruitsName;//Apple
// echo $obj2->CONST_VALUE;//error undefine property CONST_VALUE because it is constant so we use '::' to access that
?>

<!-- Making child class by extending MyClass -->
<?php

class OtherClass extends MyClass
{
    public $str1='This is without static keyword';
    public static $my_static = 'static var';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";//we access parent class property and method into child class
        echo self::$my_static . "\n";
        // echo self::$str1;//only static variable use in static function
    }
    public function test(){
        // echo self::$str1;//error not only access static property by self keyword
        echo $this->str1;
    }
}

$classname = 'OtherClass';
$classname::doubleColon();
echo "<br/>";
$obj1=new OtherClass();
echo $obj1->str1;//works
echo "<br/>";
echo $obj1->test();//works
// $classname->doubleColon();//not access because method declare under static keyword

OtherClass::doubleColon();


?>