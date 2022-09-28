<?php


   declare(strict_types = 1);
   function returnIntValue(int $value): int {
      return $value;
   }
   print(returnIntValue(5));

function sum(int $a, int $b):int {
    return $a+$b;
}

// var_dump(sum(1.4,12));//Uncaught TypeError: Argument 1 passed to sum() must be of the type int, here argument 1 is given as float

var_dump(sum(12,24));//int(36)
?>