<?php 
$mysql_connection = new PDO("mysql:host=mariadb;dbname=Test", "root", "root");
var_dump($mysql_connection);
phpinfo();
?> 