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
	<input type="text" name="name" placeholder="Name">
	<input type="text" name="surname" placeholder="Surname">
	<input type="text" name="mobile" placeholder="Mobile Number">
	<input type="submit" name="submit" value="send">
</form>
</body>
</html>


<?php 


  include "db.php";


if (isset($_POST["submit"])) {
	
	$name = $_POST["name"];
	$surname = $_POST["surname"];
	$mobile = $_POST["mobile"];



	$sql = "INSERT INTO crud (crud_name, crud_surname, crud_mobile) VALUES ('$name', '$surname', '$mobile')";
	$query = mysqli_query($db_con,$sql);


	if ($query) {
		header('Location:list.php');
	} else {
		echo "error";
	}
	
}



?>