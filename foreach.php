<?php
//This is my array
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

echo PHP_EOL . "These are the values and their types.\n";

//This will separate my values in my array
foreach ($things as $thing) {
//check for integers
	if (is_integer($thing)) {
		echo "{$thing} is an integer";
	}
//check for floats
	if (is_float($thing)) {
		echo "{$thing} is a float";
	}
//check for booleans
	if (is_bool($thing)) {
		echo "{$thing} is a boolean";
	}
//check for arrays
	if (is_array($thing)) {
		echo "The following is an array:\n";
		print_r($thing);
	}
//check for null
	if (is_null($thing)) {
		echo "{$thing} is NULL";
	}
//check for strings
	if (is_string($thing)) {
		echo "{$thing} is a string";
	}
	echo PHP_EOL;
}

echo PHP_EOL . "These are the scalar values in the array.\n";

//Will output only scalar values
foreach ($things as $thing) {
	if (is_scalar($thing)) {
		echo $thing . PHP_EOL;
	}
}

echo PHP_EOL . "These are the types of the values in the array.\n";

//Will only output the type of value
foreach ($things as $thing) {
	$type = gettype($thing);
	echo $type . PHP_EOL;
}