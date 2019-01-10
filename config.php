<?php

/*
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_DATABASE', 'php_training');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   */

    $hostname='localhost';
	$user = 'root';
	$password = 'root';
	$mysql_database = 'php_training';
	$db = mysqli_connect($hostname, $user, $password,$mysql_database);
	
    // Create connection
    $conn = new mysqli($hostname, $user, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "connect successfully";
?>