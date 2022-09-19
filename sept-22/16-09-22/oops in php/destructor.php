<?php

class Cars{
    public $name;
    public $color;

    function __construct($name1,$color1){
        $this->name=$name1;
        $this->color=$color1;
    }
    function __destruct(){
        echo "The color of $this->name is $this->color<br/>The allocated memory of variable is destory after object is executed";
    }
}

$car1=new Cars('BMW','blue');



class SomeClass
    {
 
        function __construct()
        {
            echo "In constructor, ";
            $this->name = "Class object! ";
        }
 
        function __destruct()
        {
            echo "destroying " . $this->name . "\n";
        }
    }
$obj = new Someclass();
 

?>