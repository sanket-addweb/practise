
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping two number </title>
</head>
<body>
    <form action="" method='post'>
        <h3>Swapping two number Function Calling by Reference</h3>
        Enter Number1<input type="number" name='num1'>
        Enter Number2<input type="number" name='num2'>
        <input type="submit" value='Swap now'>
    </form>
</body>
</html>

<?php
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];

function swap($a,$b){
    $old1=$a;
    $old2=$b;
    $c=$a;
    $a=$b;
    $b=$c;

    return "The number $old1 is $a<br/>The number $old2 is $b" ;
}

echo swap($num1,$num2);

?>