<?php 
	include('modules/blog-config.php');
	include('modules/functions.php');
	if(isset($_GET['id'])){
		require_once('modules/database.php');
		global $connect;
		$id = $_GET['id'];
		$query = mysqli_query($connect, "SELECT * FROM articles WHERE id = '$id'");
		$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
		$specialarray = array();
		$specialarray2 = array();
		$queryCom = mysqli_query($connect, "SELECT * FROM tags");
		while($commands = mysqli_fetch_array($queryCom, MYSQLI_ASSOC)){
			array_push($specialarray,$commands['[bb]']);
			array_push($specialarray2,$commands['<html>']);
		}
		$content = str_replace($specialarray, $specialarray2, $row['content']);
	}
	else{header("location: admin.php");}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Администрирование</title>
	<?php include('templates/head.php') ?>
	<script>var page = 'add';</script>
</head>
<body>
	<div class="section">
		<div class="wrapper">
			<?php include('templates/header.php') ?>
			<div class="col-md-8 content">
				<div class="article">
					<div id="page">
						<div id="add">
							<form action="modules/edit.php" enctype="multipart/form-data" method="post">
								<input type="text" name="id" value="<?=$row['id'];?>" style="display: none;">
								<input type="text" placeholder="Название статьи" name="title" value="<?=$row['title'];?>">
								<select name="category">
									<?php 
										$q = mysqli_query($connect, "SELECT * FROM categories");
										
										while($option = mysqli_fetch_array($q,MYSQLI_ASSOC)){
											$isselected = '';
											if($row['category'] == $option['name']){
												$isselected = 'selected="selected"';
											}
											echo '<option value="'.$option['name'].'" '.$isselected.'>'.$option['name'].'</option>';
										}
									 ?>
								</select>
								<textarea name="description" placeholder="Краткое содержание статьи"><?=$row['short'];?></textarea>
								<textarea name="content" placeholder="Текст"><?=$row['content'];?></textarea>
								<input type="submit" value="Опубликовать">
								
							</form>
						</div>
					</div>
					<script>
						$('#' + page).fadeIn();
						function include(page){
							$('#page').children().hide();
							$('#' + page).fadeIn();
						}
					</script>
				</div>
			</div>
		</div>
	</div>
</body>
</html>