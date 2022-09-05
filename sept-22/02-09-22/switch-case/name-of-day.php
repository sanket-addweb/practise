<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter number and know day</title>
</head>
<body>
    <form action="" method=get>
        <h3>Enter number and know day of week</h3>
        Enter number:<input type="number" name='number'>
        <input type="submit" value="submit">
    </form>
</body>
</html>


<?php
$num=$_GET['number'];

switch($num){
    case 1:{
        echo 'Monday';
    }
    break;
    case 2:{
        echo 'Tuesday';
    }
    case 3:{
        echo 'Wednesday';
    }
    break;
    case 4:{
        echo 'Thursday';
    }
    break;
    case 5:{
        echo 'Friday';
    }
    break;
    case 6:{
        echo 'Saturday';
    }
    break;
    case 7:{
        echo 'Sunday';
    }
    break;
    default:{
        echo 'Please enter a valid number between 1 to 7';
    }

}

?>
