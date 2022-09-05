<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter number of days and convert into month and year</title>
</head>
<body>
    <form action="" method=get>
        <h3>Enter number of days and convert into month and year</h3>
        Enter number of days:<input type="number" name='days'>
        <input type="submit" name="" id="" value='Find'>
    </form>
</body>
</html>

<?php
$numDays=$_GET['days'];

$year=floor($numDays/(12*30));
$remainDays=$numDays%(12*30);
$month=floor($remainDays/30);
$remainDays=$remainDays%30;
$days=$remainDays;

echo 'The number of year is '.$year." and number of month is ".$month." and days is ".$days;
?>