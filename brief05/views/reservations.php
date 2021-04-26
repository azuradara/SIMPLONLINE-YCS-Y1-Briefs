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

				<div>
					<p class="text-3xl font-medium text-gray-600">Pension</p>

					<div id="slc_res_type" class="flex flex-col md:flex-row md:items-center md:justify-between">
						<div id="pension_container" class="flex flex-row gap-5 justify-center md:justify-end mt-4 w-full">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="lg:w-4/12 bg-white rounded-lg shadow-2xl p-6">
		<p class="text-3xl font-medium mb-8 text-gray-600">Reservation Total</p>

	</div>
</div>