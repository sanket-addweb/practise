<?php

class abc{
    public $a=12;
    public $b=10;
    public function add(){
        echo $this->a." and ".$this->b."addition is <br/>" ;
        return ($this->a+$this->b);
        // echo ' '.$c;
    }
}

$abc1=new abc();
$abc1->add();


// class def extends abc{

//     function addWithSub(){
//         echo 'Addition using parent class method of addition inside child class function<br/>';
//         parent::add();
//         echo '<br/> And substraction by child class<br/>';
//         $a=12;
//         $b=10;
//         $c=$a-$b;
//         echo ' '.$c;
//     }
// }

// $xyz=new def();
// $xyz->addWithSub();


// class ghi extends abc{
//     function addWithSub(){
//         echo 'Addition using parent class method of addition inside child class function';
//         parent::add();
//         echo '<br/> And substraction by child class';
//         parent::$a;
//         parent::$b;
//         $c=$a-$b;
//         echo ' '.$c;
//     }
// }

// $pql=new ghi();
// $pql->addWithSub();//untill now we not make variable global so error show

// ?>