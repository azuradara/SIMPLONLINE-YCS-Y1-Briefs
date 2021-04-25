<?php
$this->title = 'Make a reservation';
$this->scripts = ['js/helper.js', 'js/fetchPOST.js', 'js/rates.js', 'js/navbar.js', 'js/childFieldCtrl.js', 'js/renderGuestField.js', 'js/reservation.js'];
?>

<div class="max-w-7xl mx-6 xl:mx-auto flex flex-col lg:flex-row justify-between gap-5 select-none">
    <div class="lg:w-8/12">
        <div id="forms" class="flex flex-col gap-6">

            <div class="res__form">

                <p class="text-3xl font-medium mb-8 text-gray-600">Reservation Type</p>

                <div id="slc_res_type" class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="flex flex-row gap-5 justify-center md:justify-end">
                        <label
                                class="ring-2 bg-white shadow-lg ring-gray-200 hover:bg-gray-200 cursor-pointer justify-between rounded-lg h-18 w-28 p-1 px-3 flex flex-col items-center">
                            <p class="text-sm font-semibold text-gray-400">W/ GUESTS</p>
                            <input class="hidden" type="radio" name="res_guests" value='1'>
                            <img class="h-10 w-10" src="img/res/guests.svg" alt="">
                        </label>
                        <label
                                class="ring-2 bg-white shadow-lg ring-gray-200 hover:bg-gray-200 cursor-pointer justify-between rounded-lg h-18 w-28 p-1 px-3 flex flex-col items-center">
                            <p class="text-sm font-semibold text-gray-400">W/O GUESTS</p>
                            <input class="hidden" type="radio" name="res_guests" value='0'>
                            <img class="h-10 w-10" src="img/res/noguest.svg" alt="">
                        </label>
                    </div>
                </div>

                <div id="gst_ctrl" class="my-4 hidden">
                    <p class="text-3xl font-medium my-8 text-gray-600">Children</p>
                    <div id="gst_container">

                    </div>

                    <div id="add_gst"
                         class="hover:bg-yellow-600 duration-200 w-full bg-yellow-500 rounded-md gap-3 cursor-pointer text-white font-medium justify-center py-2 shadow-lg flex items-center">
                        <img src="img/res/add.svg" alt="">
                        <p>ADD A CHILD</p>
                    </div>
                </div>

                <div id="rm_container">
                    <p class="text-3xl font-medium my-8 text-gray-600">Rooms</p>

                    <div class="room_field bg-white w-full shadow-lg rounded-xl p-3 flex flex-col items-center gap-7">

                        <div class="w-full flex flex-col gap-3">
                            <p class="text-sm font-bold text-gray-600 w-full">ROOM TYPE</p>
                            <div class="child_opts flex w-full items-center justify-between rounded-lg gap-5">
                                <label
                                        class="opt_1 w-full ring-2 ring-gray-200 hover:bg-gray-200 cursor-pointer justify-center rounded-md p-1 px-3 flex flex-col items-center">
                                    <p class="text-sm font-semibold text-gray-400">SIMPLE ROOM</p>
                                    <img class="h-6 w-6" src="img/res/single-gray.svg" alt="">
                                    <input class="hidden" type="radio" name="rm_1_type" value='simple'>
                                    <p class="text-sm text-center w-full font-bold text-gray-500">{pricemod}<span
                                                class="text-xs text-gray-400 font-medium"> {price unit}
										</span></p>
                                </label>

                                <label
                                        class="opt_2 w-full ring-2 ring-gray-200 hover:bg-gray-200 cursor-pointer justify-center rounded-md p-1 px-3 flex flex-col items-center">
                                    <p class="text-sm font-semibold text-gray-400">DOUBLE ROOM</p>
                                    <img class="h-6 w-6" src="img/res/double-gray.svg" alt="">
                                    <input class="hidden" type="radio" name="rm_1_type" value='double'>
                                    <p class="text-sm text-center w-full font-bold text-gray-500">{pricemod}<span
                                                class="text-xs text-gray-400 font-medium"> {price unit}
										</span></p>
                                </label>
                            </div>
                        </div>

                        <div class="w-full flex flex-col gap-3">
                            <p class="text-sm font-bold text-gray-600 w-full">BED UPGRADE</p>
                            <div class="child_opts flex w-full items-center justify-between rounded-lg gap-3">
                                <label
                                        class="opt_1 w-full ring-2 ring-gray-200 hover:bg-gray-200 cursor-pointer justify-center rounded-md p-1 px-3 flex flex-col items-center">
                                    <p class="text-sm font-semibold text-gray-400">2 SIMPLE BEDS</p>
                                    <input class="hidden" type="radio" name="rm_1_upgrade" value='0'>
                                    <p class="text-sm text-center w-full font-bold text-gray-500">{pricemod}<span
                                                class="text-xs text-gray-400 font-medium"> {price unit}
										</span></p>
                                </label>

                                <label
                                        class="opt_2 w-full ring-2 ring-gray-200 hover:bg-gray-200 cursor-pointer justify-center rounded-md p-1 px-3 flex flex-col items-center">
                                    <p class="text-sm font-semibold text-gray-400">1 KING-SIZED BED</p>
                                    <input class="hidden" type="radio" name="rm_1_upgrade" value='1'>
                                    <p class="text-sm text-center w-full font-bold text-gray-500">{pricemod}<span
                                                class="text-xs text-gray-400 font-medium"> {price unit}
										</span></p>
                                </label>
                            </div>
                        </div>

                        <div class="w-full flex flex-col gap-3">
                            <p class="text-sm font-bold text-gray-600 w-full">VIEW</p>
                            <div class="child_opts flex w-full items-center justify-between gap-3">
                                <label
                                        class="opt_1 w-full ring-2 ring-gray-200 hover:bg-gray-200 cursor-pointer justify-center rounded-md p-1 px-3 flex flex-col items-center">
                                    <p class="text-sm font-semibold text-gray-400">NO VIEW</p>
                                    <input class="hidden" type="radio" name="rm_1_type" value='simple'>
                                    <p class="text-sm text-center w-full font-bold text-gray-500">{pricemod}<span
                                                class="text-xs text-gray-400 font-medium"> {price unit}
										</span></p>
                                </label>

                                <label
                                        class="opt_2 w-full ring-2 ring-gray-200 hover:bg-gray-200 cursor-pointer justify-center rounded-md p-1 px-3 flex flex-col items-center">
                                    <p class="text-sm font-semibold text-gray-400">EXTERIOR VIEW</p>
                                    <input class="hidden" type="radio" name="rm_1_type" value='double'>
                                    <p class="text-sm text-center w-full font-bold text-gray-500">{pricemod}<span
                                                class="text-xs text-gray-400 font-medium"> {price unit}
										</span></p>
                                </label>
                            </div>
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