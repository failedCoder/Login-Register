<!DOCTYPE html>
<html>
<head>
	<title>Authentification</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="app.css">
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
	<div class="col-md-4 offset-md-4 text-center vertical-center">
	<form method="POST" action="registerUser.php" class="mx-auto">
		<legend>Register:</legend>
	    <div class="form-group">
		<input required type="text" name="username" placeholder="Username">
		</div>
		<div class="form-group">
		<input required type="password" name="password" placeholder="Password">
		</div>
		<input type="submit" name="register" value="Register">
	</form>
    </div>
<?php
}
else if(isset($_GET["login"])){
	?>
	<div class="col-md-4 offset-md-4 text-center vertical-center">
    <form method="POST" action="loginUser.php" class="mx-auto">
    	<legend>Login:</legend>
    	<div class="form-group">
		<input required type="text" name="username" placeholder="Username">
		</div>
		<div class="form-group">
		<input required type="password" name="password" placeholder="Password">
		</div>
		<input type="submit" name="login" value="Login">
	</form>
<?php	
}
?>

</body>
</html>