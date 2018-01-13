<?php
//getting database connection
require_once "dbConnection.php";
$conn = dbConn::getConn();

//insert query to add(register) user to database using PDO prepared statements to prevent sql injection
$stmt = $conn->prepare("INSERT INTO users (username,password) VALUES (:user,:pass) ");
$stmt->bindParam(':user', $username,PDO::PARAM_STR);
$stmt->bindParam(':pass', $password,PDO::PARAM_STR);

//using htmlspecialchars on username to protect against xss
$username = htmlspecialchars($_POST["username"]);
//password is hashed for extra secutry in case of database attack
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);  

//username column is set to unique in my database,so the errror will occur if you want to register 2 users with same username
if($stmt->execute()){
	echo "Registration Complete!";
}else{
	echo "Username taken!";
}

?>