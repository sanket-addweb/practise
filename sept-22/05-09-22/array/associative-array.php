<?php

$age=array('Sanket'=>23,'Manoj'=>41,'Aman'=>20,"Savan"=>22);
echo 'Age of Aman is '.$age['Aman'];

foreach($age as $name=> $valueAge){
    echo "<br/><br/>Name of Person is $name and Its age is $valueAge";
}

?>