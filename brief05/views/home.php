<?php
/** @var $this \app\core\View */
$this->title = 'Home';
use app\core\forms\Form;
?>

<div class="m-6 mx-6 xl:mx-auto max-w-5xl text-gray-700 flex flex-col justify-between px-4 lg:flex-row items-center">
	<div class="">
		<h2 class="my-2 text-6xl font-bold">Looking to settle<span class="text-gradient honey-bgrad">?</span></h2>
		<h1 class="my-2 text-6xl font-bold text-yellow-500">Try Honeyside<span class="text-gradient honey-bgrad">.</span>
		</h1>
		<p class="text-lg max-w-md mt-6 font-medium text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing
			elit.
			Aspernatur
			vitae, saepe
			dicta
			illum itaque
			a quidem
			numquam nobis? Tenetur, quod.</p>
		<div>
			<button type="button"
				class="relative book_btn my-4 py-2 px-4 lg:w-36 flex justify-center items-center  bg-yellow-500 hover:bg-yellow-600 focus:ring-red-500 focus:ring-offset-red-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
				Book Now
			</button>
		</div>
	</div>

	<div class="">
		<img src="img/honeyside.jpg" class="hero__img" alt="">
	</div>


</div>

<style>
.book_btn::after {
	content: '';
	background-image: url('img/chev-right.svg');
	height: 24px;
	/* margin-left: 10px; */
	width: 0;
	/* display: none; */
	transition: all 250ms ease-out;
}

.book_btn:hover::after {
	width: 24px;
	margin-right: -10px;
	/* display: inline; */
}
</style>