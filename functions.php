<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Out here tryna Function</title>
</head>
<body>
	
	<?php  

	$name = 'Ori';

	function say_something($name){
		echo 'My Name is ' . $name;
	} 

	say_something($name);
	echo "<br>";

	function addNumbers($num1, $num2){
		$sum = $num2 + $num1;
		return $sum;
	}

	$result = addNumbers(5,10);
	echo $result."<br>";
	$result = addNumbers($result, $result);
	echo $result;
	echo "<br>";
	echo "<br>";
	$x = "global";
	echo $x;
	echo "<br>";

	function convertGlobal(){
		global $x;
		$x = "local";
	}
	convertGlobal();
	echo $x;
	echo "<br>";	
	echo "----------";	
	echo "<br>";
	echo "Constants";	
	echo "<br>";

	define("NAME", "ORI");
	echo NAME;
	echo "<br>";	
	echo "----------";	
	echo "<br>";
	echo "Math Functions";	
	echo "<br>";
	echo "power 4^2: " . pow(4,2);
	echo "<br>";
	echo 'Random Number 1-100: ' . rand(1, 100);
	echo "<br>";
	echo 'Square Root of 100: ' . sqrt(100);
	echo "<br>";
	echo 'Round 3.4 down:' . floor(3.4);
	echo "<br>";
	echo 'Round 3.4 up: ' . ceil(3.4);
		echo "<br>";
	echo "----------";	
	echo "<br>";
	echo "String Functions";	
	echo "<br>";

	$string = "Hello World";

	echo strlen($string) . '<br>';
	echo strtoupper($string) . '<br>';
	echo strtolower($string) . '<br>';
	print $string . '<br>';

	echo "<br>";
	echo "----------";	
	echo "<br>";
	echo "Array Functions";	
	echo "<br>";

	$list = [ 600, 1, 20, 3, 40, 5];

	echo max($list);
	echo "<br>";
	sort($list);
	echo $list[0];
	echo "<br>";




	echo "<br>";

	?>

</body>
</html>