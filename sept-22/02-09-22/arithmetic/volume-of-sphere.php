<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find volume of sphere</title>
</head>
<body>
    <form action="" method=get>
        <h3>Find volume and serface area of sphere</h3>
        Enter radius:<input type="number" name='radius'>
        <input type="submit" name="" id="" value='Find'>
    </form>
</body>
</html>

<?php
$radii=$_GET['radius'];
$pi=PI();
$vol=4*$pi*pow($radii,3)/3;
$area=4*$pi*pow($radii,2);

echo 'volume is '.round($vol).' and serface area is '.round($area);

?>