<?php 
	include('modules/blog-config.php');
	include('modules/functions.php');
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Статьи в категории <?=$_GET['category'] ?></title>
	<?php include('templates/head.php');?>
</head>
<body bgcolor="<?=$blog['bgc'];?>">
	<div class="section">
		<div class="wrapper">
			<?php include('templates/header.php');?>
			<div class="content col-md-8">
				<!-- Шапка блога -->
				<?php include('templates/blog_header.php'); ?>
				<!-- Конец -->
				<!-- Посты -->
				<div class="grid">
					<?php include('modules/category.php'); ?>
				</div>
				<!-- Конец -->
			</div>
		</div>
	</div>
	<div id="category" style="display: none;"><?=$category;?></div>
	<script src="js/infinitePaginationCategory.js"></script>
</body>
</html>