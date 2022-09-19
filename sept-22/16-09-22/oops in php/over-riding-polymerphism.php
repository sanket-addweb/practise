<?php

// class to show run time polymorphism  
class new_Shape{   
// parent class to draw differeent shapes      
    function draw(){
        echo "This is main class function ";
    }    
}    
// class Circle to draw a circle  
class Circle extends new_Shape{    
    function draw(){    
        print " the function executed properly and Circle has been drawn . </br> ";    
    }    
}    
// class triangle to draw a triangle  
class Triangle extends new_Shape{    
    function draw(){    
         echo " the function executed properly and Triangle has been drawn . </br> ";    
    }    
}    
// class Square to draw a square  
class Square extends new_Shape{    
    function draw(){    
        print "the function executed properly and Square has been drawn . ";    
    }              
}


$circle1=new Circle();
echo $circle1->draw();

?>