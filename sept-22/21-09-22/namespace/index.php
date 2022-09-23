<?php

include 'first.php';
include 'second.php';

// echo sanket\lampp\secondFile\hello();//works but make sure that namespace is top of program
use sanket\lampp\secondFile as secondTest;
echo secondTest\hello();
// echo secondFile\hello(); //works
echo firstFile\hello();

// $obj1=new secondFile\abc();
// $obj1->test();
echo "<br/>";
$obj2=new firstFile\abc();
$obj2->test();
?>