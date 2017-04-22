<?php
	include('database.php');
    $bb = mysql_real_escape_string(htmlspecialchars($_POST['bb']));
    $html = $_POST['html'];
    mysqli_query($connect, "INSERT INTO `tags` (`id`,`[bb]`,`<html>`) VALUES (NULL, '$bb', '$html')");
    header("Location: ../admin.php");
   
?>