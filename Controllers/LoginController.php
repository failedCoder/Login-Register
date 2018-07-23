<?php

session_start();


//fetching the values from form input fields

$username = $_POST["username"];

$password = $_POST["password"];


/*redirectign the user to the homepage if login is successful,
or to the login page if it fails,
session variable is used to display the login error on the form page */

if($user->login($username, $password)){

	unset($_SESSION["loginFailed"]);

	header("Location: /homepage");

} else {

	$_SESSION["loginFailed"] = true;

	header("Location: /login");
}





