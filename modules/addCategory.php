<?php
	include('database.php');
    echo $category = mysql_real_escape_string(htmlspecialchars($_POST['name']));
    mysqli_query($connect, "INSERT INTO `categories` (`id`,`name`) VALUES (NULL, '$category')");
    header("Location: ../admin.php");
   
?>