<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log In</title>
	<link rel="stylesheet" href="./scss/style.css">
	<script src="./js/formValidator.js"></script>
</head>

<body>

	<main>

		<div class="form--container">
			<h1>Log In</h1>
			<form action="includes/login-inc.php" method="post">
				<a href="./index.php"><img src="./img/main/owl--grad.png" alt="logo"></a>
				<input id="uid" type="text" name="uid" placeholder="Username or Email">
				<p class="fsmalltext" style="display:none;">smalltext</p>
				<input id="lpwd" type="password" name="pwd" placeholder="Password">
				<p class="fsmalltext" style="display:none;">smalltext</p>

				<?php
					if (isset($_GET["error"])) {
						if ($_GET["error"] == "emptyinput") {
							echo "<p style='color: red;'>Please fill in the required fields.</p>";
						} else if ($_GET["error"] == "invalidcreds") {
							echo "<p style='color: red;'>Invalid credentials!</p>";
						} else if ($_GET["error"] == "noperm"){
							echo "<p style='color:red;text-align:center;'>You don't have the required permissions to access this page, please log in first.</p>";
						} else {
							echo "<p style='color: red;'>Gah Da</p>";
						}
					}
				?>

				<button class="btn" type="submit" name="submit">Log In</button>
				<a href="./signup.php" class="smalltext">Don't have an account? Sign Up</a>
			</form>
		</div>

	</main>


</body>

</html>