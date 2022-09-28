<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coalescing operator</title>
</head>
<body>
    <form method='get'>
        Name: <input type="text" name='username'>
        <input type="submit" value='Submit Now' name='sub'>
   </form>
</body>
</html>



<?php


if(isset($_GET['sub'])){

    $username = $_GET['username'] ?? 'not passed';
    print($username);
    print("<br/>");
    
    
    // Equivalent code using ternary operator
    $username = isset($_GET['username']) ? $_GET['username'] : 'not passed';
    print($username);
    print("<br/>");
    
    $username = $_GET['username'] ?? $_POST['username'] ?? 'not passed';
    print($username);
}

if(isset($_GET['sub'])){
    echo "<br/><br/>";
    $username = $_GET['username1'] ?? 'not passed';
    print($username);
    print("<br/>");
    
    
    // Equivalent code using ternary operator
    $username = isset($_GET['username1']) ? $_GET['username'] : 'not passed';
    print($username);
    print("<br/>");
    
    $username = $_GET['username'] ?? $_POST['username'] ?? 'not passed';
    print($username);
}
?>