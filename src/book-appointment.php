<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php $pageTitle = "Book appointment";
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <h2 class="text-3xl text-center font-bold">Select type of services</h2>

    <div class="grid grid-cols-12">
        <div class="col-span-6 sm:col-span-3">
            <div class="rounded-lg shadow-lg flex flex-col justify-between relative">
                <div class="overflow-hidden">
                    <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/47/761281/1.jpg?0471" alt="">
                </div>
                <h5 class="bg-black text-white p-4 absolute font-semibold z-2 right-4 left-4 bottom-0">Free - Book online appointment</h5>
                <div class="">
                    <div class="body p-6 b-4">
                        <p class="text-accent-730 font-semibold">Fee</p>
                        <p class="text-xl font-bold mb-2">N35,000</p>
                        <button type="button" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Choose</button>
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