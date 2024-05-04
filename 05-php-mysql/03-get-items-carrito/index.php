<?php	
	include_once("conexion.php");

	try {
		$sql = "SELECT * FROM itemscarrito";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

  		// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		
		echo "<pre>";
		//print_r($stmt->fetchAll());
		echo "</pre>";
		
		$json_object = json_encode($stmt->fetchAll());
		print_r($json_object);
		
	}
	catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	
	include_once("cerrar_conexion.php");
?>
