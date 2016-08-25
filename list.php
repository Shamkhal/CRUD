<!DOCTYPE html>
<html>
<head>
<style>
table, tr, td{
	border: 1px solid black;
	padding: 10px;
}
</style>
	<title></title>
</head>
<body>


<?php

	$host = "localhost";
	$user_name = "root";
	$password = "";
	$db_name = "crud";
	$db_con = mysqli_connect($host, $user_name, $password, $db_name); 




	if ($db_con) {

		$sql = "SELECT * FROM crud";
		$query = mysqli_query($db_con, $sql); 
		
	?>
	<h1>PHP CRUD GRID</h1>
	<a href="add.php?id=<?php echo $row['id'];?>">CREATE</a>
	<table>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Surname</td>
			<td>Mobile Number</td>
			<td>Actions</td>
		</tr>

	<?php
		while ($row=mysqli_fetch_assoc($query)) {
				?>
				<tr> 
				
				<?php
			foreach ($row as $key => $value) {
					?>
							<td><?php echo $value;?></td>
				<?php } ?>
							<td><a href="delete.php?id=<?= $row['crud_id'];?>">DELETE</a></td>
							<td><a href="update.php?id=<?= $row['crud_id'];?>">UPDATE</a></td>
							<td><a href="read.php?id=<?= $row['crud_id'];?>">READ</a></td>

			</tr>
		<?php
		}
		?> 	
		</table>
		<?php
	
	}else{
		echo "error";
	}


?>

</body>
</html>
