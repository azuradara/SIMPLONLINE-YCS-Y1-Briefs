<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Overseer | Log In</title>
	<link rel="stylesheet" href="src/css/style.css">
	<script src="./src/js/formValidator.js"></script>
</head>
<body class="login--page">

	<h1>Log In</h1>

	<div class="container">
		<form action="includes/login-inc.php" method="post">

			<label for="username">Username or Email
				<input type="text" name="uid" placeholder="Username or Email">
				<p class="smalltext" style="display:none;">smalltext</p>
			</label>

			<label for="password"">Password
				<input type="password" name="pwd" placeholder="Password">
				<p class="smalltext" style="display:none;">smalltext</p>
			</label>

			<button type="submit" name="submit">Log In</button>

		</form>
	</div>
	
</body>
</html>