<?php

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b;
	} else {
		echo "Both $a and $b must be numbers.";
	}
	echo PHP_EOL;
}

add(14, 2);

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b;
	} else {
		echo "Both $a and $b must be numbers.";
	}
	echo PHP_EOL;
}

subtract(14, 2);

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b;
	} else {
		echo "Both $a and $b must be numbers.";
	}
	echo PHP_EOL;
}

multiply(14, 2);

function divide($a, $b) {
	if ($b == 0) {
		$b = 2;
		echo "You cannot divide by 0. Default value set to 2.";
		echo PHP_EOL;
	}
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a / $b;
   	} else {
		echo "Both $a and $b must be numbers.";
	}
	echo PHP_EOL;
}

divide(14, 0);

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a % $b;
	} else {
		echo "Both $a and $b must be numbers.";
	}
	echo PHP_EOL;
}

modulus(14, 2);

?>
