<!DOCTYPE html>
<html>
<head>
	<title>Authentification</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="app.css">
</head>

<body class="text-center vertical-center" style="display: flex;align-items: center;background-color: lightblue"> 
<!--form that assigns login or register values to $_GET depending on which input button is pressed by user  -->

<div class="col-md-4 offset-md-4 ">
  <form method="GET" action="forms.php">
  	<input type="submit" name="login" value="Login" class="btn btn-outline-info btn-block">
  	<input type="submit" name="register" value="Register" class="btn btn-outline-primary btn-block">
  </form>

</body>
</html>
