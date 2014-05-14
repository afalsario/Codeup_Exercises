<?php

$fruits = ['apple', 'orange', 'banana', 'blueberry'];

for ($i=0; $i < count($fruits); $i++) { 
	$fruit = $fruits[$i];
	echo $fruit . PHP_EOL;
}

foreach ($fruits as $fruit) {
	echo $fruit . PHP_EOL;
}

$fruits = [
	'apple' 	=> 'red',
	'orange' 	=> 'orange',
	'banana' 	=> 'yellow',
	'blueberry' => 'blue'
];

foreach($fruits as $fruit => $color) {
	echo "$fruit is $color" . PHP_EOL;
}


