<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php $routes = ["Home", "Book appointment"];
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-8"></div>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <h2 class="text-xl sm:text-3xl text-center font-bold mb-4">Select type of services</h2>

    <div class="grid grid-cols-12 gap-2 sm:gap-4">
        <div class="col-span-6 sm:col-span-3">
            <div class="rounded-lg shadow-md flex flex-col justify-between relative p-2 sm:p-4 h-full">
                <div class="overflow-hidden relative">
                    <img src="./assets/images/feature-card-image-1.png" alt="">
                    <h5 style="background-color: rgba(0, 0, 0, .5);" class="text-sm sm:text-base text-white px-4 py-2.5 absolute font-semibold z-2 right-2 sm:right-8  left-2 sm:left-8 bottom-8 rounded text-center">Free - Book online appointment</h5>
                </div>
                <div class="">
                    <div class="body py-2">
                        <p class="text-accent-730 font-semibold">Fee</p>
                        <p class="text-xl font-bold mb-2">No Fee</p>
                        <a href="book-appointment-free-online.php" class="block text-sm sm:text-lg font-medium text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-blue-300 rounded sm:rounded-lg w-full px-5 sm:px-8 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Choose</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <div class="rounded-lg shadow-md flex flex-col justify-between relative p-2 sm:p-4 h-full">
                <div class="overflow-hidden relative">
                    <img src="./assets/images/feature-card-image-5.png" alt="">
                    <h5 style="background-color: rgba(0, 0, 0, .5);" class="text-sm sm:text-base text-white px-4 py-2.5 absolute font-semibold z-2 right-2 sm:right-8  left-2 sm:left-8 bottom-8 rounded text-center">Paid Home Service</h5>
                </div>
                <div class="">
                    <div class="body py-2">
                        <p class="text-accent-730 font-semibold">Fee</p>
                        <p class="text-xl font-bold mb-2">N25,000</p>
                        <a href="./book-appointment-paid-home-service.php" class="block text-sm sm:text-lg font-medium text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-blue-300 rounded sm:rounded-lg w-full px-5 sm:px-8 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Choose</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <div class="rounded-lg shadow-md flex flex-col justify-between relative p-2 sm:p-4 h-full">
                <div class="overflow-hidden relative">
                    <img src="./assets/images/feature-card-image-5.png" alt="">
                    <h5 style="background-color: rgba(0, 0, 0, .5);" class="text-sm sm:text-base text-white px-4 py-2.5 absolute font-semibold z-2 right-2 sm:right-8  left-2 sm:left-8 bottom-8 rounded text-center">Telemedicine</h5>
                </div>
                <div class="">
                    <div class="body py-2">
                        <p class="text-accent-730 font-semibold">Fee</p>
                        <p class="text-xl font-bold mb-2">N25,000</p>
                        <a href="book-appointment-telemedicine.php" class="block text-sm sm:text-lg font-medium text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-blue-300 rounded sm:rounded-lg w-full px-5 sm:px-8 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Choose</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <div class="rounded-lg shadow-md flex flex-col justify-between relative p-2 sm:p-4 h-full">
                <div class="overflow-hidden relative">
                    <img src="./assets/images/feature-card-image-3.png" alt="">
                    <h5 style="background-color: rgba(0, 0, 0, .5);" class="text-sm sm:text-base text-white px-4 py-2.5 absolute font-semibold z-2 right-2 sm:right-8  left-2 sm:left-8 bottom-8 rounded text-center">Employment and other related testing</h5>
                </div>
                <div class="">
                    <div class="body py-2">
                        <p class="text-accent-730 font-semibold">Fee</p>
                        <p class="text-xl font-bold mb-2">No Fee</p>
                        <a href="book-appointment-for-employment-and-other-related-testing.php" class="block text-sm sm:text-lg font-medium text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-blue-300 rounded sm:rounded-lg w-full px-5 sm:px-8 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Choose</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <div class="rounded-lg shadow-md flex flex-col justify-between relative p-2 sm:p-4 h-full">
                <div class="overflow-hidden relative">
                    <img src="./assets/images/feature-card-image-4.png" alt="">
                <h5 style="background-color: rgba(0, 0, 0, .5);" class="text-sm sm:text-base text-white px-4 py-2.5 absolute font-semibold z-2 right-2 sm:right-8  left-2 sm:left-8 bottom-8 rounded text-center">Home Care (Live in) Nursing</h5>
                </div>
                <div class="">
                    <div class="body py-2">
                        <p class="text-accent-730 font-semibold">Fee</p>
                        <p class="text-xl font-bold mb-2">N40,000</p>
                        <a href="book-appointment-home-care-live-in-nursing.php" class="block text-sm sm:text-lg font-medium text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-blue-300 rounded sm:rounded-lg w-full px-5 sm:px-8 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Choose</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <div class="rounded-lg shadow-md flex flex-col justify-between relative p-2 sm:p-4 h-full">
                <div class="overflow-hidden relative">
                    <img src="./assets/images/feature-card-image-2.png" alt="">
                <h5 style="background-color: rgba(0, 0, 0, .5);" class="text-sm sm:text-base text-white px-4 py-2.5 absolute font-semibold z-2 right-2 sm:right-8  left-2 sm:left-8 bottom-8 rounded text-center">Ambulance services</h5>
                </div>
                <div class="">
                    <div class="body py-2">
                        <p class="text-accent-730 font-semibold">Fee</p>
                        <p class="text-xl font-bold mb-2">N50,000</p>
                        <a class="block text-sm sm:text-lg font-medium text-white bg-gray-300 focus:ring-1 focus:outline-none focus:ring-blue-300 rounded sm:rounded-lg w-full px-5 sm:px-8 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Coming soon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>