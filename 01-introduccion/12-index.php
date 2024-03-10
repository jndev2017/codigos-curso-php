<?php
	$x = 0;

	function myTest() {
	  static $x = 0; // Define una variable global $x = 0
	  echo $x;
	  $x++;
	}

	myTest();
	myTest();
	myTest();