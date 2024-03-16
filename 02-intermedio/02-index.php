<?php

	/*
		PHP Math

		PHP has a set of math functions that allows you to perform mathematical tasks on numbers.
	*/

	//---------------//
	// pi() Function //
	//---------------//
	echo "pi(): " . pi();

	echo "<br>";
	echo "<hr>";

	//---------------------------//
	// min() and max() Functions //
	//---------------------------//
	echo "min(min(0, 150, 30, 20, -8, -200)): " . min(0, 150, 30, 20, -8, -200);
	echo "<br>";
	echo "min(max(0, 150, 30, 20, -8, -200)): " . max(0, 150, 30, 20, -8, -200);

	echo "<br>";
	echo "<hr>";

	//----------------//
	// abs() Function //
	//----------------//
	echo "abs(-6.7): " . abs(-6.7);

	echo "<br>";
	echo "<hr>";

	//-----------------//
	// sqrt() Function //
	//-----------------//
	echo "sqrt(64): " . sqrt(64);
	
	echo "<br>";
	echo "<hr>";

	//------------------//
	// round() Function //
	//------------------//
	echo "round(0.69): ";
	echo(round(0.60));
	echo "<br>";
	echo "round(0.49): ";
	echo(round(0.49));
	echo "<br>";
	echo "<hr>";

	//------------------//
	//  Random Numbers  //
	//------------------//
	echo "rand(): ";
	echo(rand());
	echo "<br>";

	echo "rand(10, 100): ";
	echo(rand(10, 100));
	echo "<br>";