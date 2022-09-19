<?php

class MyClass
{
    public $public = 'visibility is Public';
    protected $protected = 'visibility is Protected';
    private $private = 'visibility is Private';

    function printHello()
    {
        echo $this->public."<br/>";
        echo $this->protected."<br/>";
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public; // Works
echo "<br/>";
$obj->printHello(); // Shows Public, Protected and Private
// echo $obj->private; // Fatal Error
// echo $obj->protected; // Fatal Error

//see now redeclaring
class MyClass3 extends MyClass
{
    // We can redeclare the public and protected properties, but not private
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj2 = new MyClass3();
echo $obj2->public; // Works
// echo $obj2->protected; // Fatal Error
// echo $obj2->private; // Undefined
$obj2->printHello(); // Shows Public2, Protected2, Undefined

?>