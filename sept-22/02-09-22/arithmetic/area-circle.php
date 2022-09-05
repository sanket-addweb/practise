<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find area of circle</title>
</head>
<body>
    <form action="" method=get>
        <h3>Find area of Circle while perimeter is given</h3>
        Enter perimiter:<input type="number" name='peri'>
        <input type="submit" name="" id="" value='Find'>
    </form>
</body>
</html>

<?php
$pari=$_GET['peri'];
$radii=$pari/(2*PI());

$area=PI()*pow($radii,2);
echo 'Radius is '.$radii;
echo '<br/>The area of square is '.$area;
?>