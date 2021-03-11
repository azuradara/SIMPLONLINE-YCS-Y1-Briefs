<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="src/css/style.css">
	<script src="./src/js/menu.js"></script>
</head>

<body>

<header class="hdr hdr--trans">
	<div class="logo-container">
		<img src="src/img/logo_white.png" alt="logo">
		<p>Overseer</p>
	</div>

	<div class="links">
		<ul>
			<li><a class="hdr-link--active" href="index.php">Home</a></li>
			<li><a href="./features.php">Features</a></li>
			<li><a href="./gallery.php">Gallery</a></li>
			<li><a href="./resources.php">Resources</a></li>
			<li><span></span></li>
			<li><a href="./login.php" class="auth-login">Log in</a> </li>
			<li><a href="./signup.php" class="auth-signup">Sign up</a></li>
		</ul>
	</div>
	<div class="auth-btns">
		<a href="./login.php" class="auth-login">Log in</a>
		<a href="./signup.php" class="auth-signup">Sign up</a>
	</div>

	<img class="menu-closed" src="./src/img/menu_white_24dp.svg" alt="Navigation Menu">
	<!-- <img class="menu-open" src="./src/img/menu_open_white_24dp.svg" alt="Navigation Menu"> -->

</header>

	<main>
		<div class="hero">
			<div class="hero--disp">
				<h1 class="hero--title">
					<span>Everything</span>
					</br>you need to manage your
					<span></br>educational institution.</span>
				</h1>
				<p class="hero--desc"><span>Overseer </span>is the modern student management software for running any
					type of educational institutions. We bundle tons of features for forward-thinking education
					institutions around the world.</p>
				<div class="hero--links">
					<a href="#" class="hero--signup">Sign Up</a>
					<a href="#" class="hero--demo">Not Ready? Request a demo.</a>
				</div>
			</div>

			<img src="src/img/hero.svg" alt="">
		</div>

		<div class="ring--container">
			<h2>No More Tool Confusion - Just One</br>Unified School Management Platform</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
				dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
				ex.</p>

				<div class="subcontainer">
					<div class="ring">
						<div class="dot dot--three">
							<img src="./src/img/featicons/1.png" alt="">
						</div>
						<div class="dot dot--three">
							<img src="./src/img/featicons/2.png" alt="">
						</div>
						<div class="dot dot--three">
							<img src="./src/img/featicons/3.png" alt="">
						</div>
						<div class="dot dot--three">
							<img src="./src/img/featicons/4.png" alt="">
						</div>
						<div class="dot dot--three">
							<img src="./src/img/featicons/5.png" alt="">
						</div>
					</div>
				</div>
		</div>

		<div class="testi">

			<h2 class="testi--header">Here’s what our customers </br> say about us.</h2>
			<p class="testi--content">“ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
				incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. “</p>
			<img src="src/img/map.svg" alt="">

		</div>
	</main>


	<div class="blank"></div>

	<?php
    include_once 'footer.php';
    ?>

</body>

</html>