<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perimeter and area of triangle</title>
</head>
<body>
    <form action="" method='get'>
        <h1>Enter a sides of triangle, you want to find it's perimeter and area</h1>
        Enter a side-1: <input type="text" id="side-1" name='side1'>
        Enter a side-2: <input type="text" id="side-2" name='side2'>
        Enter a side-3: <input type="text" id="side-3" name='side3'>
        <button name='btn'>Find perimeter & area</button>
    </form>
</body>
</html>

<?php
$side1=$_GET['side1'];
$side2=$_GET['side2'];
$side3=$_GET['side3'];

$peri=$side1+$side2+$side3;
$semi=$peri/2;

$area=round(pow(($semi*($semi-$side1)*($semi-$side2)*($semi-$side3)),1/2));

echo $area.' is area and '.$peri." is perimeter of triangle";
?>