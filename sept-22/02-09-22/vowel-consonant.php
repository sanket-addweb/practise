<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing amount</title>
</head>
<body>
    <form action="" method=get>
        <h3>Enter character and you want to know it is vowel or consonant</h3>
        Enter character:<input type="text" name='character' maxlength=1>
        <input type="submit" value="calculate" name='sub'>
    </form>
</body>
</html>

<?php

if(isset($_GET['sub'])){

    $ch=$_GET['character'];
    if($ch=='a' || $ch=='A' || $ch=='e' || $ch=='E' || $ch=='i' || $ch=='I' || $ch=='o' || $ch=='O' || $ch=='u' || $ch=='U'){
     echo $ch.' is vowel';
    }
    else{
        echo $ch.' is consonant';
    }
}
?>