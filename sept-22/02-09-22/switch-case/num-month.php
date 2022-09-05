<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter month and know name of month</title>
</head>
<body>
    <form action="" method=get>
        <h3>Enter month's number and know name of month</h3>
        Enter number:<input type="number" name='number' placeholder='Enter between 1 to 12'>
        <input type="submit" value="submit">
    </form>
</body>
</html>


<?php
$numMonth=$_GET['number'];

switch($numMonth){
    case 1:{ 
        echo 'Month name is January ';
    }
    break;
    case 2:{ 
        echo 'Month name is February';
    }
    break;
    case 3:{ 
        echo 'Month name is March ';
    }
    break;
    case 4:{ 
        echo 'Month name is April ';
    }
    break;
    case 5:{ 
        echo 'Month name is May ';
    }
    break;
    case 6:{ 
        echo 'Month name is June ';
    }
    break;
    case 7:{ 
        echo 'Month name is july';
    }
    break;
    case 8:{ 
        echo 'Month name is Augest ';
    }
    break;
    case 9:{ 
        echo 'Month name is Septmber ';
    }
    break;
    case 10:{ 
        echo 'Month name is October ';
    }
    break;
    case 11:{ 
        echo 'Month name is November ';
    }
    break;
    case 12:{ 
        echo 'Month name is December ';
    }
    break;
    default:{
        echo 'Enter a valid input';
    }
}

?>