<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post method for data transfer</title>
</head>
<body>
<h2>Data transfer method post or get access in variable by using Request method</h2>
    <!-- <form action="get-method.php" mehod="get" target="_self"> -->
    <form method="post" action=''>
    <!-- <form method="get" action=''> -->
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
$name=$_REQUEST['name'];
$num1=$_REQUEST['value1'];
$num2=$_REQUEST['value2'];
$num3=$_REQUEST['value3'];

$sum=$num1+$num2+$num3;

echo 'Hello Dear '.$name.' Your sum is '.$sum;

var_dump($name);
// var_dump($num1);
?>