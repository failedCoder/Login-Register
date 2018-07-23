<?php

session_start();

//redirecting the users to login page if the end up here without authorization

if (!isset($_SESSION["authorized"])) {
	
	header('Location: /login');

}

$username = $_SESSION["username"];

require_once 'views/homepage.view.php';