<?php

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
	} else {
		echo "Both $a and $b must be numbers.";
	}
	echo PHP_EOL;
}

add('sdf', 2);

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . PHP_EOL;
	} else {
		echo "Both $a and $b must be numbers.";
	}
	echo PHP_EOL;
}

subtract('sdf', 2);

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . PHP_EOL;
	} else {
		echo "Both $a and $b must be numbers.";
	}
	echo PHP_EOL;
}

multiply('sdf', 2);

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a / $b . PHP_EOL;
	} else {
		echo "Both $a and $b must be numbers.";
	}
	echo PHP_EOL;
}

divide('sdf', 2);

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a % $b . PHP_EOL;
	} else {
		echo "Both $a and $b must be numbers.";
	}
	echo PHP_EOL;
}

modulus('sdf', 2);

?>
