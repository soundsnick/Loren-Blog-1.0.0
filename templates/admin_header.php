<div class="header_admin" style="background-color: <?=$blog['menuBg'];?>">
	<ul>
		<li onclick="page = 'add';include(page);">Добавить</li>
		<li onclick="page = 'remove';include(page);">Удалить</li>
		<li onclick="page = 'edit';include(page);">Редактировать</li>
		<li onclick="page = 'blog';include(page);">Настройки блога</li>
		<li onclick="page = 'article';include(page);">Настройки статей</li>
		<li onclick="page = 'change';include(page);">Сменить пароль</li>
	</ul>
</div>