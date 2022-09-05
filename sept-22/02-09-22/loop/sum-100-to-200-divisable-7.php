<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>divisable by 7 numbers sum</title>
</head>
<body>
    <form action="">
        <h1>Enter number you want to prints sum numbers which is divisable by 7 between that number</h1>
        Enter Number-1:<input type="text" id="number-1" name='number1'>
        Enter Number-2: <input type="text" id="number-2" name='number2'>
        <input type="submit" name='sub' value='submit now'>
    </form>
</body>
</html>


<?php
$num1=$_REQUEST['number1'];
$num2=$_REQUEST['number2'];
$sum=0;

for($i=$num1;$i<$num2;$i++){
    if($i%7==0){
        $sum=$sum+$i;
        echo $i.', ';
    }
}
echo '<br/>sum of number divisable by 7 is '.$sum;

?>