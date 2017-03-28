<?php
	session_start();
	$attemptedPass = $_POST["Password"];
	$attemptedUser = $_POST["Username"];
	
	$pass = getPassword($attemptedUser);
	checkPassword($attemptedPass, $pass);

	header( 'Location: http://localhost:8080/views/index.php' ) ;

	function checkPassword($userInput, $hash){
		if (password_verify($userInput, $hash)){
			$_SESSION["Logged In"] = true;
			$_SESSION["Name"] = $_POST["Username"];
		}
		else{
			$_SESSION["Logged In"] = false;
		};
	};

	function changePassword(){};

	function getPassword($filter){
		$handle = fopen('../data/password.csv','r');
		while ( ($data = fgetcsv($handle)) !== false){
			if ( $data[0] == $filter){
				return $data[1];
			};
		}
		fclose($handle);
	};
?>