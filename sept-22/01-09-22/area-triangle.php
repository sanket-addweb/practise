<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>triangle area</title>
</head>
<body>
    <form action="" method='get'>
        Enter height of triangle: <input type="number" name='height'>
        Enter base of traingle: <input type="number" name='base'>
        <button>Submit</button>
    </form>
</body>
</html>

<?php

echo 'Calculating area of triangle';
$base=12;
$height=30;
$area=$base*$height/2;

$base1=$_GET['base'];
$height1=$_GET['height'];
$area1=$base1*$height1/2;
echo "<br/> The area of triangle1 is ".$area1;
echo "<br/> The area of triangle2 is ".$area;


?>