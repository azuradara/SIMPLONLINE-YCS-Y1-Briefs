<?php

/** @var $model \app\models\User */

/** @var $this \app\core\View */

use app\core\forms\Form;

$this->title = 'Login';
$this->scripts = ['js/navbar.js'];
?>

<main>
	<div class="flex max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 lg:max-w-4xl">
		<div class="hidden bg-cover lg:block lg:w-1/2" style="background-image:url('img/oj.jpg')">
		</div>

		<div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
			<img src="/img/logo.svg" alt="logo" class="h-8 mx-auto">

			<p class="text-xl text-center text-gray-600 dark:text-gray-200 font-medium">Welcome back!</p>

			<button type="button"
				class="gap-3 mt-4 shadow-md hover:bg-gray-200 flex justify-center items-center focus:ring-yellow-500 focus:ring-offset-yellow-200 text-gray-600 w-full transition ease-in duration-200 text-center text-base font-regular focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
				<div class="px-4 py-3">
					<svg class="w-6 h-6" viewBox="0 0 40 40">
						<path
							d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
							fill="#FFC107" />
						<path
							d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
							fill="#FF3D00" />
						<path
							d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
							fill="#4CAF50" />
						<path
							d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
							fill="#1976D2" />
					</svg>
				</div>

				<span class="w-5/6 px-4 py-3 -ml-12 text-center font-medium">Sign in with Google</span>
			</button>

			<div class="flex items-center justify-between mt-4">
				<span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>

				<p class="text-xs text-center text-gray-500 uppercase dark:text-gray-400">or</p>

				<span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>
			</div>

			<?php $form = Form::open('', 'post'); ?>

			<?php echo $form->input($model, 'usr_email'); ?>
			<?php echo $form->input($model, 'usr_pwd')->toPwd(); ?>

			<hr class="border-0 bg-gray-300 text-gray-500 h-px my-4">

			<div class="flex w-full">
				<button type="submit"
					class="py-2 px-4  bg-yellow-500 hover:bg-yellow-600 focus:ring-yellow-500 focus:ring-offset-purple-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
					Login
				</button>
			</div>

			<?php Form::close() ?>
			<span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
			<div class="flex items-center justify-center mt-6">
				<a href="/signup"
					class="inline-flex items-center text-xs font-medium text-center text-gray-500 hover:text-gray-700">
					Don't have an account?
				</a>
			</div>
		</div>
	</div>
	</div>
</main>