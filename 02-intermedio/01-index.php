<?php

	/*
		PHP Casting

		Sometimes you need to change a variable from one data type into another, and sometimes you want a variable to have a specific data type. This can be done with casting.
	*/

	/*
		Change Data Type
		Casting in PHP is done with these statements:

		(string) - Converts to data type String
		(int) - Converts to data type Integer
		(float) - Converts to data type Float
		(bool) - Converts to data type Boolean
		(array) - Converts to data type Array
		(object) - Converts to data type Object
		(unset) - Converts to data type NULL
	*/
	
	//-----------------------------------------------------------//
	// 						Cast to String						 //
	//-----------------------------------------------------------//

	echo "Cast to String: " . "<br>";

	$a = 5;       // Integer
	$b = 5.34;    // Float
	$c = "hello"; // String
	$d = true;    // Boolean
	$e = NULL;    // NULL
	//$f = "3.14";  // Numeric String

	$a = (string) $a;
	$b = (string) $b;
	$c = (string) $c;
	$d = (string) $d;
	$e = (string) $e;	

	echo "<pre>";

	//To verify the type of any object in PHP, use the var_dump() function:
	var_dump($a);
	var_dump($b);
	var_dump($c);
	var_dump($d);
	var_dump($e);

	 //var_dump( (float) $f ); // Convierte el string "3.14" en un float

	echo "</pre>";

	echo "<hr>";

	//-----------------------------------------------------------//
	// 						Cast to Integer						 //
	//-----------------------------------------------------------//

	echo "Cast to Integer: " . "<br>";

	$a = 5;       // Integer
	$b = 5.34;    // Float
	$c = "25 kilometers"; // String
	$d = "kilometers 25"; // String
	$e = "hello"; // String
	$f = true;    // Boolean
	$g = NULL;    // NULL

	$a = (int) $a;
	$b = (int) $b;
	$c = (int) $c;
	$d = (int) $d;
	$e = (int) $e;
	$f = (int) $f;
	$g = (string) $g;

	echo "<pre>";

	var_dump($a);
	var_dump($b);
	var_dump($c);
	var_dump($d);
	var_dump($e);
	var_dump($f);
	var_dump($g);

	echo "</pre>";

	echo "<hr>";

	//-----------------------------------------------------------//
	// 						Cast to Float						 //
	//-----------------------------------------------------------//


	echo "Cast to Float: " . "<br>";

	$a = 5;       // Integer
	$b = 5.34;    // Float
	$c = "25 kilometers"; // String
	$d = "kilometers 25"; // String
	$e = "hello"; // String
	$f = true;    // Boolean
	$g = NULL;    // NULL

	$a = (float) $a;
	$b = (float) $b;
	$c = (float) $c;
	$d = (float) $d;
	$e = (float) $e;
	$f = (float) $f;
	$g = (float) $g;

	echo "<pre>";

	var_dump($a);
	var_dump($b);
	var_dump($c);
	var_dump($d);
	var_dump($e);
	var_dump($f);
	var_dump($g);

	echo "</pre>";

	echo "<hr>";

	//-----------------------------------------------------------//
	// 						Cast to Bool						 //
	//-----------------------------------------------------------//


	echo "Cast to Bool: " . "<br>";

	$a = 5;       // Integer
	$b = 5.34;    // Float
	$c = 0;       // Integer
	$d = -1;      // Integer
	$e = 0.1;     // Float
	$f = "hello"; // String
	$g = "";      // String
	$h = true;    // Boolean
	$i = NULL;    // NULL

	$a = (bool) $a;
	$b = (bool) $b;
	$c = (bool) $c;
	$d = (bool) $d;
	$e = (bool) $e;
	$f = (bool) $f;
	$g = (bool) $g;
	$h = (bool) $h;
	$i = (bool) $i;

	echo "<pre>";

	var_dump($a);
	var_dump($b);
	var_dump($c);
	var_dump($d);
	var_dump($e);
	var_dump($f);
	var_dump($g);
	var_dump($h);
	var_dump($i);

	echo "</pre>";

	echo "<hr>";

	//-----------------------------------------------------------//
	// 						Cast to Array						 //
	//-----------------------------------------------------------//


	echo "Cast to Array: " . "<br>";

	$a = 5;       // Integer
	$b = 5.34;    // Float
	$c = "hello"; // String
	$d = true;    // Boolean
	$e = NULL;    // NULL

	$a = (array) $a;
	$b = (array) $b;
	$c = (array) $c;
	$d = (array) $d;
	$e = (array) $e;

	echo "<pre>";

	var_dump($a);
	var_dump($b);
	var_dump($c);
	var_dump($d);
	var_dump($e);

	echo "</pre>";

	echo "<hr>";

	//-----------------------------------------------------------//
	// 						Cast to Object						 //
	//-----------------------------------------------------------//


	echo "Cast to Object: " . "<br>";

	$a = 5;       // Integer
	$b = 5.34;    // Float
	$c = "hello"; // String
	$d = true;    // Boolean
	$e = NULL;    // NULL

	$a = (object) $a;
	$b = (object) $b;
	$c = (object) $c;
	$d = (object) $d;
	$e = (object) $e;

	echo "<pre>";

	var_dump($a);
	var_dump($b);
	var_dump($c);
	var_dump($d);
	var_dump($e);

	echo "</pre>";

	//-----------------------------------------------------------//
	// 						Cast to NULL						 //
	//-----------------------------------------------------------//


	echo "Cast to NULL: " . "<br>";

	$a = 5;       // Integer
	$b = 5.34;    // Float
	$c = "hello"; // String
	$d = true;    // Boolean
	$e = NULL;    // NULL

	$a = (unset) $a;
	$b = (unset) $b;
	$c = (unset) $c;
	$d = (unset) $d;
	$e = (unset) $e;