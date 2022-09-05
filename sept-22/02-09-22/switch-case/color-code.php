<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>color code</title>
</head>
<body>
    <form action="" method=get>
        <h3>Enter character and find color for that character</h3>
        <h3>Enter 'G' or 'g' for green and 'W' or 'w' for white</h3>
        Enter character:<input type="text" name='character' maxlength=1>
        <input type="submit" value="submit" name='sub'>
    </form>
</body>
</html>

<?php
$ch=$_REQUEST['character'];

switch($ch){
    case 'W':{
        echo 'white';
    }
    break;
    case 'w':{
        echo 'white';
    }
    break;
    case 'G':{
        echo 'Green';
    }
    break;
    case 'g':{
        echo 'Green';
    }
    break;
    default:{
        echo 'Please Enter a valid character';
    }
}


?>