
<?php require_once "partials/header.view.php"; ?>


<body class="vertical-center">

	<div class="container h-100">

		<div class="row justify-content-center">

			<h1>Welcome <?= $username ?></h1>

		</div>

		<div class="row justify-content-center">

			<!-- Logout form -->
			
			<form method="POST" action="/logout">

				<button class="btn btn-primary" type="submit">Sign Out</button>

			</form>

		</div>
		
	</div>

<?php require_once "partials/footer.view.php" ?>