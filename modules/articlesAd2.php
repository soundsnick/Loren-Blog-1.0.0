<?php 
	require_once('database.php');
	global $connect;
	$query = mysqli_query($connect, "SELECT * FROM articles ORDER BY `id` DESC");
	while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
		echo '<a href="edit.php?id='.$row['id'].'"><div class="grid-item animated flash">
				<div class="article flex">
					<div class="article_content2">'.$row['id'].'-></div>
					<div class="article_content2">
						<h4 class="article_title2">'.$row['title'].'</h4>
					</div>
				</div>
			  </div></a>';
	}
	if(mysqli_num_rows($query) == 0){
		echo '<div class="empty">Статей нету</div>';
	}
 ?>