<?php
define('MYSQL_SERVER' , 'localhost');
define('MYSQL_USER' , 'root');
define('MYSQL_PASSWORD' , '');
define('MYSQL_DB', 'blog');

$home = "http://localhost/php/";

$connect = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) or die("Нет подключения к БД");
mysqli_set_charset($connect, "utf8") or die("Не установлена кодировка соединения");

?>