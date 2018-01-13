<!DOCTYPE html>
<html>
<head>
	<title>Authentification</title>
</head>
<body>
<?php
//not allowing user to access login or registration form if he is already logged in
session_start();
if (isset($_SESSION["loggedIn"])) {
	header("location:homepage.php");
}
//checking the content of $_GET to decide what form to display
if (isset($_GET["register"])) {
	?>
	<form method="POST" action="registerUser.php">
		<input required type="text" name="username" placeholder="Username">
		<br>
		<input required type="password" name="password" placeholder="Password">
		<br>
		<input type="submit" name="register" value="Register">
	</form>
<?php
}
else if(isset($_GET["login"])){
	?>
    <form method="POST" action="loginUser.php">
		<input required type="text" name="username" placeholder="Username">
		<br>
		<input required type="password" name="password" placeholder="Password">
		<br>
		<input type="submit" name="login" value="Login">
	</form>
<?php	
}
?>

</body>
</html>