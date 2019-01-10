<?php
	$hostname='localhost';
	$user = 'root';
	$password = 'root';
	$mysql_database = 'login';
	$db = mysql_connect($hostname, $user, $password,$mysql_database);
	mysql_select_db("php_training", $db);
?>