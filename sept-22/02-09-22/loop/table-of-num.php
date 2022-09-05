<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table of any number</title>
</head>
<body>
    <form action="" method='get'>
        <h3>Enter Any number you want to print its table</h3>
        Enter Number: <input type="number" name=number>
        <input type="submit" value='click to see'>
    </form>
</body>
</html>


<?php
$num=$_GET['number'];

for($i=1;$i<=10;$i++){
    $product=$num*$i;
    echo $num.'*'.$i.' = '.$product;
    echo '<br/>';
}

?>