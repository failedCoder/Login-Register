<?php require_once "partials/header.view.php" ?>

<!-- Register Form -->


<div class="col-md-4 offset-md-4 text-center vertical-center">

	<form method="POST" action="/register" class="mx-auto">

		<legend>Register:</legend>


		<!-- Register error message -->

		<?php if (isset($_SESSION["registrationFailed"])): ?>
		
			<div class="alert alert-danger" role="alert">
	  			Username taken!
			</div>

		<?php  endif; ?>
		

	    <div class="form-group">

			<input required type="text" name="username" placeholder="Username">

		</div>

		<div class="form-group">

			<input required type="password" name="password" placeholder="Password">

		</div>

		<input type="submit" name="register" value="Register">

	</form>	

 </div>

 <?php require_once "partials/footer.view.php" ?>

