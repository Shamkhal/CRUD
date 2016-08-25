
<?php 


  include "db.php";
  $id = $_GET["id"];
	$sql = "SELECT * FROM crud WHERE crud_id=$id";
	$query = mysqli_query($db_con, $sql);

	

 $row=mysqli_fetch_assoc($query);



?>

<!DOCTYPE html>
<html>
<head>
<style>
	input{
		display: block;
		padding: 5px 10px;
	}
</style>
	<title></title>
</head>
<body>

<form action="" method="POST">
	<input type="text" name="name" value="<?php echo $row['crud_name']; ?>">
	<input type="text" name="surname" value="<?php echo $row['crud_surname'];?>">
	<input type="text" name="mobile" value="<?php echo $row['crud_mobile'];?>">
	<input type="submit" name="submit" value="send">
</form>
<?php 



if (isset($_POST["submit"])) {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$mobile = $_POST['mobile'];
	echo $name;

	$sql = "UPDATE `crud` SET `crud_name`='$name',`crud_surname`='$surname',`crud_mobile`='$mobile' WHERE crud_id = $id";
	$query = mysqli_query($db_con, $sql);
	if ($query) {
		header("Location:list.php");
	}else {
		echo "error";
	}
}



 ?>

</body>
</html>


















