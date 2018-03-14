connection.php

<?php 
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '12345';

$con=mysqli_connect($dbhost,$dbuser,$dbpass)or die("Problem with the connection to server :".mysqli_error());

mysqli_select_db($con, 'sandeep')or die("Problem with the connection to server :".mysqli_error());
?>
