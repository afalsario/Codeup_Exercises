<?php

function error($a, $b) {
		echo "Both $a and $b must be numbers.";
	}

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b;
    } else {
    	error($a, $b);
    }
	echo PHP_EOL;
}

add(2, 4);

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b;
	} else {
		error($a, $b);
	}
	echo PHP_EOL;
}

subtract('sdf', 2);

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b;
	} else {
		error($a, $b);
	}
	echo PHP_EOL;
}

multiply(14, 2);

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	if ($b == 0) {
    		echo "ERROR: You cannot divide by 0.";
    	} else {
    	echo $a / $b;
    	}
   	} else {
		error($a, $b);
	}
	echo PHP_EOL;
}

divide(14, 0);

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a % $b;
	} else {
		error($a, $b);
	}
	echo PHP_EOL;
}

modulus(14, 2);

?>
