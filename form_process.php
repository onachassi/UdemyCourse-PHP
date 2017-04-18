<?php  

	$invalid_inputs = ["", " "];

	if(isset($_POST["submit"])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(strlen($username) < 4 && strlen($username) > 0){
			echo "Username too short - Pick a username longer than 5";
			echo '<br>';
		} elseif (strlen($username) > 10){
			echo "Username too long pick, must be less than 10";
			echo '<br>';
		} elseif (in_array($username, $invalid_inputs) || in_array($password, $invalid_inputs)) {
			echo 'Username or password cannot be blank';
			echo '<br>';
		}

		echo "username: " . $username;
		echo "<br>";
		echo "password: " . $password;
	};

?>
