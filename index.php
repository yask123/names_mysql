<?php
	include 'connection.php';

	$query = "SELECT * FROM people";

	$result = mysql_query($query);

	while($person = mysql_fetch_array($result))
	{
		echo "<h3>".htmlspecialchars($person['Name'])."</h3>";
	}

	echo "<h2>YIPEEE , I finally outputted data from mysql !!</h2>";

	echo "GREAT SUCCESS!!!!!!!!!";
?>
