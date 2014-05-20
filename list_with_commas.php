<?php


// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);
// Humanize that list
// Converts array into list n1, n2, ..., and n3
function humanized_list($array, $sort = FALSE) {
	if ($sort)
	{
		sort($array);
	}
	$last = array_pop($array);
	array_push($array, "and $last");
	$string = implode(", ", $array);
	return $string;
}



echo humanized_list($physicists_array, true) . PHP_EOL;

$last = array_pop($physicists_array);

$famous_fake_physicists = implode(", ", $physicists_array) . " and " . $last;

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";






