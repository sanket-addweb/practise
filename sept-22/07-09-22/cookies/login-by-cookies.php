<?php

if(isset($_POST['remember'])){
    // setcookie('username',$_POST['uname'],time()+3600,0);
    setcookie('username',$_POST['uname'],time()+3600,'/','',0);
    setcookie('password',$_POST['password'],time()+3600,'/','',0);
    echo '<script>
    alert("cookies set successfully, Now you can login, press one more time login");
    </script> ';
}
else{
    setcookie('username','');
    setcookie('password','');
    echo 'cookies not set';
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
        <input type="submit" name='sub' value='Login now'>
        
    </body>
    </html>
</form>
<?php

if(isset($_COOKIE['username']) && isset($_COOKIE['password']) && $_POST['sub']){

    header('Location:login-display-text.php');
}

?>