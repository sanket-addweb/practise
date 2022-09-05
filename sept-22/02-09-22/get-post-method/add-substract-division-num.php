<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request method for data transfer</title>
</head>
<body>
<h2>Welcome to data transfer method Request</h2>
    <!-- <form action="get-method.php" mehod="get" target="_self"> -->
    <form  mehod="get">
        <h3>Enter values which you have to Sum, Substract, Multiplication and Division</h3>
        Enter value1: <input type="number" name="value1">
        Enter value2: <input type="number" name="value2">
        
        <input type="submit" name="add" value="Know Add">
        <input type="submit" name="product" value="Know product">
        <input type="submit" name="substract" value="Know substract">
        <input type="submit" name="division" value="Know division">
    </form>
    <!-- <input type="button" name="btn" value="Submit using btn"> -->
    <!-- <h3>We are outside the from tage</h3> -->
    <!-- <input type="image" name="img" value="Submit using img" src='' alt='submit by img' formaction='input-submit-formaction.php'> -->
</body>
</html>

<?php
$num1=$_REQUEST['value1'];
$num2=$_REQUEST['value2'];

if(isset($_REQUEST['add'])){
    $result=$num1+$num2;
    echo 'Sum is '.$result;
}

if(isset($_GET['product'])){
    $result=$num1*$num2;
    echo 'Multiplication is '.$result;
}
if(isset($_GET['substract'])){
    $result=$num1-$num2;
    echo 'Substract is '.$result;
}
if(isset($_GET['division'])){
    $result=$num1/$num2;
    echo 'Division is '.$result;
}

?>