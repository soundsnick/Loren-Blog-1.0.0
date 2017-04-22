<?php 
	include('modules/blog-config.php');
	include('modules/functions.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Панель управления</title>
	<?php include('templates/head.php') ?>
	<script>
		// Объявление переменной начальной вкладки управления
		var page = 'add';
	</script>
</head>
<body bgcolor="<?=$blog['bgc'];?>">
	<div class="section">
		<div class="wrapper">
			<?php include('templates/header.php') ?>
			<div class="col-md-8 content">
				<div class="article">
					<!-- Админ меню -->
					<?php include('templates/admin_header.php'); ?>
					<!-- Конец -->
					<div id="page">
						<!-- Вкладки управления -->
						<div id="add">
							<?php include('templates/forms/add.php'); ?>
						</div>
						<div id="remove">
							<?php include('modules/articlesAd.php');?>
						</div>
						<div id="edit"><?php include('modules/articlesAd2.php');?></div>
						<div id="blog" style="text-align: left;">
							<?php include('templates/forms/blog.php'); ?>
						</div>
						<div id="article">
							<?php include('templates/forms/article.php');
								  include('modules/commands.php'); ?>
						</div>
						<div id="change">
							<?php include('templates/forms/change.php');?>
						</div>
						<!-- Конец -->
					</div>
					<!-- Скрипт открытия нужной вкладки -->
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