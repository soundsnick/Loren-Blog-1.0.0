<form action="modules/add.php" enctype="multipart/form-data" method="post">
	<input type="text" placeholder="Название статьи" name="title" required="">
	<select name="category">
		<?php 
			//Вывод опции из Базы Данных
			$q = mysqli_query($connect, "SELECT * FROM categories");
			while($option = mysqli_fetch_array($q,MYSQLI_ASSOC)){
				echo '<option value="'.$option['name'].'">'.$option['name'].'</option>';
			}
		 ?>
	</select>
	<textarea name="description" placeholder="Краткое содержание статьи" required=""></textarea>
	<textarea name="content" placeholder="Текст" required=""></textarea>
	<!-- .output для вывода превью изображения -->
	<div id="output"></div>
	<label for="imga">
		<span>Загрузить обложку</span>
		<input id="imga" type="file" accept="image/*" name="filename" required="required" hidden="hidden" style="display: none;">
	</label>
	<input type="submit" value="Опубликовать">
	
	<!-- Скрипт вывода превью загруженного изображения -->
	<script>
	function handleFileSelect(evt) {
	    var file = evt.target.files; // FileList object
	    var f = file[0];
	    // Only process image files.
	    if (!f.type.match('image.*')) {
	        alert("Image only please....");
	    }
	    var reader = new FileReader();
	    // Closure to capture the file information.
	    reader.onload = (function(theFile) {
	        return function(e) {
	            document.getElementById('output').innerHTML = ['<img class="thumb" title="', escape(theFile.name), '" src="', e.target.result, '" />'].join('');;
	        };
	    })(f);
	    // Read in the image file as a data URL.
	    reader.readAsDataURL(f);
	}
	document.getElementById('imga').addEventListener('change', handleFileSelect, false);
	</script>
	
</form>