<?php

$a = 0;

do {
	echo $a . PHP_EOL;
	$a += 2;
} while ($a < 102);

echo PHP_EOL;

$b = 100;

do {
	echo $b . PHP_EOL;
	$b = $b - 5;
} while ($b >= -10);