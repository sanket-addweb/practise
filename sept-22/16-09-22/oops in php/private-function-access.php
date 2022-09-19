<?php
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

?>