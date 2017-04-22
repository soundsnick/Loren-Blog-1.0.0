<?php
	include('database.php');
     $title = mysql_real_escape_string(htmlspecialchars($_POST['title']));
     $author = mysql_real_escape_string(htmlspecialchars($_POST['author']));
     $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
     $description = mysql_real_escape_string(htmlspecialchars($_POST['description']));
     $keywords = mysql_real_escape_string(htmlspecialchars($_POST['keywords']));
     mysqli_query($connect, "UPDATE metaconfig SET title='$title', description='$description',author='$author',email='$email',keywords = '$keywords'");
 	header("Location: ../admin.php");
   
?>