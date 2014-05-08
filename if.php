<?php

$a = 5;
$b = 10;
$c = '10';

if ($a < $b) {
    // will run
    echo "$a is less than $b\n";
}

if ($b > $a) {
    // will run
    echo "$b is greater than $a\n";
}

if ($b >= $c) {
    // will run
    echo "$b is greater than or equal to $c\n";
}

if ($b <= $c) {
    // will run
    echo "$b is less than or equal to $c\n"; 
}

if ($b == $c) {
    // will run
    echo "$b is equal to $c\n";
}

if ($b === $c) {
    // will not run
    echo "$b is identical to $c\n";
}

if ($b != $c) {
	//will not run
    echo "$b is not equal to $c\n";
}

if ($b !== $c) {
	//will run
    echo "$b is not identical to $c\n";
}

?>