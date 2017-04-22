<?php
	session_start();
	if(isset($_POST['title'])){
		if($_FILES["filename"]["size"] > 1024*10*1024)
		   {
		     echo ("Размер файла превышает три мегабайта");
		     exit;
		   }
		   // Проверяем загружен ли файл
		   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
		   {
		     // Если файл загружен успешно, перемещаем его
		     // из временной директории в конечную
		     move_uploaded_file($_FILES["filename"]["tmp_name"], "../img/posts/".$_FILES["filename"]["name"]);
		     include('database.php');
		     $image = mysql_real_escape_string(htmlspecialchars($_FILES["filename"]["name"]));
		     $title = mysql_real_escape_string(htmlspecialchars($_POST['title']));
		     $category = $_POST['category'];
		     $description = mysql_real_escape_string(htmlspecialchars($_POST['description']));
		     $content = mysql_real_escape_string(htmlspecialchars($_POST['content']));
		     $author = $_SESSION['auth'];
		     mysqli_query($connect, "INSERT INTO `articles` (`id`, `title`, `img`, `short`, `content`, `author`, `category`) VALUES (NULL, '$title', '$image', '$description', '$content', '$author', '$category')");
		     header("Location: ../admin.php");
		   } else {
		      echo("Ошибка загрузки файла");
		   }
		

	}
   
?>