<?php

class class1{
    private $name='Sanket';
}

$value=function(){
    return $this-> name;
};

// echo $value();
//php 7++ code
print($value->call(new class1));//Sanket



// Define a closure Pre PHP 7 code
// class A {
//     private $x = 1;
//  }


//  // Define a closure Pre PHP 7 code
//  $getValue = function() {
//     return $this->x;
//  };


//  // Bind a clousure
//  $value = $getValue->bindTo(new A, 'A'); 


//  print($value());


?>