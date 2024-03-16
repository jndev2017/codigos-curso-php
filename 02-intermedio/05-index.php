<?php
	$cars = ["Ford", "Volvo", "BMW"];

	/* Foreach:

		Loops through a block of code for each element in an array or each property in an object
	*/
	foreach($cars as $car) {
	  echo "$car <br>";
	}

	echo "<hr>";

	$cars = ["Ford", "Volvo", "BMW", "Honda"];

	// Using a variable to storage the size of an array we get the same behaviour
	// Better performance than for loop that use sizeof() function in each loop
	$sizeCars = sizeof($cars);

	for( $i=0; $i < $sizeCars; $i++ ) {
	  echo "$cars[$i] <br>";
	}
