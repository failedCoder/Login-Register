<?php

session_start();

//redirecting the the users to homepage if they are authorized

if (isset($_SESSION["authorized"])) {
	
	header("Location: /homepage");

}

require_once "views/index.view.php";