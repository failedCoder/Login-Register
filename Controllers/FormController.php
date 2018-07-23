<?php

session_start();

//redirects signed in users to homepage

if (isset($_SESSION["authorized"])) {
	
	header("Location: /homepage");

}

//loading the right form based on the uri

if ($uri === "login") {
	
	require "views/loginForm.view.php";

} else if ($uri === "register") {
	
	require "views/registerForm.view.php";

}