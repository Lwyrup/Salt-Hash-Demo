<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP hash/salt demo</title>
</head>
<body>
	<?php
		if(!$_SESSION["Logged In"]){
	?>
		<div class="login">
			<h2>Login</h2>
			<form action="../scripts/login.php" method="post">
				<input name="Username"></input><br>
				<input name="Password"></input><br>
				<input type="submit" value="Login"></input>
			</form>
		</div>

		<div class="create">
			<h2>Create new account</h2>
			<form action="../scripts/user_create.php" method="post">
				<input name="Username"></input><br>
				<input name="Password"></input><br>
				<input type="submit" value="Create"></input>
			</form>
		</div>
	<?php	
		}
		else{
	?>
		<p>Hello, <?php echo($_SESSION["Name"]);?></p>
		<div class="logout">
			<form action="../scripts/logout.php">
				<input type="submit" value="Logout"></input>
			</form>
		</div>
	<?php
		};
	?>
	
</body>
</html>