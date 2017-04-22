<?php session_start(); ?>
<div class="header col-md-2" style="background-color: <?=$blog['menuBg'];?>">
	<div class="wrapper">
		<ul>
			<a href="index.php"><li>Главная</li></a>
			<?php if(auth() == 'false'): ?>
			<li class="login_li">Вход</li>
			<div class="login-wrapper">
				<form id="loginForm">
					<div id="login-responser"></div>
					<input type="text" name="login" placeholder="Имя пользователя">
					<input type="password" name="password" placeholder="Пароль">
					<input type="button" value="Войти" onclick="signIn();">
				</form>
			</div>
			<?php endif;?>
			<?php if(auth() == 'true'):?>
			<a href="admin.php"><li>Управление</li></a>
			<a href="modules/logout.php"><li class="login_li">Выход</li></a>
			<?php endif;?>
		</ul>
	</div>
</div>
<?php if(auth() == 'false'): ?>
<script>
	$('.login_li').click(function(){
		$('.login-wrapper').slideToggle();
	});
</script>
<script>
	document.getElementById('loginForm').addEventListener('keydown', function(event) {
	    if(event.keyCode == 13) {
	       event.preventDefault();
	       signIn();
	    }
	});
	function signIn() {
			   jQuery.ajax({
			      url: 'modules/login.php',
			      type:     "POST",
			      dataType: "html",
			      data: jQuery("#loginForm").serialize(),
			      success: function(response) {
		  			if(response == 1){
		  			 	document.getElementById('login-responser').innerHTML = '<div class="response animated flipInX">Неправильный логин</div>';
		  			 }
		  			 else if(response == 2){
		  			 	document.getElementById('login-responser').innerHTML = '<div class="response animated flipInX">Неправильный пароль</div>';
		  			 }
		  			 else{
		  			 	document.getElementById('login-responser').innerHTML = '<div class="response-success animated flipInX">Добро пожаловать!</div>';
		  			 	function reloadPage(){window.location = 'index.php';}
		  			 	setTimeout(reloadPage, 1000);
		  			 }
			      },
			      error: function(response) {
			         
			      }
			   });
		   $(':input','#formMain')
			 .not(':button, :submit, :reset, :hidden')
			 .val('')
			 .removeAttr('checked')
			 .removeAttr('selected');
			
		}
</script>
<?php endif; ?>