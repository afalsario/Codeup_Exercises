<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'ashley', 'password');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$nat_parks = [
	[
		'name' => 'Acadia',
		'location' => 'Maine',
		'date' => '1919-02-26',
		'area' => '47390'
	],
	[
		'name' => 'American Samoa',
		'location' => 'American Samoa',
		'date' => '1988-10-31',
		'area' => '9000'
	],
	[
		'name' => 'Arches',
		'location' => 'Utah',
		'date' => '1971-11-12',
		'area' => '76519'
	],
	[
		'name' => 'Badlands',
		'location' => 'South Dakota',
		'date' => '1978-11-10',
		'area' => '242756'
	],
	[
		'name' => 'Big Bend',
		'location' => 'Texas',
		'date' => '1944-06-12',
		'area' => '801163'
	],
	[
		'name' => 'Biscayne',
		'location' => 'Florida',
		'date' => '1980-06-28',
		'area' => '172924'
	],
	[
		'name' => 'Black Canyon of the Gunnison',
		'location' => 'Colorado',
		'date' => '1999-10-21',
		'area' => '32950'
	],
	[
		'name' => 'Bryce Canyon',
		'location' => 'Utah',
		'date' => '1928-02-25',
		'area' => '35835'
	],
	[
		'name' => 'Canyonlands',
		'location' => 'Utah',
		'date' => '1964-09-12',
		'area' => '337598'
	],
	[
		'name' => 'Capitol Reef',
		'location' => 'Utah',
		'date' => '1971-12-18',
		'area' => '241904'
	]
];
foreach ($nat_parks as $park)
{
	$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date']}', '{$park['area']}')";
	$dbc->exec($query);
}



?>
