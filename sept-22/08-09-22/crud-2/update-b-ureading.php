<?php

require 'connection.php';

$bookNo=$_GET['bookNo'];

$result=mysqli_query($conn,"select * from library where bookNo=$bookNo") or die("Unable to find Book record");

while($row=mysqli_fetch_array($result)){
    $bNo=$row['bookNo'];
    $bName=$row['bookName'];
    $bReader=$row['bookReader'];
    $rMobile=$row['readerMobile'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book record</title>
</head>
<body>
<h4>Edit Now</h4>
    <form method='post'>
        Enter Book number: <input type="number" name='bNo1' value="<?php echo $bNo ?>" disabled><br/><br/>
        Enter Book name: <input type="text" name='bName1' value="<?php echo $bName ?>"><br/><br/>
        Enter Book Reader: <input type="text" name='bReader1' value="<?php echo $bReader ?>"><br/><br/>
        Enter Reader Mobile: <input type="number" name='rMobile1' value="<?php echo $rMobile ?>"><br/><br/>

        <button name='updateBook'>Update Book</button>
    </form>
</body>
</html>

<?php

if(isset($_POST['updateBook'])){
    $u_bNo=$bNo;
    $u_bName=$_POST['bName1'];
    $u_bReader=$_POST['bReader1'];
    $u_rMobile=$_POST['rMobile1'];

    $result2=mysqli_query($conn,"update library set bookName='$u_bName', bookReader='$u_bReader', readerMobile=$u_rMobile where bookNo=$u_bNo") or die("unable to update book record");

    if($result2){
        echo "Book Updated successfully";
        header("location:welcome-admin.php");
    }
}

?>