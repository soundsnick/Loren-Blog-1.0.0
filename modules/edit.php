<?php
	session_start();
	if(isset($_POST['title'])){
		include('database.php');
		 $title = mysql_real_escape_string(htmlspecialchars($_POST['title']));
	     $category = $_POST['category'];
	     $description = mysql_real_escape_string(htmlspecialchars($_POST['description']));
	     $content = $_POST['content'];
	     $author = $_SESSION['auth'];
	     $id = $_POST['id'];
	     mysqli_query($connect, "UPDATE  articles SET title='$title', category='$category',short='$description',content='$content', author= '$author' WHERE id='$id'");
	     header("Location: ../admin.php");


	}
   
?>