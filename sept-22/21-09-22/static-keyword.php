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
?>