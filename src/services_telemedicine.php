<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php
$routes = array("Home", "Telemedicine");
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>




<section class="padding-block-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 md:px-8 md:leading-7">
        <div class="grid grid-cols-12 gap-4 sm:gap-8 items-center">
            <div class="col-span-12 sm:col-span-5">
                <div class="">
                    <div class="rounded-lg overflow-hidden mb-3 fade-in">
                        <img src="./assets/images/feature-card-image-5.png" alt="Take control of your health" class="w-full">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-7">
                <div class="fade-in sm:pl-8">
                    <p class="line-height-400">
                        For discreet and efficient medical assistance, we offer "Rapid Consultation," a subtle header indicating swift access to expert advice. Our platform seamlessly integrates WhatsApp API for instant calls, ensuring immediate support.
                    </p>
                    <div class="my-4"></div>
                    <p class="line-height-400">
                        Once payment for instant consultation is made, our dedicated team will swing into action. The nurse will initiate the process by clerking your concerns, and if necessary, the doctor on duty will join in for a thorough assessment. Dr. Ekene, inspired by the efficiency of Mayo Clinic's website, has meticulously designed our platform to prioritize your well-being and convenience.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="bg-alt-700 py-16">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 md:px-8 md:leading-7">
        <h2 class="text-center font-bold text-xl md:text-2xl">Here is what Telemedicine service offers.</h2>
        <div class="grid grid-cols-12 sm:items-center gap-4 sm:gap-8">
            <div class="col-span-12 sm:col-span-6 sm:order-last">
                <div class="md:p-8">
                    <img src="./assets/images/featured-image-5.png" alt="image: Elderly woman and nurse smiles" class="w-full">
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:p-8 sm:order-first">
                <ul class="flex flex-col gap-8">
                    <li class="flex flex-col sm:flex-row items-stretch sm:gap-4 bg-white rounded-lg shadow-sm">
                        <div class="min-w-[100px] flex items-center justify-center p-4">
                            <img src="./assets/icons/contact_emergency_FILL0_wght400_GRAD0_opsz241.svg" alt="">
                        </div>
                        <div class="p-4 sm:p-0 sm:py-4 sm:pr-4">
                            <h4 class="text-lg font-semibold">Instant Consultation</h4>
                            <p class="text-sm leading-6">
                                Ideal for urgent medical queries. Priority access with a nominal fee of N10K to N25K. New patients securely log in, returning patients quickly register.
                            </p>
                        </div>

                    </li>
                    <li class="flex flex-col sm:flex-row items-stretch sm:gap-4 bg-white rounded-lg shadow-sm">
                        <div class="min-w-[100px] flex items-center justify-center p-4">
                            <img src="./assets/icons/autorenew_FILL0_wght400_GRAD0_opsz241.svg" alt="">
                        </div>
                        <div class="p-4 sm:p-0 sm:py-4 sm:pr-4">
                            <h4 class="text-lg font-semibold">Regular Check-up</h4>
                            <p class="text-sm leading-6">
                                Perfect for routine check-ups and follow-ups. Schedule appointments and pre-pay for a streamlined experience.
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col sm:flex-row items-stretch sm:gap-4 bg-white rounded-lg shadow-sm">
                        <div class="min-w-[100px] flex items-center justify-center p-4">
                            <img src="./assets/icons/sports_FILL0_wght400_GRAD0_opsz241.svg" alt="">
                        </div>
                        <div class="p-4 sm:p-0 sm:py-4 sm:pr-4">
                            <h4 class="text-lg font-semibold">Specialist Referral</h4>
                            <p class="text-sm leading-6">
                                Seeking specialized care? Our platform connects you with renowned specialists for tailored, high-quality treatment.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="my-8"></div>

<!-- book appointment banner -->
<?php include_once(__DIR__ . "./components/book-appointment-banner.php") ;?>

<div class="my-8"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>