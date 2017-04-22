<div class="config">
	<h3 class="subtitle">Настройки блога</h3>
	<form action="modules/config.php" method="post">
		<input type="text" name="title" placeholder="Название блога" value="<?=$blog['title'];?>">
		<input type="text" name="description" placeholder="Описание блога" value="<?=$blog['description'];?>">
		<div class="flex"><span class="fo">Цвет фона: </span><input type="color" name="bgc" value="<?=$blog['bgc'];?>"></div>
		<div class="flex"><span class="fo">Цвет фона меню</span><input type="color" name="menuBg" value="<?=$blog['menuBg'];?>"></div>
		<input type="submit" value="Сохранить">
	</form>
	<h3 class="subtitle">Мета-данные</h3>
	<form action="modules/meta.php" method="post">
		<input type="text" name="title" placeholder="Тэг title" value="<?=$meta['title'];?>">
		<input type="text" name="author" placeholder="Meta-author" value="<?=$meta['author'];?>">
		<input type="text" name="email" placeholder="Meta-email" value="<?=$meta['email'];?>">
		<textarea name="description" placeholder="Meta-description"><?=$meta['description'];?></textarea>
		<textarea name="keywords" placeholder="Meta-keywords"><?=$meta['keywords'];?></textarea>
		<input type="submit" value="Сохранить">
	</form>
</div>