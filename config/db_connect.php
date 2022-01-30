<?php 
	$host = 'localhost';
	$user = 'kshehu20';
	$password = 'KevinShehu.2000';
	$database = 'pizza_database';

	// connect to database
	$conn = mysqli_connect($host, $user, $password, $database);

	// check connection
	if(!$conn) {
		echo 'Connection error: ' . mysqli_connect_error();
	}
?>