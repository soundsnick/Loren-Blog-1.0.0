<?php 
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		include('database.php');
		global $connect;
		mysqli_query($connect, "DELETE FROM articles WHERE id = '$id'");
		header("Location: ../admin.php");
	}
 ?>