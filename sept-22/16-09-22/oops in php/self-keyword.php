<?php

class Animal{
    public $sound='Hungry';
    public $sound2='Angry';
    public static function makeSound(){
        $abc='make more';
        echo "The sound makes while animal is Hungry and  $abc";
    }

    public static function vocalize(){
            
        echo self::makeSound();
        echo "<br/>Here is to more know about animal";
    }
}

Animal::vocalize();

// class Animal{
//     public $sound='Hungry';
//     public $sound2='Angry';
//     public static function makeSound(){
//         echo "The sound makes while animal is $this->sound and $this->sound2 ";
//     }

//     public static function vocalize(){
//         echo self::makeSound();
//     }
// }

// Animal::vocalize();

?>