<?php 
	require_once('database.php');
	// Blog Configuration DB connection
	$query = mysqli_query($connect, "SELECT * FROM config");
	$blog = mysqli_fetch_array($query, MYSQLI_ASSOC);

	// Blog meta configuration DB connection
	$metaq = mysqli_query($connect, "SELECT * FROM metaconfig");
	$meta = mysqli_fetch_array($metaq, MYSQLI_ASSOC);
 ?>