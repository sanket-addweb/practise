<?php
session_start();
$nameAdmin=$_SESSION['logName'];
$mobileAdmin=$_SESSION['mobile'];
if(($nameAdmin='Sanket' or $nameAdmin='Kalp') and ($mobileAdmin=8128567900 or $mobileAdmin=92938223)){
    echo "you are Admin you can access";
}
else{
    header('location:login.php');
}

if(!isset($_SESSION['logName'])){
    header("location:login.php");
}

require 'connection.php';

$result2=mysqli_query($conn,"select * from library_user") or die("Error in record");

echo "<table border='3'>";
echo "<tr>
        <td>Registration No</td> <td>Name</td>  <td>Mobile</td> <td>Edit</td> <td>Delete</td>
      </tr>";
while($row=mysqli_fetch_array($result2)){
    $regNo2=$row['regNo'];
          echo "<tr>";
          echo "<td>".$row['regNo']."</td>";
          echo "<td>".$row['Name']."</td>";
          echo "<td>".$row['Mobile']."</td>";
          echo "<td> <a href=update-user.php?regNo=$regNo2>Edit</a></td>";
          echo "<td> <a href=delete-user.php?regNo=$regNo2>Delete</a></td>";
          
          echo "</tr>";
}
echo "</table>";

if(isset($_POST['insertBook'])){

    $bNo=$_POST['bNo'];
    $bName=$_POST['bName'];
    $bReader=$_POST['bReader'];
    $rMobile=$_POST['rMobile'];
    $result=mysqli_query($conn,"insert into library values('$bNo','$bName','$bReader',$rMobile)");
    if($result){
        echo '<br/><br/>Book addded Successfully';
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Admin pannel</title>
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

    <h2>Hello! <?php echo $_SESSION['logName'] ?> You can insert books record because You are admin</h2>
    <h4>Insert Now</h4>
    <form method='post'>
        Enter Book number: <input type="number" name='bNo'><br/><br/>
        Enter Book name: <input type="text" name='bName'><br/><br/>
        Enter Book Reader: <input type="text" name='bReader'><br/><br/>
        Enter Reader Mobile: <input type="number" name='rMobile'><br/><br/>

        <button name='insertBook'>Insert Book</button>
        <button name='show-book'>Show Book Under Reading</button>
    </form>
</body>
</html>


<?php

if(isset($_POST['show-book'])){
    $result3=mysqli_query($conn,"select * from library") or die("Unable to get record of book");

    echo "<table border='3'>";
echo "<tr>
        <td>Book No</td> <td>Book Name</td>  <td>Book Reader</td> <td>Reader Mobile</td> <td>Edit</td> <td>Delete</td>
      </tr>";
while($row=mysqli_fetch_array($result3)){
    $bNo=$row['bookNo'];
          echo "<tr>";
          echo "<td>".$row['bookNo']."</td>";
          echo "<td>".$row['bookName']."</td>";
          echo "<td>".$row['bookReader']."</td>";
          echo "<td>".$row['readerMobile']."</td>";
          echo "<td> <a href=update-b-ureading.php?bookNo=$bNo>Edit</a></td>";
          echo "<td> <a href=delete-b-ureading.php?bookNo=$bNo>Delete</a></td>";
          
          echo "</tr>";
}
echo "</table>";
}

// mysqli_close($conn);
?>