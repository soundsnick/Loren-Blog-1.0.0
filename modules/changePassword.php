<?php
	session_start();
	if(isset($_POST['password'])){
		include('database.php');
	    $password = $_POST['password'];
	    $username= $_SESSION['auth'];
	     mysqli_query($connect, "UPDATE admins SET password='$password' WHERE username='$username'");
	     header("Location: ../admin.php");


	}
   
?>