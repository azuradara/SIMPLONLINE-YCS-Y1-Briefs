<?php
/** @var $this \app\core\View */

use app\core\Application;

// var_dump(Application::$app->user);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $this->title ?></title>
	<link rel="stylesheet" href="./css/tailwind.css">

	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,300;0,400;0,500;0,600;1,600&display=swap"
		rel="stylesheet">
</head>

<body class="bg-gray-100 antialiased select-none">

	<nav class="bg-white shadow-md mx-6 xl:mx-auto max-w-7xl rounded-md text-gray-600 my-3">

		<div class="max-w-7xl mx-auto px-8">
			<div class="flex items-center justify-between h-16">
				<div class="flex items-center">
					<a href="/" class="flex-shink-0 flex items-center gap gap-2">
						<img src="/img/logo.svg" alt="logo" class="h-8">
						<p class="text-2xl text-w font-logo font-semibold">honeyside</p>
					</a>
				</div>
				<div class="hidden md:block">
					<div class="ml-10 flex items-baseline space-x-4">
						<a href="/" class="nav__link px-3 py-2 rounded-md text-md font-medium hover:bg-gray-50">Home</a>
						<a href="/" class="nav__link px-3 py-2 rounded-md text-md font-medium hover:bg-gray-50">Browse</a>
						<a href="/" class="nav__link px-3 py-2 rounded-md text-md font-medium hover:bg-gray-50">Other</a>
					</div>
				</div>
				<div class="hidden md:block ml-10 items-baseline space-x-4">
					<a href="/login" class="nav__link px-3 py-2 rounded-md text-md font-medium hover:bg-gray-50">Login</a>
					<a href="/signup"
						class="px-3 py-2 rounded-md text-md font-medium bg-yellow-500 text-gray-50 hover:bg-yellow-600 duration-200">Sign
						Up</a>
				</div>
			</div>
		</div>

	</nav>

	<main>
		{{content}}
	</main>

</body>

</html>