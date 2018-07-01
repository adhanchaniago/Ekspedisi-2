<?php
	$namahost = "localhost";
	$username = "admin";
	$password = "admin1";	//password MySQLi anda
	$database = "ekspedisi"; //database anda
	$connect = mysqli_connect($namahost,$username,$password) or die("Failed");
	mysqli_select_db($connect, $database) or die("Database not exist");
?>