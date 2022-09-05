<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get method for data transfer</title>
</head>
<body>
<h2>Welcome to data transfer method get</h2>
    <!-- <form action="get-method.php" mehod="get" target="_self"> -->
    <form mehod="get">
        <h3>Enter values which you have to sum</h3>
        Enter name: <input type="text" name="name">
        Enter value1: <input type="number" name="value1">
        Enter value2: <input type="number" name="value2">
        Enter value3: <input type="number" name="value3">
        
        <input type="submit" name="sub" value="Submit now">
    </form>
    <!-- <input type="button" name="btn" value="Submit using btn"> -->
    <!-- <h3>We are outside the from tage</h3> -->
    <!-- <input type="image" name="img" value="Submit using img" src='' alt='submit by img' formaction='input-submit-formaction.php'> -->
</body>
</html>


<?php
// error_reporting(0);
$name=$_GET['name'];
$num1=$_GET['value1'];
$num2=$_GET['value2'];
$num3=$_GET['value3'];

$sum=$num1+$num2+$num3;

echo 'Hello Dear '.$name.' Your sum is '.$sum;

?>