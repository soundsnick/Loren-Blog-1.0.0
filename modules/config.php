<?php
	include('database.php');
     $title = mysql_real_escape_string(htmlspecialchars($_POST['title']));
     $description = mysql_real_escape_string(htmlspecialchars($_POST['description']));
     $bgc = $_POST['bgc'];
     $menuBg = $_POST['menuBg'];
     mysqli_query($connect, "UPDATE config SET title='$title', description='$description',bgc='$bgc',menuBg='$menuBg'");
 	header("Location: ../admin.php");
   
?>