<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post method for data transfer</title>
</head>
<body>
<h2>Welcome to data transfer method Post</h2>
    <!-- <form action="get-method.php" mehod="get" target="_self"> -->
    <form method="post" action=''>
        <h3>Enter values which you have to sum</h3>
        Enter name: <input type="text" name="name">
        Enter value1: <input type="number" name="value1">
        Enter value2: <input type="number" name="value2">
        Enter value3: <input type="number" name="value3">
        
        <input type="submit" value="Submit now">
    </form>
    
</body>
</html>


<?php
error_reporting(0);
// phpinfo();
$name=$_POST['name'];
$num1=$_POST['value1'];
$num2=$_POST['value2'];
$num3=$_POST['value3'];

$sum=$num1+$num2+$num3;

echo 'Hello Dear '.$name.' Your sum is '.$sum;

var_dump($name);
// var_dump($num1);
?>