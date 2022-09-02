<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowercase uppercase digit</title>
</head>
<body>
    <form action="" method='get'>
        <h1>Enter character you want to know it is in Uppercase or Lowercase or digit</h1>
        Enter Character: <input type="text" name='char'>
        
        
        <button>click here to know</button>
    </form>
<body>
</html>

<?php
$char=$_GET['char'];
$ch=ord($_GET['char']);

if($ch>=65 and $ch<=90){
    echo $char.' is Uppercase character';
}
elseif($ch>=97 and $ch<=122){
    echo $char.' is lowercase character';
}
elseif($ch>=48 and $ch<=57){
    echo $char.' is digit';
}
else{
    echo $char.' is special character';
}

?>

