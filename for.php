<?php

// if ($argc < 4) {
// 	echo "Enter in a starting and ending number followed by an increment.\n";
// 	exit(1);
// }

// define('STARTING', $argv[1]);
// define('ENDING', $argv[2]);
// define('INCR', $argv[3]);

// for($i = STARTING; $i <= ENDING; $i = $i + INCR){
// 	echo "$i\n";
// }


fwrite(STDOUT, "Enter in a starting number.\n");

$start = trim(fgets(STDIN));

fwrite(STDOUT, "Thanks! Now enter in an ending number.\n");

$end = trim(fgets(STDIN));

if (!(is_numeric($start)) || (!is_numeric($end))) {
	echo "ERROR! Please enter in two numeric values.\n";
	exit(1);
}

fwrite(STDOUT, "Thanks! Now enter in an increment.\n");

$incr = trim(fgets(STDIN));

if (($incr != TRUE) || !(is_numeric($incr))) {
	$incr = 1;
}

echo "Here we go!\n";

for($i = $start; $i <= $end; $i += $incr) {
	echo "$i\n";
}

