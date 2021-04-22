<?php 
$this->title = 'Make a reservation';
$this->scripts = ['js/navbar.js', 'js/reservation.js'];
?>

<div class="max-w-7xl mx-6 xl:mx-auto flex flex-col lg:flex-row justify-between gap-5 select-none">
	<div class="lg:w-8/12">
		<div id="forms" class="flex flex-col gap-6">

			<div class="res__form bg-white rounded-lg shadow-2xl p-6 ring-yellow-500 ring-1">
				<div class="bg-yellow-500 w-full rounded-b-xl text-white font-medium text-center py-1 -mt-6">GUEST GROUP #1
				</div>
				<p class="my-3 mt-12 font-regular text-xl font-regular text-gray-600">Room type</p>
				<div id="slc_rm_type" class="font-regular text-lg flex gap-5 items-center mx-auto w-max">

					<label
						class="ring-2 shadow-lg ring-gray-200 hover:bg-gray-100 cursor-pointer justify-between rounded-lg h-28 w-28 p-1 px-3 flex flex-col items-center"
						for="rm_sngl">
						<p class="text-sm font-semibold text-gray-400">SINGLE</p>
						<input class="hidden" type="radio" id="rm_sngl" name="rm_type" value="single">
						<img class="h-10 w-10" src="img/res/single-gray.svg" alt="">
						<p class="text-sm text-center w-full font-bold text-gray-500">$15<span
								class="text-xs text-gray-400 font-medium"> / day
							</span></p>
					</label>

					<label
						class="ring-2 shadow-lg ring-gray-200 hover:bg-gray-100 cursor-pointer justify-between rounded-lg h-28 w-28 p-1 px-3 flex flex-col items-center"
						for="rm_dbl">
						<p class="text-sm font-semibold text-gray-400">DOUBLE</p>
						<input class="hidden" type="radio" id="rm_dbl" name="rm_type" value="double">
						<img class="h-10 w-10" src="img/res/double-gray.svg" alt="">
						<p class="text-sm text-center w-full font-bold text-gray-500">$45<span
								class="text-xs text-gray-400 font-medium"> / day
							</span></p>
					</label>
				</div>
			</div>

		</div>

		<div
			class="hover:bg-yellow-600 duration-200 w-full bg-yellow-500 rounded-xl gap-3 cursor-pointer text-white font-medium my-12 justify-center py-2 shadow-lg flex items-center">
			<img src="img/res/add.svg" alt="">
			<p>ADD A GUEST GROUP</p>
		</div>
	</div>
	<div class="lg:w-4/12 bg-white rounded-lg shadow-2xl p-6">
	</div>
</div>