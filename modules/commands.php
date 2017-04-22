<?php 
	require_once('database.php');
	global $connect;
	$query = mysqli_query($connect, "SELECT * FROM tags ORDER BY `id` ASC");
	while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
		echo '<a href="edit.php?id='.$row['id'].'"><div class="grid-item animated flash">
				<div class="article flex">
					<div class="article_content2">'.$row['[bb]'].'</div>
					<div class="article_content2" style="flex: 1; text-align: right">
						<h4 class="article_title2">'.mysql_real_escape_string(htmlspecialchars($row['<html>'])).'</h4>
					</div>
				</div>
			  </div></a>';
	}
 ?>