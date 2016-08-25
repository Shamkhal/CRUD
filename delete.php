<?php 

include 'db.php';

$id = $_GET['id'];
echo $id;

$sql = "DELETE FROM crud WHERE crud_id=$id";
$query = mysqli_query($db_con, $sql);

if ($query) {
	header("Location:list.php");
}else{
	echo "ERROR";
}
?>