<html>
<head>
<title>PHP CURD Operation using PDO Extension  </title>
</head>
<body>
<h3>Delete Record | PHP CRUD Operations using PDO Extension</h3>
<form name="insertrecord" method="post">
Product Id: <input type="number" name="pId" required><br/>
<input type="submit" name="Delete" value="Submit"><br/>
</form>
</body>
</html>

<?php
if(isset($_POST['Delete']))
{
	$pId=$_POST['pId'];

    try{
        $pdo=new PDO("mysql:host=localhost;dbname=product_manage","root","");
        $sql="DELETE from Clothes Where productId=:pId";
        $query=$pdo->prepare($sql);
        $query ->bindParam(':pId',$pId,PDO::PARAM_INT);
    
        $affectedrows=$query ->execute();
        if($affectedrows!=0){
            echo "Data Delete Successfully";
        }
        else
	    {
		echo "Error in Deleting";
	    }

    }
    catch (PDOException $e) {
        die("Could not connect to the database :" . $e->getMessage());
    }










// try {
//     $pdo = new PDO("mysql:host=localhost;dbname=Batch07", "root", "");
//     $sql = 'Delete from student WHERE id=:id';
// 	$query = $pdo -> prepare($sql);
// 	$query -> bindParam(':id', $id, PDO::PARAM_STR);

// 	$affectedrows =$query -> execute();
// 	if($affectedrows !="")
// 	{
// 		echo "Data Delete Successfully";
// 	}
// 	else
// 	{
// 		echo "Error in Deleting";
// 	}
// } catch (PDOException $e) {
//     die("Could not connect to the database :" . $e->getMessage());
// }
}
?>