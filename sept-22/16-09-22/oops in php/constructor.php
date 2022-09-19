<?php

// We can access privet property by constructor

//parameries constructor
class Cars{
    private $model;
    private function fuelSupply(){
        echo "Normal fuel injection with fuel injection valve";
    }

    public function __construct($model){
        $this->model=$model;
        // $this->fuelSupply();
    }

    public function getCarModel(){
        self::fuelSupply();
        echo "<br/>";
        echo $this->fuelSupply();
        return "The model of car is ".$this->model;
    }
}

$bmw=new Cars('bmw');
echo $bmw->getCarModel();
// echo $bmw->fuelSupply();


class Employee{
    public $name;
    private $id;
    public $address;
    // private $address;

    public function __construct($name1,$id1,$address1){
        $this->name=$name1;
        $this->id=$id1;
        $this->address=$address1;
        // function getSalaryInfo(){
        //     $salary=20000;
        //     echo $salary;
        // }
    }
    public function getRecord(){
        return "<br/>The name of employees is $this->name and his/her id is $this->id";

    }

}

$employee1=new Employee('Sanket',1234,'Ahmedabad');
echo $employee1->getRecord();
echo " ".$employee1->address;//Ahmedabad

//so we use constructor to make function and variable global and this variable we can transfer by parameter in class 


//copy constructor
class CopyConstructor{
    public $foodName;
    public $foodType;
    public function show(){
        return "<br/>The name of food is $this->foodName and category is $this->foodType";
    }
}

$food1=new CopyConstructor();
$food1->foodName='Banana';
$food1->foodType='heavy Nutrition';

$food2=$food1;
echo $food2->show();
$food1->foodName='apple';
// $food2->foodName='apple';
echo $food2->show();
// echo $food1->show();


?>