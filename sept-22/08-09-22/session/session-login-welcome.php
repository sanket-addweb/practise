<?php

    session_start();
    $uname=$_SESSION['user_name'];
    
    echo "<h2>Welcome! $uname You are logedd in to our website</h2>";
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome page</title>
</head>
<body>
    <form action="" method='post'>
        <input type='submit' name='logout' value='logout'></input>
    </form>
</body>
</html>

<?php

if(isset($_POST['logout'])){
    session_destroy();
    header('location:session-login.php');
}
?>