<?php
	$newName = $_POST["Username"];
	$newPass = $_POST["Password"];
	addNewUser($newName, $newPass);
	header( 'Location: http://localhost:8080/views/index.php' );

	function addNewUser($name, $pass){
		$newRow = formatNew($name, $pass);
		$handle = fopen('../data/password.csv','a');
		fputcsv($handle, $newRow);
		fclose($handle);
	};

	function formatNew($name, $pass){
		return [$name, hashWBF($pass)];
	};

	function hashWBF($pass){
		return password_hash($pass, PASSWORD_BCRYPT);
	};

?>