<?php

$array1 = $array2 = array("img12.png", "img10.jpg", "img2.png", "img1.png");

asort($array1);
echo "Standard sorting<br/>";
// print_r($array1);

natsort($array2);//sort string array with numaric string content
echo "<br/>Natural order sorting\n";
// print_r($array2);



?>
<?php
echo "Negative numbers\n";
$negative = array('-5','3','-2','0','-1000','9','1');
print_r($negative);
natsort($negative);
print_r($negative);

echo "Zero padding\n";
$zeros = array('09', '8', '10', '009', '011', '0'); 
// print_r($zeros);
natsort($zeros);
// print_r($zeros);
?>

<!-- case intesive natural sorting not see uper or lower case it can simply sort-->
<?php
$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

sort($array1);
echo "Standard sorting\n";
print_r($array1);

natcasesort($array2);
echo "\nNatural order sorting (case-insensitive)\n";
print_r($array2);
?>