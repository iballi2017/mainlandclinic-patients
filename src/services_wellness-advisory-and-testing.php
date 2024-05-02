<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php
$routes = array("Home", "Wellness Advisory and Testing");
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>

<section>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 md:px-8 md:leading-7">
        <p>
            Welcome to Mainland Clinics, where your health and well-being are our top priorities. As part of our commitment to serving the community in Lagos, Nigeria, we are pleased to offer Free Clinic Testing on Fridays.
            <br />
            Also looking for convenient and reliable healthcare services in the central areas of Lagos? Mainland Clinics has you covered with our Paid Home Service
        </p>
        <div class="my-4"></div>
        <p>At Mainland Clinics, we believe that proactive healthcare should be accessible to all. Take advantage of our Free Clinic Testing service and take proactive steps towards a healthier tomorrow, also experience the convenience and personalized care of Mainland Clinics' Paid Home Service. Contact us today to schedule your appointment and let us bring quality healthcare to you.</p>
    </div>
</section>

<div class="my-12"></div>
<section>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 md:px-8 md:leading-7">

        <h2 class="text-center font-bold text-xl md:text-2xl">The two sub categories for wellness advisory and Testing</h2>
        <p class="text-center text-accent-50 font-semibold">Learn more about us</p>
        <div class="my-10"></div>
        <div class="grid grid-cols-12 sm:items-center gap-4 sm:gap-8">
            <div class="col-span-12 sm:col-span-6 sm:order-last">
                <div class="md:p-8">
                    <img src="./assets/images/featured-image-3.png" alt="image: Elderly woman and nurse smiles" class="w-full">
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:p-8 sm:order-first">
                <h3 class="text-base sm:text-lg font-bold text-[#17A110]">Free Clinic Testing</h3>
                <p class="font-bold text-lg md:text-2xl">Essential screenings and consultations, no financial barriers. Here's what you need to know:</p>

                <div class="my-8"></div>

                <ul class="flex flex-col gap-12">
                    <li class="flex flex-col sm:flex-row items-stretch gap-4">
                        <div class="min-w-[100px] flex items-center justify-center">
                            <i class="text-alt-400 fas fa-wifi fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold">Book Online Appointment:</h4>
                            <p class="text-sm leading-6">For efficient service and safety, please book your Free Clinic Testing appointment online in advance. Visit our website to select your preferred time slot.</p>
                        </div>

                    </li>
                    <li class="flex flex-col sm:flex-row items-stretch gap-4">
                        <div class="min-w-[100px] flex items-center justify-center">
                            <i class="text-alt-400 fas fa-star-of-life fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold">Fridays Only at Clinic:</h4>
                            <p class="text-sm leading-6">Join us exclusively on Fridays at our clinic for Free Clinic Testing sessions. Whether it's routine check-ups or specific screenings, our dedicated team is here to assist you.</p>
                        </div>
                    </li>
                </ul>

                <div class="my-4 sm:my-16"></div>
                <a href="book-appointment-free-online.php" class="step-control prev-btn text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Book appointment
                </a>
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
                    <img src="./assets/images/featured-image-4.png" alt="image: Elderly woman and nurse smiles" class="w-full">
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:p-8">
                <h3 class="text-base sm:text-lg font-bold text-[#17A110]">Paid Home service</h3>
                <p class="font-bold text-lg md:text-2xl">Mainland Clinics: Your Central Lagos Healthcare Solution. Quality care at home with our Paid Home Service.</p>

                <div class="my-8"></div>

                <ul class="flex flex-col gap-12">
                    <li class="flex flex-col sm:flex-row items-stretch sm:gap-4 bg-white rounded-lg shadow-sm">
                        <div class="min-w-[100px] flex items-center justify-center p-4">
                            <i class="text-alt-600 fas fa-shuttle-van fa-2x"></i>
                        </div>
                        <div class="p-4 sm:p-0 sm:py-4 sm:pr-4">
                            <h4 class="text-lg font-semibold">Leverage of VanLagos:</h4>
                            <p class="text-sm leading-6">Partnered with VanLagos, a trusted transportation service, we ensure prompt and secure transport of medical professionals to your home for efficient service delivery.</p>
                        </div>

                    </li>
                    <li class="flex flex-col sm:flex-row items-stretch sm:gap-4 bg-white rounded-lg shadow-sm">
                        <div class="min-w-[100px] flex items-center justify-center p-4">
                            <i class="text-alt-600 fas fa-vial fa-2x"></i>
                        </div>
                        <div class="p-4 sm:p-0 sm:py-4 sm:pr-4">
                            <h4 class="text-lg font-semibold">Wellness Advisory and Testing:</h4>
                            <p class="text-sm leading-6">Our Paid Home Service offers more than medical assistance—it includes wellness advisory and testing, empowering informed decisions about your health.</p>
                        </div>
                    </li>
                </ul>

                <div class="my-4 sm:my-16"></div>
                <a href="book-appointment-paid-home-service.php" class="step-control prev-btn text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Book appointment
                </a>
            </div>
        </div>
    </div>
</section>


<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>