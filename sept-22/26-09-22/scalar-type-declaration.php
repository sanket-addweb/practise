<?php




//Default or Coercive Type
function sumNow(float $x, float $y) 
{
    return $x + $y;
}
function sum(int $x, int $y) 
{
    return $x + $y;
}
    
// echo sumNow(6, "8 days");
//output float(14)
echo sumNow(4.1, "4.2");
// output float(8.3)
    
echo sumNow(4.9,"5.1");
echo sum(6,3);//9
    
    
    
    // //Strict Type declaration
    
    // declare(strict_types=1);
    // function returnsum(float $a, float $b)
    //  {
    // return $a + $b;
    // }
    
    
    // echo returnsum(3.1, 2.1);
    // output float(5.2)
    
    
    // returnsum(3, "2 days");
    // Fatal error
?>