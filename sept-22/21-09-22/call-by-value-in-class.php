<?php
//call by value 
class class2{
    // public $number=12;
    public function __construct($number){
        // $this->number=$number
        $number+=1;
        echo $number;
    }
}

$num1=12;
$obj2=new class2($num1);//13

echo "<br/>".$num1;//12 not change in orignal variable value

?>