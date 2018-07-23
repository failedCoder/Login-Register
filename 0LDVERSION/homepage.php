<?php
session_start();
//checking if user is logged in and displaying username
if(isset($_SESSION["loggedIn"])){
	echo "<h1>WELCOME " .$_SESSION["username"]. "</h1>";
}else{
header("location:forms.php?login=Login");
}
?>

<br>
<!--logout button that leads to  logout scrip -->
<form method="GET" action="logout.php">
	<input type="submit" value="Logout">
</form>

