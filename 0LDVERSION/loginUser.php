<?php
session_start();

require_once "dbConnection.php";
$conn = dbConn::getConn();

//redirecting user back to login form if he gets here without inputing username and password to login form
if (!isset($_POST["username"]) && !isset($_POST["password"])) {
	header("location:forms.php?login=Login");
}
//select query to retrive password from the database(that was hashed using password_hash) using PDO prepared statements
$query = "SELECT password FROM users WHERE username = :username";

$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $username,PDO::PARAM_STR);

$username = $_POST["username"];
$stmt->execute();

//fetching a single row from database as associative array
$result = $stmt->fetch();
$inputPass = $_POST["password"];
$dbPass = $result["password"]; 

//using password_verify function to check if the password that user entered matches hashed password returned with query
if(password_verify($inputPass,$dbPass)){
	//setting session variables for later use and redirecting user to homepage
	$_SESSION["username"] = $username;
	$_SESSION["loggedIn"] = true;
    
	header("location:homepage.php");
}
else{
	echo "Wrong username or password!";
	echo "<br>";
	echo "<button><a href='forms.php?login=Login'>Try Again</a></button>";
}
?>

