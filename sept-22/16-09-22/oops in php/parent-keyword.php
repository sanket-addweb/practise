<?php

class abc{
    function add(){
        $a=12;
        $b=10;
        $c=$a+$b;
        echo ' '.$c;
    }
}

class def extends abc{

    function addWithSub(){
        echo 'Addition using parent class method of addition inside child class function';
        parent::add();
        echo '<br/> And substraction by child class';
        $a=12;
        $b=10;
        $c=$a-$b;
        echo ' '.$c;
    }
}

$xyz=new def();
$xyz->addWithSub();


class ghi extends abc{
    function addWithSub(){
        echo 'Addition using parent class method of addition inside child class function';
        parent::add();
        echo '<br/> And substraction by child class';
        $c=$a-$b;
        echo ' '.$c;
    }
}

$pql=new ghi();
$pql->addWithSub();//untill now we not make variable global so error show

?>