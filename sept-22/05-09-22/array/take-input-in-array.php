<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scan and print an array element</title>
</head>
<body>
    <form action="" method='get'>
        <h3>scan and print an array element as number</h3>
        Enter element1: <input type="number" name='ele-1'>
        Enter element2: <input type="number" name='ele-2'>
        Enter element3: <input type="number" name='ele-3'>
        Enter element4: <input type="number" name='ele-4'>
        Enter element5: <input type="number" name='ele-5'>
        Enter element6: <input type="number" name='ele-6'>
        Enter element7: <input type="number" name='ele-7'>
        Enter element8: <input type="number" name='ele-8'>
        <input type="submit" name="subNumber" id="" value='Submit number' formmethod=''>

        <h3>scan and print an array element as character</h3>
        Enter element1: <input type="text" name='eleChar-1'>
        Enter element2: <input type="text" name='eleChar-2'>
        Enter element3: <input type="text" name='eleChar-3'>
        Enter element4: <input type="text" name='eleChar-4'>
        Enter element5: <input type="text" name='eleChar-5'>
        Enter element6: <input type="text" name='eleChar-6'>
        Enter element7: <input type="text" name='eleChar-7'>
        Enter element8: <input type="text" name='eleChar-8'>
        <input type="submit" name='subchar' value='Submit character' formmethod=''>
    </form>
</body>
</html>

<?php

if(isset($_REQUEST['subNumber'])){

    $num[0]=$_GET['ele-1'];
    $num[1]=$_GET['ele-2'];
    $num[2]=$_GET['ele-3'];
    $num[3]=$_GET['ele-4'];
    $num[4]=$_GET['ele-5'];
    $num[5]=$_GET['ele-6'];
    $num[6]=$_GET['ele-7'];
    $num[7]=$_GET['ele-8'];
    
    foreach($num as $numValues){
        echo $numValues.", ";
    }
}

if(isset($_GET['subchar'])){

    $char[0]=$_GET['eleChar-1'];
    $char[1]=$_GET['eleChar-2'];
    $char[2]=$_GET['eleChar-3'];
    $char[3]=$_GET['eleChar-4'];
    $char[4]=$_GET['eleChar-5'];
    $char[5]=$_GET['eleChar-6'];
    $char[6]=$_GET['eleChar-7'];
    $char[7]=$_GET['eleChar-8'];
    
    foreach($char as $charValues){
        echo $charValues.', ';
    }
}




?>