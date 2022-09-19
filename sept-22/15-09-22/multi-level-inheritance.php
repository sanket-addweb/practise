<?php
// multi-level inheritance
class GrandFather{
    // public $name="Punjabhai";
    public $houseNo=12;
}

class Father extends grandFather{
    public $carName='Swift';
}

class Son extends Father{
    public $study='college';
}

echo "<br/>";
$sanket=new Son();
echo $sanket->study;
echo "<br/>";
echo $sanket->carName;
echo "<br/>";
echo $sanket->houseNo;



class abc{

    function add(){
        $a=12;
        $b=2;
        $c=$a+$b;
        echo $c;
    }
}

class def extends abc{

    function sub(){
        $a=12;
        $b=2;
        $c=$a-$b;
        echo $c;
    }
}
class ghi extends def{

    function multi(){
        $a=12;
        $b=2;
        $c=$a*$b;
        echo $c;
    }
}

$xyz=new ghi();
echo "<br/>";
$xyz->multi();//
echo "<br/>";
$xyz->sub();//
echo "<br/>";
$xyz->add();//
echo "<br/>";

$pqr=new def();
// $pqr->multi();//fatal error because class def is not child of ghi

?>