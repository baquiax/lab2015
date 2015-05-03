<?php
	$connection = mysql_connect("localhost", "baquiax","admin");
	if (!$connection) {
		die ("Ha ocurrido un error: " . mysql_error());
	}
	mysql_select_db("lab2015", $connection);

?>