<?php

// it is possible to iterate through a list of items, with foreach statement
class Myclass{
    public $var1='value1';
    public $var2='value2';
    public $var3='value3';

    protected $var4="Protected var";
    private $var5="private var";

    function iterateVisible(){
        echo "inside class foreach loop<br/>";
        foreach($this as $key => $value){
            echo "$key => $value";
            echo "<br/>";
        }
    }
}

$class1=new Myclass();

foreach($class1 as $key => $value){
    echo "$key => $value";
    echo "<br/>";
}
echo "<br/>";

$class1->iterateVisible();

//output
//var1 => value1
// var2 => value2
// var3 => value3

// inside class foreach loop
// var1 => value1
// var2 => value2
// var3 => value3
// var4 => Protected var
// var5 => private var

?>