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
        <h3>Enter character and find out whether it is vowel or consonant</h3>
        Enter character:<input type="text" name='character' maxlength=1>
        <input type="submit" value="submit" name='sub'>
    </form>
</body>
</html>

<?php
error_reporting(0);
$ch=$_REQUEST['character'];

switch($ch){
    case 'A':{
        echo $ch.' is vowel';
    }
    break;
    case 'E':{
        echo $ch.' is vowel';
    }
    break;
    case 'I':{
        echo $ch.' is vowel';
    }
    break;
    case 'O':{
        echo $ch.' is vowel';
    }
    break;
    case 'U':{
        echo $ch.' is vowel';
    }
    break;
    case 'a':{
        echo $ch.' is vowel';
    }
    break;
    case 'e':{
        echo $ch.' is vowel';
    }
    break;

    case 'i':{
        echo $ch.' is vowel';
    }
    break;
    case 'o':{
        echo $ch.' is vowel';
    }
    break;
    case 'u':{
        echo $ch.' is vowel';
    }
    break;
    default:{
        echo $ch.' is consonant';
    }
}

?>