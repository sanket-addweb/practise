<?php

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

class Daughter extends Father{
    public $occupation='Teacher';
}

$roshani=new Daughter();
echo $roshani->occupation;//Teacher
echo "<br/>";
echo $roshani->carName;//swift

?>