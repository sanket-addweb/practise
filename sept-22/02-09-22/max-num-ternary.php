<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maximum, minimum number out of four number</title>
</head>
<body>
    <form action="" method=get>
        <h3>Enter four number and find maximum and minimum number</h3>
        Enter number1:<input type="number" name='number1'>
        Enter number2:<input type="number" name='number2'>
        Enter number3:<input type="number" name='number3'>
        Enter number4:<input type="number" name='number4'>
        <input type="submit" value="submit">
    </form>
</body>
</html>


<?php
error_reporting(0);
$num1=$_GET['number1'];
$num2=$_GET['number2'];
$num3=$_GET['number3'];
$num4=$_GET['number4'];

$max=((($num1>$num2) && ($num1>$num3) && ($num1>$num4))?$num1.' largest number':(($num2>$num3 && $num2>$num4)? $num2.' is largest':($num3>$num4 ? $num3.' is largest': $num4.' is largest')));
$min=(($num1<$num2 && $num1<$num3 && $num1<$num4)? $num1. ' is smallest':($num2<$num3 && $num2<$num4 ? $num2. ' is smallest': ($num3<$num4 ? $num3.' is smallest':$num4.' is smallest')));

echo $max.' number<br/>';
echo $min.' number';

?>
