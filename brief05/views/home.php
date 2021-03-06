<?php

/** @var $this \app\core\View */
$this->title = 'Home';
$this->scripts = ['js/navbar.js', 'js/pops.js'];

?>

<div class="mx-6 xl:mx-auto max-w-6xl text-gray-700 flex flex-col justify-between px-4 lg:flex-row items-center">
    <div class="">
        <h2 class="text-center w-full lg:text-left my-2 text-7xl font-bold">Looking to settle<span
                    class="text-gradient honey-bgrad">?</span></h2>
        <h1 class="text-center w-full lg:text-left my-2 text-7xl font-bold text-yellow-500">Try Honeyside<span
                    class="text-gradient honey-bgrad">.</span>
        </h1>
        <p class="text-center w-full lg:text-left text-lg lg:max-w-md mt-6 font-medium text-gray-600">Lorem ipsum dolor
            sit
            amet
            consectetur adipisicing
            elit.
            Aspernatur
            vitae, saepe
            dicta
            illum itaque
            a quidem
            numquam nobis? Tenetur, quod.</p>
        <div>
            <a href="/reservations"
               class="relative book_btn my-4 py-2 px-4 md:w-36 mx-auto lg:mx-0 flex justify-center items-center bg-yellow-500 hover:bg-yellow-600 focus:ring-yellow-500 focus:ring-offset-yellow-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                Book Now
            </a>
        </div>
    </div>

    <div class="">
        <img src="img/honeyside.jpg" class="hidden lg:block hero__img" alt="">
    </div>
</div>

<style>
    .book_btn::after {
        content: '';
        background-image: url('/img/chev-right.svg');
        height: 24px;
        /* margin-left: 10px; */
        width: 0;
        /* display: none; */
        transition: all 250ms ease-out;
    }
</style>


<div class="sm:flex flex-wrap justify-center items-center text-center gap-8 max-w-7xl my-12 container">
    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-white mt-6  shadow-2xl rounded-lg dark:bg-gray-800">
        <div class="flex-shrink-0">
            <div class="flex items-center mx-auto justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
                <img src="img/service.svg" alt="">
            </div>
        </div>
        <h3 class="text-2xl sm:text-xl text-gray-700 font-semibold dark:text-white py-4">
            Room Service
        </h3>
        <p class="text-md  text-gray-500 dark:text-gray-300 py-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam inventore cumque aspernatur autem modi
            ullam.
        </p>
    </div>
    <div
            class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 mt-6 sm:mt-16 md:mt-20 lg:mt-24 bg-white shadow-2xl rounded-lg dark:bg-gray-800">
        <div class="flex-shrink-0">
            <div class="flex items-center mx-auto justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
                <img src="img/bed.svg" alt="">
            </div>
        </div>
        <h3 class="text-2xl sm:text-xl text-gray-700 font-semibold dark:text-white py-4">
            Utmost Comfort
        </h3>
        <p class="text-md text-gray-500 dark:text-gray-300 py-4">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae sunt reiciendis debitis delectus deleniti
            reprehenderit.
        </p>
    </div>
    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 mt-6  px-4 py-4 bg-white shadow-2xl rounded-lg dark:bg-gray-800">
        <div class="flex-shrink-0">
            <div class="flex items-center mx-auto justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
                <img src="img/pool.svg" alt="">
            </div>
        </div>
        <h3 class="text-2xl sm:text-xl text-gray-700 font-semibold dark:text-white py-4">
            Life of Luxury
        </h3>
        <p class="text-md  text-gray-500 dark:text-gray-300 py-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis porro ut et expedita harum iusto.
        </p>
    </div>
</div>

<div class="max-w-6xl px-6 py-16 mx-auto text-center">
    <h2 class="text-3xl font-semibold text-gray-800">Lorem ipsum dolor sit amet, <br> consectetur adipiscing</h2>
    <p class="max-w-prose mx-auto mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        deserunt mollit anim id est laborum.</p>

    <img class="object-cover object-center w-full mt-16 rounded-md shadow h-80" src="img/vidar.jpg">
</div>

<div class="max-w-6xl px-6 py-16 mx-auto space-y-8 md:flex md:items-center md:space-y-0">
    <div class="md:w-2/3">
        <div class="hidden md:flex md:items-center md:space-x-10">
            <img class="object-cover object-center rounded-md shadow w-72 h-72" src="img/2chair.jpg">
            <img class="object-cover object-center w-64 rounded-md shadow h-96" src="img/interior.jpg">
        </div>
        <h2 class="text-3xl font-semibold text-gray-800 md:mt-6">Lorem ipsum dolor </h2>
        <p class="max-w-lg mt-4 text-gray-600">
            Duis aute irure dolor in reprehenderit in voluptate velit esse illum
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia
            deserunt mollit anim id est laborum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
            non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.
        </p>
    </div>
    <div class="md:w-1/3">
        <img class="object-cover object-center w-full rounded-md shadow" style="height: 700px;" src="img/motel.jpg">
    </div>
</div>


<div class="">
    <div class="text-center w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20 text-gray-700">
        <h2 class="text-center w-full my-2 text-5xl font-bold">Looking to settle<span
                    class="text-gradient honey-bgrad">?</span></h2>
        <h1 class="text-center w-full my-2 text-5xl font-bold text-yellow-500">Try Honeyside<span
                    class="text-gradient honey-bgrad">.</span>
        </h1>
        <div class="lg:mt-0 lg:flex-shrink-0">
            <a href="/reservations"
               class="relative book_btn my-6 py-2 px-4 md:w-36 mx-auto flex justify-center items-center bg-yellow-500 hover:bg-yellow-600 focus:ring-yellow-500 focus:ring-offset-yellow-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-xl focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg">
                Get Started
            </a>
        </div>
    </div>
</div>