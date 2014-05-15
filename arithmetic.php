<?php

function check($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return true;
	} else {
		echo "Both $a and $b must be numbers.";
		return false;
	}
}
function add($a, $b) {
	if (check($a, $b)) {
    	return $a + $b;
    }
	echo PHP_EOL;
}

$sum = add(3, 3);
echo $sum . PHP_EOL;

function subtract($a, $b) {
    if (check($a, $b)) {
    	echo $a - $b;
	}
	echo PHP_EOL;
}

subtract(4, 2);

function multiply($a, $b) {
    if (check($a, $b)) {
    	echo $a * $b;
	}
	echo PHP_EOL;
}

multiply(14, 2);

function divide($a, $b) {
    if (check($a, $b)) {
    	if ($b == 0) {
    		echo "ERROR: You cannot divide by 0.";
    	} else {
    	echo $a / $b;
    	}
   	}
	echo PHP_EOL;
}

divide(14, 0);

function modulus($a, $b) {
	if (check($a, $b)) {
    	echo $a % $b;
	}
	echo PHP_EOL;
}

modulus(14, 2);



