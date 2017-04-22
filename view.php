<?php 
	if(!isset($_GET['article'])){
		header('location: index.php');
	}
	else{
		include('modules/functions.php');
		require_once('modules/blog-config.php');
		require_once('modules/database.php');
		global $connect;
		$id = $_GET['article'];
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
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta property="og:title" content="<?=$row['title'];?>" />
	<meta property="og:image" content="<?=$home?>img/<?=$row['img'];?>" />
	<title><?=$row['title'];?></title>
	<?php include('templates/head.php');?>
</head>
<body bgcolor="<?=$blog['bgc'];?>">

	
	<div class="section">
		<div class="wrapper">
			<?php include('templates/header.php');?>
			<div class="content col-md-8">
				<div class="article_img" style="background-image: url('img/posts/<?=$row['img'];?>')">
					<h4 class="title"><?=$row['title'];?></h4>
					<p class="author">Автор: <?=$row['author'];?></p>
					<a href="category.php?category=<?=$row['category'];?>"><h5 class="category"><?=$row['category'];?></h5></a>
					<div class="overlay"></div>
				</div>
				<div class="article_c">
					<div class="paragraph"><?=$content;?>
					</div>
					<div class="share">
						<!-- Put this script tag to the <head> of your page -->
						<script type="text/javascript" src="https://vk.com/js/api/share.js?94" charset="windows-1251"></script>

						<!-- Put this script tag to the place, where the Share button will be -->
						<script type="text/javascript"><!--
						document.write(VK.Share.button(false,{type: "custom", text: "<img src=\"https://vk.com/images/share_32.png\" width=\"32\" height=\"32\" />",
							url: '<?=$home;?>',
						  title: '<?=$row['title'];?>',
						  description: '<?=$row['short'];?>',
						  image: '<?=$home?>img/<?=$row['img'];?>',
						  noparse: true}));
						--></script>
						<a class="twitter-share-button"  href="https://twitter.com/intent/tweet?text=<?=$home;?>view.php?article=<?=$row['id'];?>" data-size=">arge"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
					</div>
				</div>
				<div class="comments">
						<div id="disqus_thread"></div>
						<script>
						(function() {
						var d = document, s = d.createElement('script');
						s.src = 'https://lorenblog.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					</div>
				<?php include('templates/footer.php');?>
			</div>
			
		</div>
	</div>
</body>
</html>