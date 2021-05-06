<?php
$this->title = 'Make a reservation';
$this->scripts = ['js/helper.js', 'js/fetchPOST.js', 'js/rates.js', 'js/navbar.js', 'js/childFieldCtrl.js', 'js/renderGuestField.js', 'js/renderRoomField.js', 'js/Reservation.js', 'js/mess.js'];
?>

<div class="max-w-7xl mx-6 xl:mx-auto flex flex-col lg:flex-row justify-between gap-5 select-none">
	<div class="lg:w-8/12">
		<div id="forms" class="flex flex-col gap-6">

			<div class="res__form">

				<p class="text-3xl font-medium mb-8 text-gray-600">Reservation Type</p>

				<div id="slc_res_type" class="flex flex-col md:flex-row md:items-center md:justify-between">
					<div class="flex flex-row gap-5 justify-center md:justify-end w-full">
						<label
							class="ring-2 bg-white shadow-lg ring-gray-200 hover:bg-gray-200 cursor-pointer justify-between rounded-lg h-18 w-full p-1 px-3 flex flex-col items-center">
							<p class="text-sm font-semibold text-gray-400">W/ GUESTS</p>
							<input class="hidden" type="radio" name="res_guests" value='1'>
							<img class="h-10 w-10" src="img/res/guests.svg" alt="">
						</label>
						<label
							class="ring-2 bg-white shadow-lg ring-gray-200 hover:bg-gray-200 cursor-pointer justify-between rounded-lg h-18 w-full p-1 px-3 flex flex-col items-center">
							<p class="text-sm font-semibold text-gray-400">W/O GUESTS</p>
							<input class="hidden" type="radio" name="res_guests" value='0'>
							<img class="h-10 w-10" src="img/res/noguest.svg" alt="">
						</label>
					</div>
				</div>

				<div id="gst_ctrl" class="my-4 hidden">
					<div class="flex justify-between w-full my-8 items-center">
						<p class="text-3xl font-medium text-gray-600">Children</p>
						<div id="add_gst" class="flex items-center hover:bg-gray-300 py-2 px-3 rounded-lg cursor-pointer">
							<p class="font-bold text-gray-600">ADD</p>
							<img class="h-5 w-5" src="img/res/add-gray.svg" alt="">
						</div>
					</div>
					<div id="gst_container">

					</div>
				</div>

				<div>
					<div class="flex justify-between w-full my-8 items-center">
						<p class="text-3xl font-medium text-gray-600">Rooms</p>
						<div id="add_rm" class="flex items-center hover:bg-gray-300 py-2 px-3 rounded-lg cursor-pointer">
							<p class="font-bold text-gray-600">ADD</p>
							<img class="h-5 w-5" src="img/res/add-gray.svg" alt="">
						</div>
					</div>
					<div id="rm_container">
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="lg:w-4/12">
		<div id="cart__container" class="bg-white rounded-lg shadow-2xl p-6 w-full md:sticky md:top-6 z--10">
			<p class="text-3xl font-medium mb-8 text-gray-600">Reservation Total</p>

			<div id="cart_total">

			</div>

			<div>
				<button type="button" onclick="res?.check()"
					class="relative my-4 py-2 px-4 mx-auto lg:mx-0 flex justify-center items-center bg-white ring-2 ring-gray-200 hover:bg-yellow-600 focus:ring-yellow-500 focus:ring-offset-yellow-200 hover:text-white text-gray-700 w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-md ">
					CHECK AVAILABILITY
				</button>
			</div>
		</div>
	</div>
</div>