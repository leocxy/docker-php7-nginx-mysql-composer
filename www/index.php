<?php 
$mysql_connection = new PDO("mysql:host=mariadb;dbname=", "dev", "dev");
var_dump($mysql_connection);
phpinfo();
?> 