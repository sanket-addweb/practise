<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odd even number sum</title>
</head>
<body>
    <form action="">
        <h1>Enter number you want to prints sum of odd number between that two number </h1>
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

if($num1%2==0){
    echo $num1.' is even and sum of even number between '.$num1.' and '.$num2."<br/>";
    echo $num1.', ';
    $secondTerm=$num1;
    for($i=0;$secondTerm<$num2-1;$i++){
        $secondTerm=$secondTerm+2;
        echo $secondTerm.', ';
        $sum=$sum+$secondTerm;
    }
    echo '<br/>sum of even  number is '.$sum;
}
else{
    echo $num1.' is odd and sum of odd number between '.$num1.' and '.$num2."<br/>";
    echo $num1.', ';
    $secondTerm=$num1;
    for($i=0;$secondTerm<$num2-1;$i++){
        $secondTerm=$secondTerm+2;
        echo $secondTerm.', ';
        $sum=$sum+$secondTerm;
    }
    echo '<br/>sum of odd  number is '.$sum;
}
?>