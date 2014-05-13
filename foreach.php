<?php
//This is my array
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// //This will separate my values in my array
// foreach ($things as $thing) {
// //check for integers
// 	if (is_integer($thing)) {
// 		echo "{$thing} is an integer\n";
// 	}
// //check for floats
// 	if (is_float($thing)) {
// 		echo "{$thing} is a float\n";
// 	}
// //check for booleans
// 	if (is_bool($thing)) {
// 		echo "{$thing} is a boolean\n";
// 	}
// //check for arrays
// 	if (is_array($thing)) {
// 		echo "the following is an array:\n";
// 		print_r($thing);
// 	}
// //check for null
// 	if (is_null($thing)) {
// 		echo "{$thing} is NULL\n";
// 	}
// //check for strings
// 	if (is_string($thing)) {
// 		echo "{$thing} is a string\n";
// 	}
// }

foreach ($things as $thing) {
	if (is_scalar($thing)) {
		echo $thing . PHP_EOL;
	}
}