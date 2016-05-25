<?php
	#Starta session
	session_start();

	#DB Variabler
	$DB_host = "localhost";
	$DB_user = "root";
	$DB_pass = "";
	$DB_name = "inventory2";

	#Skapa koppling till DB
	try {
  	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	  echo "Error: " .$e->getMessage();
	}

?>
