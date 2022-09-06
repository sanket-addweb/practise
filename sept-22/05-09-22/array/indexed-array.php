<?php

//1st method for creating
$season=array('Summer','Winter','Monsoon');
echo "Printing of array element<br/> $season[0], $season[1], $season[2]";

//2nd method for creating
$fruits[0]='Apple';
$fruits[1]='Banana';
$fruits[2]='Mango';
$fruits[3]='Orrange';

echo "<br/><br/>Printing of array element<br/> $fruits[0], $fruits[1], $fruits[2], $fruits[3]<br/><br/>";

//3rd method for printing
$cars= ['BMW','Mercedes','Toyota','Swift'];

$len=count($cars);

for($i=0;$i<$len;$i++){
    echo $cars[$i].", ";
}

//4th method for printing
foreach($cars as $arrElement){
    echo $arrElement;
    echo '<br/>';
}


?>