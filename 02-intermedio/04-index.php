<?php

	namespace myNamespace;

	/*
		PHP Magic Constants

		PHP has nine predefined constants that change value depending on where they are used, and therefor they are called "magic constants".

		These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.
	*/

	//---------//
	// __DIR__ //
	//---------//
	echo "The directory of the file: " . __DIR__;

	echo "<br><hr>";

	//---------//
	// __FILE__ //
	//---------//
	echo "The file name including the full path: " . __FILE__;

	echo "<br><hr>";

	//-----------//
	// __CLASS__ //
	//-----------//

	class Fruits {
	  public function myName(){
	    return __CLASS__;
	  }
	}

	$kiwi = new Fruits();
	
	echo "The class name is returned: " . $kiwi->myName();

	echo "<br><hr>";

	//--------------//
	// __FUNCTION__ //
	//--------------//
	function myName(){
	  return __FUNCTION__;
	}
	echo "The function name is returned: " . myName();

	echo "<br><hr>";

	//----------//
	// __LINE__ //
	//----------//
	echo "The current line number: " . __LINE__;

	echo "<br><hr>";

	//------------------//
	// ClassName::class //
	//------------------//	

	class Books {
	  public function myName(){
	    return Books::class;
	  }
	}

	$docs = new Books();

	echo "Namespace/ClassName::class -> " . $docs->myName();