<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php
$routes = array("Home", "Support and Giving");
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>

<section>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 md:px-8 md:leading-7">
        <p>
            At Mainland Clinics, our commitment to providing quality healthcare extends beyond our clinic walls. We believe in giving back to the vibrant communities of Lagos, Nigeria, and making a meaningful impact in the lives of those in need. Your support enables us to continue our mission of delivering compassionate care and improving health outcomes for all.
        </p>
        <div class="my-4"></div>
        <p>Together, we can build a healthier and more resilient Lagos, where everyone has the opportunity to thrive. Join us in our journey to make a difference and support the vital work of Mainland Clinics today.</p>
    </div>
</section>

<div class="my-12"></div>
<section>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 md:px-8 md:leading-7">

        <h2 class="text-center font-bold text-xl md:text-2xl">
            Here's how you can make a difference:
        </h2>
        <p class="text-center text-accent-50 font-semibold">Do not hesitate</p>
        <div class="my-10"></div>
        <div class="grid grid-cols-12 sm:items-center gap-4 sm:gap-8">
            <div class="col-span-12 sm:col-span-6 sm:order-last">
                <div class="md:p-8">
                    <img src="./assets/images/featured-image-3b.png" alt="image: Elderly woman and nurse smiles" class="w-full">
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:p-8 sm:order-first">
                <h3 class="text-base sm:text-lg font-bold">Volunteer Your Time</h3>
                <h4 class="text-lg sm:text-2xl font-bold">Join us in our efforts to give back by volunteering your time and skills.</h4>
                <p>Whether you're a healthcare professional looking to lend a helping hand or a community member passionate about making a difference, there are many opportunities to get involved and make a positive impact.
                </p>

                <div class="my-4"></div>
                <button type="button" data-modal-target="volunteer-modal" data-modal-toggle="volunteer-modal" class="text-primary-500 border border-primary-500 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Become a Volunteer
                </button>



            </div>
        </div>
        <div class="my-12"></div>
    </div>

</section>

<section class="bg-alt-500 py-16">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 md:px-8 md:leading-7">

        <div class="grid grid-cols-12 sm:items-center gap-4 sm:gap-8">
            <div class="col-span-12 sm:col-span-6">
                <div class="md:p-8">
                    <img src="./assets/images/featured-image-4b.png" alt="image: Elderly woman and nurse smiles" class="w-full">
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:p-8">
                <h3 class="text-base sm:text-lg font-bold text-[#17A110]">Donate Today</h3>
                <h4 class="font-bold text-lg md:text-2xl">
                    Support the Mission
                </h4>
                <p>Your generous donations directly support our community outreach programs, providing essential healthcare services, screenings, and education to underserved populations in Lagos. Every contribution, no matter how small, helps us reach more individuals and families in need.</p>


                <div class="my-4"></div>
                <button type="button" data-modal-target="donation-modal" data-modal-toggle="donation-modal" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Donate Now
                </button>
            </div>
        </div>
    </div>
</section>




<!-- Volunteer modal -->
<div id="volunteer-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="relative p-4 md:p-5 rounded-t dark:border-gray-600">
                <div>
                    <h3 class="text-xl text-center font-bold text-gray-900 dark:text-white">
                        Never Hesitate to Reach Out
                    </h3>
                    <p class="text-center text-sm font-semibold text-primary-500">JOIN AS VOLUNTEER</p>
                </div>
                <button type="button" class="bg-alt-400 hover:bg-red-400 absolute right-2 top-2 text-white rounded text-sm w-4 h-4 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="volunteer-modal">
                    <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <?php include_once __DIR__ . "./components/volunteer-form.php"; ?>
            </div>
        </div>
    </div>
</div>


<!-- Donation modal -->
<div id="donation-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="relative p-4 md:p-5 rounded-t dark:border-gray-600">
                <div>
                    <h3 class="text-xl text-center font-bold text-gray-900 dark:text-white">
                        Donation
                    </h3>
                </div>
                <button type="button" class="bg-alt-400 hover:bg-red-400 absolute right-2 top-2 text-white rounded text-sm w-4 h-4 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="donation-modal">
                    <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <?php include_once __DIR__ . "./components/donation-form.php"; ?>
            </div>
        </div>
    </div>
</div>

<div class="my-8"></div>

<!-- book appointment banner -->
<?php include_once(__DIR__ . "./components/book-appointment-banner.php"); ?>

<div class="my-8"></div>

<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>