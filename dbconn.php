<?php
	$mysql_db_hostname = "localhost";
	$mysql_db_user = "rodrigo";
	$mysql_db_password = "BKs=hu&67$";
	$mysql_db_database = "rafael";
	$connection = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
	mysql_select_db($mysql_db_database, $connection) or die("Could not select database");
	?>