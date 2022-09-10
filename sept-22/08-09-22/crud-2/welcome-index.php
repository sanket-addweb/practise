<?php
session_start();
$name=$_SESSION['logName'];
$regNo=$_SESSION['rNo'];

if(!isset($_SESSION['logName'])){
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
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
    <h2>welcome! <?php echo $name ?></h2>
    <!-- <button name=booksList formmethod='post'>Booklist</button> -->
</body>
</html>
<?php

    include 'connection.php';
    $result=mysqli_query($conn,"select * from library where bookReader='$name'") or die("unable to get record of your book");

    echo "<table border='3'>";
    echo "<tr>
        <td>Book No</td> <td>Book Name</td>  <td>Book Reader</td> <td>Reader Mobile</td> 
      </tr>";
while($row=mysqli_fetch_array($result)){
    $bNo=$row['bookNo'];
          echo "<tr>";
          echo "<td>".$row['bookNo']."</td>";
          echo "<td>".$row['bookName']."</td>";
          echo "<td>".$row['bookReader']."</td>";
          echo "<td>".$row['readerMobile']."</td>";
          
          echo "</tr>";
}
echo "</table>";

// mysqli_close($conn);
?>

