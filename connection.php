<?php 
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';

	$db = 'my_data';

	$conn = mysql_connect($dbhost,$dbuser,$dbpass);

	mysql_select_db($db);



?>