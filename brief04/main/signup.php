<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
	<link rel="stylesheet" href="./scss/style.css">
	<script src="./js/formValidator.js"></script>
</head>

<body>

	<main>

		<div class="form--container">
			<h1>Sign Up</h1>
			<form action="includes/signup-inc.php" method="post">
				<a href="./index.php"><img src="./img/main/owl--grad.png" alt="logo"></a>
				<input id="uid" type="text" name="uid" placeholder="Username">
				<input id="email" type="text" name="email" placeholder="E-mail">
				<input id="pwd" type="password" name="pwd" placeholder="Password">
				<input id="pwdrepeat" type="password" name="pwdrepeat" placeholder="Confirm Password">

				<?php
					if (isset($_GET["error"])) {
						if ($_GET["error"] == "usernametaken") {
							echo "<p style='color: red;'>This username already exists, please try a different one.</p>";
						} else if ($_GET["error"] == "none") {
							echo "<p style='color: #0072ff;'>You have been successfully signed up!</p>";
						} else {
							echo "<p style='color: red;'>Something went wrong, please try again</p>";
						}
					}
				?>
				
				<button class="btn" type="submit" name="submit">Sign Up</button>
				<a href="./login.php" class="smalltext">Already have an account? Log In</a>
			</form>
		</div>


	</main>


</body>

</html>