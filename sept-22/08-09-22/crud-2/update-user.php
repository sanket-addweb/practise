<?php

require 'connection.php';

$rNo=$_GET['regNo'];

$result=mysqli_query($conn,"select * from library_user where regNo=$rNo") or die("Unable to find Book record");

while($row=mysqli_fetch_array($result)){
    $regNo=$row['regNo'];
    $uname=$row['Name'];
    $umobile=$row['Mobile'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User record</title>
</head>
<body>
    <form method='post'>
        <h4>Edit Now</h4>
        
        Enter Registration number: <input type="number" name=regNo value="<?php echo $regNo ?>" readonly><br/><br/>
        Enter name: <input type="text" name='name' value="<?php echo $uname ?>"><br/><br/>
        Enter Mobile No: <input type="number" name="mobile" value="<?php echo $umobile ?>" maxlength=10><br/><br/>
        <input type="submit" name='updateUser' value='Update Now'>
    </form>
</body>
</html>

<?php

if(isset($_POST['updateUser'])){
    $regNo=$rNo;
    $u_name=$_POST['name'];
    $u_mobile=$_POST['mobile'];
    

    $result2=mysqli_query($conn,"update library_user set Name='$u_name', Mobile=$u_mobile where regNo=$regNo") or die("unable to update User record");

    if($result2){
        echo "User Updated successfully";
        header("location:welcome-admin.php");
    }
}

?>