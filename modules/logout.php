<?php
	require_once('database.php');
	session_start();
	global $connect;
	unset($_SESSION['auth']);
    header("Location: ../index.php");
    
	?>