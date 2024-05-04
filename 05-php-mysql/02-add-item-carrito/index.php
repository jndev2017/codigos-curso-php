<?php	
	include_once("conexion.php");

	$sql = "INSERT INTO
		`itemscarrito`(`idProducto`, `cant`, `idCarrito`)
		VALUES ('100','2','1')";

	try {
		// use exec() because no results are returned
  		$conn->exec($sql);

  		echo "<br>Item agregado en el carrito";
	}
	catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}

	include_once("cerrar_conexion.php");
	
?>
