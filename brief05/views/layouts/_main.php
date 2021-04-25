<?php
/** @var $this \app\core\View */

use app\core\Application;

// var_dump(Application::$app->user);
?>

<!DOCTYPE html>
<html lang="en" class="">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $this->title ?></title>
	<?php foreach($this->scripts as $js) {
		echo "<script src='$js' defer></script>";
	} ?>
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

<body class="bg-gray-200 antialiased select-none relative duration-100">

	<?php if(Application::$app->session->getPop('success')): ?>
	<div
		class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 top-28 inset-middle"
		id="pop">
		<div class="flex items-center justify-center w-12 bg-green-500">
			<svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
			</svg>
		</div>

		<div class="px-4 py-2 -mx-3">
			<div class="mx-3">
				<span class="font-semibold text-green-500 dark:text-green-400">Success</span>
				<p class="text-sm text-gray-600 dark:text-gray-200"><?php echo Application::$app->session->getPop('success'); ?>
				</p>
			</div>
		</div>
	</div>

	<?php endif; ?>
	<nav class="bg-white shadow-lg mb-20 max-w-7xl mx-6 xl:mx-auto mt-6 rounded-xl">
		<div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
			<div class="relative flex items-center justify-between h-16">
				<div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
					<!-- Mobile menu button-->
					<button type="button"
						class="inline-flex items-center justify-center p-1 rounded-md text-gray-600 hover:text-gray-200 hover:bg-yellow-500 focus:outline-none focus:ring-1 focus:ring-inset focus:ring-white"
						aria-controls="mobile-menu" aria-expanded="false">
						<span class="sr-only">Open main menu</span>
						<!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
						<svg class="block h-8 w-8" id="mn_btn_closed" xmlns="http://www.w3.org/2000/svg" fill="none"
							viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
						</svg>
						<!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
						<svg class="hidden h-8 w-8" id="mn_btn_open" xmlns="http://www.w3.org/2000/svg" fill="none"
							viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</button>
				</div>
				<div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
					<a href="/" class="flex-shrink-0 flex items-center gap-2">
						<img src="/img/logo.svg" alt="logo" class="h-12 md:h-8">
						<p class="hidden md:inline-block text-2xl text-w font-logo font-semibold text-gray-700">honeyside</p>
					</a>
					<div class="hidden sm:block sm:ml-6">
						<div class="flex space-x-4">
							<a href="/" class="nav__link px-3 py-2 rounded-md text-md font-medium hover:bg-gray-50">Home</a>
							<a href="/reservations"
								class="nav__link px-3 py-2 rounded-md text-md font-medium hover:bg-gray-50">Reservations</a>
							<a href="/" class="nav__link px-3 py-2 rounded-md text-md font-medium hover:bg-gray-50">Other</a>
						</div>
					</div>
				</div>
				<div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

					<!-- Profile dropdown -->
					<?php if (!Application::guestUser()): ?>
					<div class="ml-3 relative">
						<div>
							<button type="button"
								class="flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-yellow-500 focus:ring-white"
								id="usr_menu_btn" aria-expanded="false" aria-haspopup="true">
								<span class="sr-only">Open user menu</span>
								<img class="h-8 w-8 rounded-full" src="img/profile.svg" alt="">
							</button>
						</div>

						<!--
							Dropdown menu, show/hide based on menu state.
							
							Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
							Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
						-->
						<div
							class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-gray-100 ring-1 ring-black ring-opacity-10 focus:outline-none"
							role="menu" id="usr_menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
							<!-- Active: "bg-gray-100", Not Active: "" -->
							<a href="/profile" class="hover:bg-gray-200 block px-4 py-2 text-sm text-gray-700" role="menuitem"
								tabindex="-1" id="user-menu-item-1">Profile</a>
							<a href="/logout" class="hover:bg-gray-200 block px-4 py-2 text-sm text-gray-700" role="menuitem"
								tabindex="-1" id="user-menu-item-2">Sign out</a>
						</div>
					</div>
					<?php endif; ?>

					<?php if (Application::guestUser()): ?>
					<div class="hidden gap-3 flex-1 sm:flex items-center justify-center sm:items-stretch sm:justify-start">
						<a href="/login" class="nav__link px-3 py-2 rounded-md text-md font-medium hover:bg-gray-50">Login</a>
						<a href="/signup"
							class="px-3 py-2 rounded-md text-md font-medium bg-yellow-500 text-gray-50 hover:bg-yellow-600 duration-200">Sign
							Up</a>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<!-- Mobile menu, show/hide based on menu state. -->
		<div class="sm:hidden hidden" id="mobile_menu">
			<div class="px-2 pt-2 pb-3 space-y-1">
				<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
				<a href="/"
					class="text-gray-600 hover:bg-yellow-500 hover:text-gray-200 block px-3 py-2 rounded-md text-base font-medium"
					aria-current="page">Home</a>

				<a href="/reservations"
					class="text-gray-600 hover:bg-yellow-500 hover:text-gray-200 block px-3 py-2 rounded-md text-base font-medium">Reservations</a>

				<a href="/"
					class="text-gray-600 hover:bg-yellow-500 hover:text-gray-200 block px-3 py-2 rounded-md text-base font-medium">Other</a>
				<?php if (Application::guestUser()): ?>
				<hr class="border-0 bg-gray-300 text-gray-500 h-px my-4">
				<a href="/login"
					class="text-gray-600 hover:bg-yellow-500 hover:text-gray-200 block px-3 py-2 rounded-md text-base font-medium">Login</a>
				<hr class="border-0 bg-gray-300 text-gray-500 h-px my-4">

				<p class="text-center font-regular text-sm text-gray-600">Here to book a place? Join us now!</p>

				<a href="/signup"
					class="px-3 py-2 rounded-md block text-md text-center font-medium bg-yellow-500 text-gray-50 hover:bg-yellow-600 duration-200">Sign
					Up</a>
				<?php endif; ?>
			</div>
		</div>
	</nav>

	<main>
		{{content}}
	</main>

	<footer class="text-gray-600 body-font bg-white mt-24 justify-self-end">
		<div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
			<a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
				<img src="/img/logo-grayscale.svg" class="h-10 w-10" alt="">
				<span class="ml-3 text-xl text-gray-400 font-logo">honeyside</span>
			</a>
			<p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020
				HONEYSIDE
			</p>
			<span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start gap-5">
				<a href="https://twitter.com/azuradara"
					class="text-gray-400 hover:text-gray-800 dark:hover:text-white transition-colors duration-200">
					<svg width="20" height="20" fill="currentColor"
						class="text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200"
						viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z">
						</path>
					</svg>
				</a>
				<a href="https://github.com/azuradara"
					class="text-gray-400 hover:text-gray-800 dark:hover:text-white transition-colors duration-200">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
						class="text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200"
						viewBox="0 0 1792 1792">
						<path
							d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
						</path>
					</svg>
				</a>
				<a href="https://www.linkedin.com/in/aymane-hlamnach-077319203/"
					class="text-gray-400 hover:text-gray-800 dark:hover:text-white transition-colors duration-200">
					<svg width="20" height="20" fill="currentColor"
						class="text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200"
						viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z">
						</path>
					</svg>
				</a>
			</span>
		</div>
	</footer>


</body>

</html>