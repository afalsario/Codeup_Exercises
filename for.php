<?php

define('STARTING', $argv[1]);
define('ENDING', $argv [2]);

for($i = $argv[1]; $i <= $argv[2]; $i++){
	echo "$i\n";
}