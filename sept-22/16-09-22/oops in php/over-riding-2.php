<?php

class Pclass{
   function pfun(){
        $a=12;
        $b=10;
        $c=$a+$b;
        return $c;
    }
}
class Eclass extends Pclass{
    function Sfun(){
        $a=12;
        $b=10;
        $c=$a-$b;
        return $c."<br/>";
    }
    function pfun(){
        $a=12;
        $b=10;
        $c=$a*$b;
        return $c."<br/>";
    }
}

$obj2=new Pclass();
echo $obj2->pfun();//22

$obj1=new Eclass();
echo $obj1->pfun();//120
?>