<?php
	$host = "localhost"; // Change your host only if you are deploying it online
	$username = "root"; // Enter your username here
	$pass = ""; // Enter you password here
	$dbname = "techfusiondb"; // Enter your database name here
	$con = mysqli_connect($host,$username,$pass) or die("Connection Error: ".mysqli_error($con));
	$db = mysqli_select_db($con,$dbname) or die("Database error: ".mysqli_error($con));
?>