<html>
<head>
<title>PHP CURD Operation using PDO Extension  </title>
</head>
<body>
<h3>Insert Record | PHP CRUD Operations using PDO Extension</h3>
<form name="insertrecord" method="post">
Product Id: <input type="text" name="pId" required><br/>
Product Name:<input type="text" name="pName" required><br/>
Price:<input type="number" name="pPrice" required><br/>
<input type="submit" name="insert" value="Submit"><br/>
</form>
</body>
</html>

<?php

// if(isset($_POST['insert'])){
//    $pId= $_POST['pId'];
//    $pName= $_POST['pName'];
//    $pPrice= $_POST['pPrice'];
// }
// try{
//     $pdo=new PDO("mysql:host=localhost;dbname=product_manage","root","");
//     // $pdo=new PDO("mysql:host=localhost;dbname=product_manage","root","");
//     $sql= "insert into Clothes(productId,productName,Price) values(:productId,:ProductName,:Price)";
//     $query=$pdo-> prepare($sql);
//     $query -> bindParam(':productId',$pId, PDO::PARAM_INT);
//     $query -> bindParam(':productName',$pName, PDO::PARAM_STR);//bindParam
//     $query -> bindParam(':Price',$pPrice, PDO::PARAM_INT);

//     $query -> execute();
//     $lastInsertId=$pdo->lastInsertId();
//     if($lastInsertId!=""){
//         echo "Data inserted successfully";
//     }
//     else{
//         echo "Error in inserting data";
//     }
//     $query->setFetchMode(PDO::FETCH_ASSOC);



// }
// catch(PDOException $e){
//     die("Error in connection to database $e->getMessage()");
// }

if(isset($_POST['insert']))
{
   $pId= $_POST['pId'];
   $pName= $_POST['pName'];
   $pPrice= $_POST['pPrice'];
try {
    $pdo = new PDO("mysql:host=localhost;dbname=product_manage", "root", "");
    $sql = 'insert into Clothes(productId, productName,Price) values(:productId,:productName,:Price)';
	$query = $pdo -> prepare($sql);
	$query -> bindParam(':productId', $pId, PDO::PARAM_INT);
	$query -> bindParam(':productName', $pName, PDO::PARAM_STR);
	$query -> bindParam(':Price', $pPrice, PDO::PARAM_INT);
    //$q = $pdo->query($sql);
	$query -> execute();
	$lastInsertId=$pdo->lastInsertId();
	if($lastInsertId!="")
	{
		echo "Data Inserted Successfully";
	}
	else
	{
		echo "Error in Inserting";
	}
    $query->setFetchMode(PDO::FETCH_ASSOC);
	// while($row=$query->fetch())
	// {
	// 	echo $row['id']." ".$row["name"]." ".$row['address']." ".$row['mobile']." "."<br>";
		
	// }
} catch (PDOException $e) {
    die("Could not connect to the database :" . $e->getMessage());
}
}
?>
