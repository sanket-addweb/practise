<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find area of square</title>
</head>
<body>
    <form action="" method=get>
        <h3>Find area of square while perimeter is given</h3>
        Enter perimiter:<input type="number" name='peri'>
        <input type="submit" name="" id="" value='Find'>
    </form>
</body>
</html>

<?php
$pari=$_GET['peri'];
$side=$pari/4;

$area=pow($side,2);
echo 'The area of square is '.$area;
?>