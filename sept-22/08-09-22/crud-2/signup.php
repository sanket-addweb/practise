<?php
$success="";
include 'connection.php';

$regNo=$_REQUEST['regNo'];
$name=$_REQUEST['name'];
$mobile=$_REQUEST['mobile'];

$result=mysqli_query($conn,"insert into library_user values('$regNo','$name','$mobile')");

if($result){
    $success="You have succesfully created account";
}
else{
    echo "error in query of signup";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to signup page</title>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="welcome-index.php">Home</a></li>
                <li><a href="signup.php">signup</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href="welcome-admin.php">admin-pannel</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </nav>
    </header>
    
    <?php echo $success?>
    <form method='post'>
        <h2>Welcome to signup page</h2>
        Enter Registration number: <input type="number" name=regNo><br/><br/>
        Enter name: <input type="text" name='name'><br/><br/>
        Enter Mobile No: <input type="number" name="mobile" maxlength=10><br/><br/>
        <input type="submit" name='signup' value='Signup Now'>
        <a href='login.php'>login</a>
    </form>
</body>
</html>
