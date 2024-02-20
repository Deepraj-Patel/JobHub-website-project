<?php 

	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "jobhub";

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn) {
		die("Cannot connect to the database");
	}

?>