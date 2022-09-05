<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter month and know how much day in that month</title>
</head>
<body>
    <form action="" method=get>
        <h3>Enter month's number and know how much day in that month</h3>
        Enter number:<input type="number" name='number' placeholder='Enter between 1 to 12'>
        <input type="submit" value="submit">
    </form>
</body>
</html>


<?php
$numMonth=$_GET['number'];

switch($numMonth){
    case 1:{ 
        echo 'Month January and days 31';
    }
    break;
    case 2:{ 
        echo 'Month February and days 28 or 29';
    }
    break;
    case 3:{ 
        echo 'Month March and days 31';
    }
    break;
    case 4:{ 
        echo 'Month April and days 30';
    }
    break;
    case 5:{ 
        echo 'Month May and days 31';
    }
    break;
    case 6:{ 
        echo 'Month June and days 30';
    }
    break;
    case 7:{ 
        echo 'Month july and days 31';
    }
    break;
    case 8:{ 
        echo 'Month Augest and days 31';
    }
    break;
    case 9:{ 
        echo 'Month Septmber and days 30';
    }
    break;
    case 10:{ 
        echo 'Month October and days 31';
    }
    break;
    case 11:{ 
        echo 'Month November and days 30';
    }
    break;
    case 12:{ 
        echo 'Month December and days 31';
    }
    break;
    default:{
        echo 'Enter a valid input';
    }
}

?>