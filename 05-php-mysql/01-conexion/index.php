<?php
	$db_server = "localhost";
	$db_username = "root";	
	$db_password = "";

	$db_name = "pc-almacen";

	try {
  		$conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_username, $db_password);
	  	// set the PDO error mode to exception
	  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	  	echo "Connected successfully";
	} 
	catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}

	$conn = null;
?>
