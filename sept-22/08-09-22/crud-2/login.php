<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login here</title>
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
    
    <h2>Welcome to Login page</h2><br/>
    <form method='post'>
    <h2>Login for admin</h2><br/>
        Enter name: <input type="text" name='name'><br/><br/>
        Enter Mobile No: <input type="number" name="mobile" maxlength=10><br/><br/>
        <input type="submit" name='loginAdmin' value='Login Now'>
    </form>
    <form method='post'>
    <h2>Login for user</h2><br/>
        Enter Registration No: <input type="number" name=regNo><br/><br/>
        Enter name: <input type="text" name='name'><br/><br/>
        <!-- Enter Mobile No: <input type="number" name="mobile" maxlength=10><br/><br/> -->
        <input type="submit" name='loginUser' value='Login Now'>
    </form>
</body>
</html>

<?php
require 'connection.php';
if(isset($_POST['loginAdmin'])){
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];

    $result=mysqli_query($conn,"select * from library_admin where Name='$name' and Mobile=$mobile") or die("query is wrong");

    while($row=mysqli_fetch_array($result)){
        if($row['Name']==$name && $row['Mobile']==$mobile){
            echo "Login successfully";
            session_start();
            $_SESSION['logName']=$name;
            $_SESSION['mobile']=$mobile;
            header('location:welcome-admin.php');
            
        }
        else{
            echo "fail to Login, Please try again";
        }
    }

}

if(isset($_POST['loginUser'])){
    $regNo=$_POST['regNo'];
    $name=$_POST['name'];

    $result2=mysqli_query($conn,"select * from library_user where regNo=$regNo and name='$name'") or die("error in query");

    while($row=mysqli_fetch_array($result2)){
    if($row['regNo']==$regNo){
        echo "Login successfully";
        session_start();
        $_SESSION['logName']=$name;
        $_SESSION['rNo']=$regNo;
        header('location:welcome-index.php');
        
    }
    else{
        echo "fail to Login, Please try again";
    }
}
}

?>