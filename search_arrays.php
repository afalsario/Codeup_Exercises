<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function search($name, $names)
{
	if (array_search($name, $names) !== FALSE)
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}

$name = 'Tina';
var_dump(search($name, $names));

function array_common_count($array1, $array2)
{
	$count = 0;

	foreach($array1 as $array)
	{
		if (search($array, $array2))
		{
			$count++;
		}
	}
	return $count;
}

var_dump(array_common_count($names, $compare));
