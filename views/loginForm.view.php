<?php require_once "partials/header.view.php" ?>

<!-- Login form -->

<div class="col-md-4 offset-md-4 text-center vertical-center">

    <form method="POST" action="/login" class="mx-auto">

    	<legend>Login:</legend>
    	

    	<!-- Login error message -->

    	<?php if (isset($_SESSION["loginFailed"])): ?>
		
			<div class="alert alert-danger" role="alert">
	  			Wrong username or password!
			</div>

		<?php  endif; ?>


    	<div class="form-group">

		<input required type="text" name="username" placeholder="Username">

		</div>

		<div class="form-group">

		<input required type="password" name="password" placeholder="Password">

		</div>

		<input type="submit" name="login" value="Login">

	</form>
	
</div>

<?php require_once "partials/footer.view.php" ?>

