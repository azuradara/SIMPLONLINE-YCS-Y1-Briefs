<?php
/** @var $model \app\models\User */

/** @var $this \app\core\View */

use app\core\forms\Form;

$this->title = 'Login'
?>

<main class="grid place-items-center">
	<div class="flex flex-col bg-white max-w-xl mx-6 p-6 md:p-8 my-10 rounded-lg shadow-2xl">
		<h1 class="text-md font-semibold mb-3">Log in using</h1>
		<div class="flex gap-4 item-center">
			<button type="button"
				class="gap-3 py-2 px-4 flex justify-center items-center focus:ring-yellow-500 focus:ring-offset-yellow-200 text-gray-600 w-full transition ease-in duration-200 text-center text-base font-semibold focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
				<img class="w-5" src="img/facebook-icon.svg" alt="">
				Facebook
			</button>
			<button type="button"
				class="gap-3 py-2 px-4 flex justify-center items-center focus:ring-yellow-500 focus:ring-offset-yellow-200 text-gray-600 w-full transition ease-in duration-200 text-center text-base font-semibold focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
				<img class="w-5" src="img/google-icon.svg" alt="">
				Google
			</button>
		</div>
		<hr class="border-0 bg-gray-300 text-gray-500 h-px my-4">
		<div>
			<?php $form = Form::open('', 'post'); ?>

			<?php echo $form->input($model, 'usr_email'); ?>
			<?php echo $form->input($model, 'usr_pwd')->toPwd(); ?>

			<hr class="border-0 bg-gray-300 text-gray-500 h-px my-4">

			<div class="mb-3">
				<div class="my-2 relative inline-block w-10 mr-2 align-middle select-none">
					<input type="checkbox" name="toggle" id="Orange"
						class="checked:bg-yellow-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
					<label for="Orange" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
					</label>
				</div>
				<span class="text-gray-600 font-medium text-md">
					Stay signed in.
				</span>
				<span class="text-white">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</span>
			</div>

			<div class="flex w-full">
				<button type="submit"
					class="py-2 px-4  bg-yellow-500 hover:bg-yellow-600 focus:ring-yellow-500 focus:ring-offset-purple-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
					Login
				</button>
			</div>

			<?php Form::close() ?>

		</div>
		<div class="flex items-center justify-center mt-6">
			<a href="/signup" target="_blank"
				class="inline-flex items-center text-xs font-medium text-center text-gray-500 hover:text-gray-700">
				Don't have an account?
			</a>
		</div>
	</div>
</main>