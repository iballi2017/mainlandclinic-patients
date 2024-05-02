<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php
$routes = array("Home", "Ambulance");
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>




<section class="padding-block-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 md:px-8 md:leading-7">
        <div class="grid grid-cols-12 gap-4 sm:gap-8 items-center">
            <div class="col-span-12 sm:col-span-5">
                <div class="">
                    <div class="rounded-lg overflow-hidden mb-3 fade-in">
                        <img src="./assets/images/feature-card-image-2.png" alt="Take control of your health" class="w-full">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-7">

                <div class="fade-in sm:pl-8">
                    <p class="line-height-400">
                        In times of medical emergencies, every second counts. That's why Mainland Clinics offers reliable and swift Ambulance Services to ensure prompt transportation and critical care when you need it most in Lagos, Nigeria.
                    </p>
                    <div class="my-4"></div>
                    <p class="line-height-400">
                        Our Ambulance Services are equipped with state-of-the-art medical equipment and staffed by skilled paramedics and healthcare professionals. Whether you require emergency transportation to our clinic or transfer to another healthcare facility, you can trust Mainland Clinics to deliver safe and efficient ambulance services, providing peace of mind during challenging times.

                    </p>
                    <div class="my-4"></div>
                    <p class="line-height-400">
                        At Mainland Clinics, your safety and well-being are our utmost priority. Trust us to be your reliable partner in emergency medical transportation, ensuring you receive the care you need when it matters most.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="bg-alt-450 py-16">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 md:px-8 md:leading-7">
        <h2 class="text-center font-bold text-xl md:text-2xl">Our Ambulance Services include:</h2>
        <div class="grid grid-cols-12 sm:items-center gap-4 sm:gap-8">
            <div class="col-span-12 sm:col-span-6 sm:order-last">
                <div class="md:p-8">
                    <img src="./assets/images/featured-image-7.png" alt="image: Elderly woman and nurse smiles" class="w-full">
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:p-8 sm:order-first">
                <ul class="flex flex-col gap-8">
                    <li class="flex flex-col sm:flex-row items-stretch sm:gap-4 bg-white rounded-lg shadow-sm">
                        <div class="min-w-[100px] flex items-center justify-center p-4">
                            <img src="./assets/icons/call_quality_FILL0_wght300_GRAD0_opsz241.svg" alt="">
                        </div>
                        <div class="p-4 sm:p-0 sm:py-4 sm:pr-4">
                            <h4 class="text-lg font-semibold">Emergency Response</h4>
                            <p class="text-sm leading-6">
                                Dedicated team offers 24/7 emergency response and medical aid en route to hospitals.
                            </p>
                        </div>

                    </li>
                    <li class="flex flex-col sm:flex-row items-stretch sm:gap-4 bg-white rounded-lg shadow-sm">
                        <div class="min-w-[100px] flex items-center justify-center p-4">
                            <img src="./assets/icons/ecg_heart_FILL0_wght300_GRAD0_opsz241.svg" alt="">
                        </div>
                        <div class="p-4 sm:p-0 sm:py-4 sm:pr-4">
                            <h4 class="text-lg font-semibold">Advanced Medical Care</h4>
                            <p class="text-sm leading-6">
                                Our ambulances are equipped for life-saving care during transit with advanced medical gear.
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col sm:flex-row items-stretch sm:gap-4 bg-white rounded-lg shadow-sm">
                        <div class="min-w-[100px] flex items-center justify-center p-4">
                            <img src="./assets/icons/award_star_FILL0_wght300_GRAD0_opsz241.svg" alt="">
                        </div>
                        <div class="p-4 sm:p-0 sm:py-4 sm:pr-4">
                            <h4 class="text-lg font-semibold">Trained Personnel</h4>
                            <p class="text-sm leading-6">
                                Available paramedics and healthcare pros trained rigorously for compassionate emergency care.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>