<?php
$db = mysql_connect("rafael", "rodrigo", "BKs=hu&67$") or die("Could not connect.");

if(!$db) 

	die("no db");

if(!mysql_select_db("Databasename",$db))

 	die("No dat11abase selected.");
?>
