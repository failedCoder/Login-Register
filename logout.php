<?php
//logging out user by destroying session and its variables,redirecting user back to index page
session_start();
session_destroy();

header("location:index.php");

?>