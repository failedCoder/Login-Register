<?php 

session_start();


//fetching the values from form input fields

$username = $_POST['username'];

$password = $_POST['password'];


/*signing in users if the registration is successful,
or redirecting them back to the registration form with an error */

if($user->register($username, $password)) {

	unset($_SESSION['registrationFailed']);

	$user->login($username, $password);

	header("Location: /homepage");

} else {

	$_SESSION['registrationFailed'] = true;

	header("Location: /register");

}