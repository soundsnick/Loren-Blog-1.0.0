<h3 class="subtitle">Добавить категорию</h3>
<form action="modules/addCategory.php" method="post">
	<div class="flex" style="padding: 10px 0">
		<input type="text" placeholder="Название категории" name="name">
		<input type="submit" value="Добавить">
	</div>
</form>
<div class="categories">
	<?php 
		//Вывод категории из Базы Данных
		$q = mysqli_query($connect, "SELECT * FROM categories");
		while($option = mysqli_fetch_array($q,MYSQLI_ASSOC)){
			echo '<div class="category-item">'.$option['name'].'</div>';
		}
	 ?>
</div>
<h3 class="subtitle">Добавить элементы разметки</h3>
<form action="modules/tag.php" method="post">
	<div class="flex" style="padding: 10px 0">
		<input type="text" placeholder="[bb] формат" name="bb">
		<input type="text" placeholder="html формат" name="html">
		<input type="submit" value="Добавить">
	</div>
</form>