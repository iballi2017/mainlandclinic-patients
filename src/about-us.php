<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php
$routes = array("Home", "Book appointment", "About us");
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>


<!-- About us -->
<section class="padding-block-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-12 md:gap-8 items-center">
            <div class="col-span-12 md:col-span-5">
                <div class="rounded-md bg-blue-300 overflow-hidden mb-3 fade-in">
                    <img src="./assets/images/featured-image-2.png" alt="Take control of your health" class="w-full">
                </div>
            </div>
            <div class="col-span-12 md:col-span-7">
                <div class="fade-in pl-5">
                    <h3 class="fs-section-headline mb-2 font-bold max-w-[500px]">Take Control of Your Health Today</h3>
                    <!-- <h3 class="fs-section-headline fw-bold">Take Control of Your Health Today</h3> -->
                    <p class="line-height-400">At Mainlandclinic, we are dedicated to providing the highest quality of medical care and wellness support to our patients. We believe that everyone deserves access to compassionate, personalized healthcare that meets their unique needs and goals.
                        Our team of experienced medical professionals includes physicians, nurses, and specialists who are committed to staying up-to-date with the latest advancements in medical technology and treatment options. We offer a wide range of healthcare services, including preventive care, chronic disease management, diagnostic testing, and treatment for acute illnesses and injuries.
                        In addition to medical services, we also offer a variety of wellness programs and resources to help our patients achieve optimal health and well-being. From nutrition counseling to stress management techniques, we are committed to helping our patients live their healthiest lives.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Reviews -->
<?php include_once(__DIR__ . "./components/reviews.php"); ?>



<div class="mx-auto max-w-4xl px-2 sm:px-6 lg:px-8 py-16">

    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="p-4 font-bold border-b text-2xl lg:text-4xl text-center">
            Get in touch today
        </div>
        <div class="p-4">
            <form action="">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <label for="full_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                        <input type="text" id="full_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="email" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="phone" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                        <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                    </div>
                    <div class="col-span-12">
                        <label for="subject" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                        <input type="text" id="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                    </div>
                    <div class="col-span-12">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                        <textarea id="message" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                </div>
                <div class="my-8"></div>
                <button data-custom-target="free-online-appointment-form-stepper" type="submit" class="step-control prev-btn text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>



<!-- book appointment banner -->
<?php include_once(__DIR__ . "./components/book-appointment-banner.php"); ?>


<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>