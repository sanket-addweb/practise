<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odd and Even number</title>
</head>
<body>
    <form action="" method=get>
        <h3>Enter number and know it is odd or even by ternary oprator</h3>
        Enter number:<input type="number" name='number'>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
// error_reporting(0);
$num=$_GET['number'];
$even=($num%2==0)?'Even':'odd';
echo 'The number '.$num.' is '.$even;

?>