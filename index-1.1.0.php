<?php 
	include('modules/blog-config.php');
	include('modules/functions.php');
	?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$meta['title'];?></title>
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
					<?php include('modules/articles.php'); ?>
				</div>
				<!-- Конец -->
			</div>
		</div>
	</div>
	<script src="js/infinitePagination.js"></script>
</body>
</html>