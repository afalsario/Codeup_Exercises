<?php

$fruits = ['apple', 'orange', 'banana', 'blueberry'];

for ($i=0; $i < count($fruits); $i++) { 
	echo $fruits[$i] . PHP_EOL;
}

echo PHP_EOL;

foreach ($fruits as $fruit) {
	echo $fruit . PHP_EOL;
}

$fruits = [
	'apples' 	=> 'red',
	'oranges' 	=> 'orange',
	'bananas' 	=> 'yellow',
	'blueberries' => 'blue'
];

echo PHP_EOL;

foreach($fruits as $fruit => $color) {
	echo "{$fruit} are {$color}" . PHP_EOL;
}


