<?php

// class ParentClass{
//     function __construct(){

//     }
// }

// class ChildClass{
//     function __construct(){
//         parent::__construct();
//     }
// }

class Cars{
    // function __construct($carName,$color){
    //     echo "The Company name is $carName and Its color is $color";
    // }
    function __construct(){
        echo "The Company name is  from parent class";
    }
}
    
class screws extends Cars{
    function __construct($diameter,$length){
       parent::__construct();
       print '<br/>This is child class constructor';
       echo "The Diamter of Screw is $diameter and length is $length";
     }
    // function __construct(){
    //     parent::__construct();
    //     print '<br/>This is child class constructor';
    //     // echo "The Diamter of Screw is $diameter and length is $length";
    //   }
}

$bmw=new screws('BMW','red',12,4);//The Company name is from parent class
//This is child class constructorThe Diamter of Screw is 12 and length is 4
//we can only pass parameter in screws object
//if you have to see parameter of car object then make object from that class
?>