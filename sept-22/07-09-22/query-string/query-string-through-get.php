
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pass string to url by get method</title>
</head>
<body>
    <form action="/php-programme/07-09-22/cookies/login-display-text.php" method='get'>
        name: <input type="text" name='name'>
        borthdate: <input type="date" name='bob'>
        <input type="submit" name='sub'>
    </form>
</body>
</html>


<?php

// $name=$_GET['name'];
// $bob=$_GET['bob'];

// echo $name.'   '.$bob;

if($_GET['name'] || $_GET['bob']){
    echo 'Your name is '.$_GET['name'];
    echo '<br/>Your BOB is '.$_GET['bob'];
}
if(isset($_GET['sub'])){
    header('Location:acces-query-string-this-page.php');
}



?>