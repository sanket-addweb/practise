<?php

class class1{
    public $rollNo;
    public $sName;
    private $sMarks;

    function __construct($rollNo1,$sName1,$sMarks1){
        $this->rollNo=$rollNo1;
        $this->sName=$sName1;
        $this->sMarks=$sMarks1;
    }
    public function getDetail(){
        echo "The name of student is $this->sName, roll number is $this->rollNo and having marks is $this->sMarks ";
    }

}

$obj1=new class1(12,'Mayur',98);
echo $obj1->getDetail();


//call by reference
class class3{
    // public $number=12;
    public function __construct(&$number1){
        // $this->number=$number
        $number1+=1;
        echo $number1;
    }
}

$num2=10;
$obj3=new class3($num2);//11

echo "<br/>".$num2;//11 now value change and outside the function and inside function same
// because it's address is given same memory location therefore any changes made in that, apply whole program in that variable


?>