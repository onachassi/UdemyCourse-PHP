<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Associate Arrays</title>
</head>
<body>

<?php 

	$numbers = array(10, 20, 59, 'Ori', 'Leetal', 'Josh');
	echo $numbers[2] . '<br />';

	print_r($numbers);

	$names = array("first_name" => 'Ori', 'last_name' => 'Nachassi');

	print_r($names);
	echo '<br />';

	echo $names['first_name'] . " " . $names['last_name'];
 ?>
	
</body>
</html>