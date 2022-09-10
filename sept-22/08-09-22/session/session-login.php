<?php


if(isset($_POST['login'])){
    $user=$_POST['uname'];
    $pw=$_POST['password'];
}
if($user=='sanket' && $pw==123){
    session_start();
    $_SESSION['user_name']=$user;
    $_SESSION['upassword']=$pw;
    header('location:session-login-welcome.php');
}
else{
    echo 'Incorect username and password';
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login page</title>
    </head>
<body>
    <form action="" method='post'>
        Enter Username: <input type="text" name='uname'><br/><br/>
        Enter Password: <input type="password" name='password'><br/><br/>
        <input type="checkbox" name='remember'>Remember Me </input><br/><br/>
        <input type="submit" name='login' value='Login now'>
        
    </body>
    </html>
</form>
<?php