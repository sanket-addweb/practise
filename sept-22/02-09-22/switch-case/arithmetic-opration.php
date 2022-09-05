<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter two number and peform arithmetic operation </title>
</head>
<body>
    <form action="" method=get>
        <h3>Enter two number and peform arithmetic operation </h3>
        <h3>Enter 1 for Addition <br/>
            Enter 2 for Substraction<br/>
            Enter 3 for Multiplication<br/>
            Enter 4 for Division
        </h3>
        Enter number for type of opration: <input type="text" name=type placeholder='Enter betwen 1 to 4'>
        Enter number1:<input type="number" name='number1'>
        Enter number2:<input type="number" name='number2'>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
$switchType=$_REQUEST['type'];
$num1=$_REQUEST['number1'];
$num2=$_REQUEST['number2'];

switch($switchType){
    case '1':{
        $add=$num1+$num2;
        echo 'The sum of number '.$num1.' and '.$num2.' is '.$add;
    }
    break;
    case '2':{
        $sub=$num1-$num2;
        echo 'The substract of number '.$num1.' and '.$num2.' is '.$sub;
    }
    break;
    case '3':{
        $multi=$num1*$num2;
        echo 'The Product of number '.$num1.' and '.$num2.' is '.$multi;
    }
    break;
    case '4':{
        $div=$num1/$num2;
        echo 'The Division of number '.$num1.' and '.$num2.' is '.$div;
    }
    break;
    default:{
        echo 'Please Enter valid number betwwen 1 to 4';
    }
    
}

?>