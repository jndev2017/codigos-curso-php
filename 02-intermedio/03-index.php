<?php
	/*
	Create a PHP Constant

	To create a constant, use the define() function.

	Syntax: 
			define(name, value, case-insensitive);
	*/
	
	define("GREETING", "Welcome to W3Schools.com!");
	echo GREETING;

	echo "<br><hr>";

	/*
		PHP const Keyword
	*/

	const MYCAR = "Volvo";
	echo MYCAR;

	echo "<br><hr>";

	/*
		Constant Arrays
	*/

	define("cars", [
	  "Alfa Romeo",
	  "BMW",
	  "Toyota"
	]);

	echo cars[0];

	echo "<br><hr>";

	/*
		Constants are Global
	*/

	define("GREETING_GLOBAL", "Welcome to W3Schools.com!");

	function myTest() {
	  echo GREETING_GLOBAL;
	}

	myTest();