<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function test($variable_name) {
	if (isset($variable_name)) {
		echo "variable is SET\n";
	} elseif (empty($variable_name)) {
		echo "variable is EMPTY\n";
	}
}
unset($nothing);
test($nothing);
test($something);
test($array);

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

$serial = serialize($array);
echo $serial . PHP_EOL;

// Unserialize the array $array, and output the results

$unserial = unserialize($serial);
 print_r($unserial) . PHP_EOL;
