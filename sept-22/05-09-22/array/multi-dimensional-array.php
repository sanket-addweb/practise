<?php
$cars=array(
    array("Volvo",30,12),
    array('Mercedes',11,4),
    array('Swift',25,19),
    array('BMW',20,12)
);

echo $cars[0][0].' in stock '.$cars[0][1].' sold: '.$cars[0][2].'<br/>';
echo $cars[1][0].' in stock '.$cars[1][1].' sold: '.$cars[1][2].'<br/>';
echo $cars[2][0].' in stock '.$cars[2][1].' sold: '.$cars[2][2].'<br/>';
echo $cars[3][0].' in stock '.$cars[3][1].' sold: '.$cars[3][2].'<br/>';

echo '<br/><br/> Second method of printing Multi dimensional array';

for($i=0;$i<4;$i++){
    for($j=0;$j<3;$j++){
        echo $cars[$i][$j].', ';
    }
    echo '<br/>';
}

$salary=array(
    array(1,'Sanket',18000),
    array(2,'Savan',28000),
    array(3,'Moxit',20000),
    array(4,'Ramesh',24000),
    array(5,'Manav',22000)
);

for($row=0;$row<5;$row++){
    for($col=0;$col<3;$col++){
        echo $salary[$row][$col].', ';
    }
    echo "<br/>";
}


?>