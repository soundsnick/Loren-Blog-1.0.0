<?php 
	function auth(){
		if(isset($_SESSION['auth'])){
			return 'true';
		}
		else{
			return 'false';
		}
	}


?>