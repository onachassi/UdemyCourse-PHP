<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loop</title>
</head>
<body>

<?php 
	echo "<h1>While Loop</h1>";	
	$i = 1;
	while($i <= 10){
		echo "<p>" . $i ."</p>";
		$i ++;
	}

	echo "------------------";
	echo "<h1>For Loop</h1>";	

	for($i = 10; $i >= 0; $i--){
		echo "<p>" . $i ."</p>";
	}

	echo "------------------";
	echo "<h1>For Each Loop</h1>";	


	$numbers = array(100,200,300,400,500,600,700,800);

	foreach ($numbers as $key => $value) {
		echo "<p>#" . ($key + 1) . " - ". $value ."</p>";
	}

?>
	
</body>
</html>