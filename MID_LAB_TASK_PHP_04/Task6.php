<?php
	$cars = array('key1' => 'BMW', 'key2' => 'Audi', 'key3' => 'Cadillac', 'key4' => 'Bentley');

	$car_marked ='BMW';

	foreach ($cars as $value) {
		echo "$value\t";
	}
	echo "\n";
	if($value == $car_marked)
	{
		echo "car found";
	}
	else
	{
		echo "car not found";
	}
?>