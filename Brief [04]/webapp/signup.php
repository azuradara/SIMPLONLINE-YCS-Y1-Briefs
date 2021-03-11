<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Overseer | Sign Up</title>
	<link rel="stylesheet" href="src/css/style.css">
	<script src="./src/js/formValidator.js"></script>
</head>
<body class="login--page">

	<h1>Sign Up</h1>

	<div class="container">
		<form action="includes/signup-inc.php" method="post">
			<label for="name">Full Name
				<input type="text" name="name" placeholder="Full Name">
				<p class="smalltext" style="display:none;">smalltext</p>
			</label>

			<label for="email">E-Mail
				<input type="text" name="email" placeholder="Email">
				<p class="smalltext" style="display:none;">smalltext</p>
			</label>

			<label for="username">Username
				<input type="text" name="uid" placeholder="Username">
				<p class="smalltext" style="display:none;">smalltext</p>
			</label>

			<label for="password">Password
				<input type="password" name="pwd" placeholder="Password">
				<p class="smalltext" style="display:none;">smalltext</p>
			</label>
			
			<label for="password">Repeat Password
				<input type="password" name="pwdrepeat" placeholder="Repeat Password">
				<p class="smalltext" style="display:none;">smalltext</p>
			</label>

			<button type="submit" name="submit">Sign Up</button>
		</form>
	</div>

	<?php
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "usernametaken") {
				echo "<p>This username already exists, please try a different one.</p>";
			} else if ($_GET["error"] == "none") {
				echo "<p>You have been successfully signed up!</p>";
			} else {
				echo "<p>Something went wrong, please try again</p>";
			}
		}
	?>
	
</body>
</html>