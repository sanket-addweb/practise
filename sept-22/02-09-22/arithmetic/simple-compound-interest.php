<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple And Compound Interest</title>
</head>
<body>
    <form action="">
        <h1>Enter Principle amount and Rate of Interest and Number of Years and Find Out simple and compound interest </h1>
        Enter Principle amount: <input type="text" id="Principle" name='p'>
        Enter Rate of interest: <input type="text" id="rate" name='r'>
        Enter number of Years: <input type="text" id="years" name='n'>
        <button name='btn'>Find Simple Interest</button>
    </form>
</body>
</html>

<?php
$p=$_GET['p'];
$r=$_GET['r'];
$n=$_GET['n'];

$si=$p*$r*$n/100;
$ci=$p*(pow((1+($r/100)),$n))-$p;

echo 'Simple interest is '.$si.' and compound interest is '.$ci;
?>
