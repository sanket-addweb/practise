<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>series-6</title>
</head>
<body>
    <form action="" method='get'>
        <h3>Febonaci series</h3>
        <h3>Enter Any number you want to print series up to that number</h3>
        Enter Number: <input type="number" name=number>
        <input type="submit" value='click to see'>
    </form>
</body>
</html>


<?php
$num=$_GET['number'];
$a=0;
$b=1;
echo $a.', ';
echo $b.', ';

for($i=0;$i<$num;$i++){
    $c=$a+$b;
    echo $c.', ';
    $a=$b;
    $b=$c;

}

?>