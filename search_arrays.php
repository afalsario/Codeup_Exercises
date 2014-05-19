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


