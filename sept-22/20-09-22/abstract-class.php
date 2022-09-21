<?php

abstract class Cars1{
    abstract protected function myFunction3($comp1,$color1);
    // protected function myFunction($a);//show syntax error
    //so we use abstract keyword before function keyword and use it in child class
}

class Engine1 extends Cars1{
    public function myFunction3($comp1, $color1) {
        echo "The car name is $comp1 and color is $color1";
    }
}

$obj4=new Engine1();
echo $obj4->myFunction3('swift','white');
echo "<br/>";
?>


<?php
abstract class AbstractClass
{
    // Our abstract method only needs to define the required arguments
    abstract protected function prefixName($name);

}

class ConcreteClass extends AbstractClass
{

    // Our child class may define optional arguments not in the parent's signature
    public function prefixName($name, $separator = ".") {
        if ($name == "Pacman") {
            $prefix = "Mr";
        } elseif ($name == "Pacwoman") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "{$prefix}{$separator} {$name}";
    }
}

$class = new ConcreteClass;
echo $class->prefixName("Pacman"), "\n";
echo $class->prefixName("Pacwoman"), "\n";
?>


<?php

abstract class Cars2{
    abstract protected function myFunction2();
    // protected function myFunction($a);//show syntax error
    //so we use abstract keyword before function keyword and use it in child class
}

class Engine extends Cars2{
     public function myFunction2() {
        return "The car name is  and color is  and speed is ";
    }
}

$obj1=new Engine();
echo $obj1->myFunction2();

?>