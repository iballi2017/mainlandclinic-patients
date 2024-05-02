<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php
$routes = array("Home", "Employment and other related testing");
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>




<section class="padding-block-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 md:px-8 md:leading-7">
        <div class="grid grid-cols-12 gap-4 sm:gap-8 items-center">
            <div class="col-span-12 sm:col-span-5">
                <div class="">
                    <div class="rounded-lg overflow-hidden mb-3 fade-in">
                        <img src="./assets/images/feature-card-image-4.png" alt="Take control of your health" class="w-full">
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-7">
                <div class="fade-in sm:pl-8">
                    <h3 class="text-xl sm:text-2xl font-bold mb-4">Are you a corporate company in Lagos, Nigeria, looking to ensure the health and safety of your workforce? </h3>

                    <p class="line-height-400">
                        Mainland Clinics offers tailored pre-employment testing for peace of mind for both employers and employees.
                    </p>
                    <div class="my-4"></div>
                    <h4 class="text-lg sm:text-xl font-semibold | 
                    before:content-[''] before:block before:bg-[#FFC310] before:h-8 
                    before:w-[6px] before:mr-0.5 
                    before:text-red-500 flex items-center gap-4 text-slate-700 mb-4">Categories</h4>
                    
                    <div class="my-4"></div>

                    <div class="employment-service-category-tabs">
                        <div class="mb-4">
                            <ul class="flex flex-wrap -mb-px font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                                <li class="me-1" role="presentation">
                                    <button class="inline-block  py-2 px-4 border-b-2 rounded-t-lg" id="beyond-testing-tab" data-tabs-target="#beyond-testing" type="button" role="tab" aria-controls="beyond-testing" aria-selected="false">Beyond Testing</button>
                                </li>
                                <li class="me-1" role="presentation">
                                    <button class="inline-block  py-2 px-4 border-b-2 rounded-t-lg" id="corporate-package-for-testing-tab" data-tabs-target="#corporate-package-for-testing" type="button" role="tab" aria-controls="corporate-package-for-testing" aria-selected="false">Corporate Package for Testing</button>
                                </li>
                            </ul>
                        </div>
                        <div id="default-tab-content">
                            <div class="hidden" id="beyond-testing" role="tabpanel" aria-labelledby="beyond-testing-tab">
                                <p class="line-height-400">In addition to pre-employment testing, Mainland Clinics offers a range of other testing services to support your employees' health and well-being. Whether it's routine screenings, wellness checks, or specialized tests, we are here to help you promote a safe and healthy work environment.
                                </p>
                            </div>
                            <div class="hidden" id="corporate-package-for-testing" role="tabpanel" aria-labelledby="corporate-package-for-testing-tab">
                                <p class="line-height-400">
                                    Our corporate package includes a range of testing services designed to streamline your hiring process and mitigate risks in the workplace. From pre-employment medical screenings to specialized tests such as blood tests, malaria screenings, widal tests, and retroviral tests, we've got you covered.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="my-4"></div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="bg-[#DAF1C5] py-16">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 md:px-8 md:leading-7">
        <h2 class="text-center font-bold text-xl md:text-2xl">Why Choose Mainland Clinics for Your Pre-Employment Testing Needs</h2>
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
                            <img src="./assets/icons/icon-expertise.svg" alt="">
                        </div>
                        <div class="p-4 sm:p-0 sm:py-4 sm:pr-4">
                            <h4 class="text-lg font-semibold">Expertise</h4>
                            <p class="text-sm leading-6">
                                Our healthcare team conducts pre-employment tests accurately and efficiently, meeting industry standards.
                            </p>
                        </div>

                    </li>
                    <li class="flex flex-col sm:flex-row items-stretch sm:gap-4 bg-white rounded-lg shadow-sm">
                        <div class="min-w-[100px] flex items-center justify-center p-4">
                            <img src="./assets/icons/shield_lock_FILL0_wght300_GRAD0_opsz241.svg" alt="">
                        </div>
                        <div class="p-4 sm:p-0 sm:py-4 sm:pr-4">
                            <h4 class="text-lg font-semibold">Confidentiality</h4>
                            <p class="text-sm leading-6">
                                We prioritize privacy in pre-employment testing, handling health information with utmost care.
                            </p>
                        </div>
                    </li>
                    <li class="flex flex-col sm:flex-row items-stretch sm:gap-4 bg-white rounded-lg shadow-sm">
                        <div class="min-w-[100px] flex items-center justify-center p-4">
                            <img src="./assets/icons/icon-convenience.svg" alt="">
                        </div>
                        <div class="p-4 sm:p-0 sm:py-4 sm:pr-4">
                            <h4 class="text-lg font-semibold">Convenience</h4>
                            <p class="text-sm leading-6">
                                Our corporate package offers centralized testing services, saving your organization time and resources.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>



<section class="padding-block-800">
    <div class="mx-auto max-w-4xl px-2 sm:px-6 lg:px-8">
        <h4 class="text-center font-bold text-xl sm:text-2xl lg:text-4xl">Fill in the form</h4>
        <p class="text-center font-semibold">Input the right information</p>
        <form action="">
            <div class="">
                <div class="px-2 py-4 sm:p-6 bg-white border border-gray-200 rounded-lg overflow-hidden shadow dark:bg-gray-800 dark:border-gray-700">

                    <fieldset>
                        <legend class="sr-only">Personal information</legend>

                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12">
                                <label for="organisation_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Name of Organisation</label>
                                <input type="text" id="organisation_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="contact_email" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact Email</label>
                                <input type="text" id="contact_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="phone" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="contact_person" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact Person</label>
                                <input type="text" id="contact_person" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="organisation_size" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Organisation Size</label>
                                <select id="organisation_size" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="1-10" selected>1-10</option>
                                    <option value="11-30">11-30</option>
                                    <option value="31-50">31-50</option>
                                    <option value="61-100">61-100</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <div class="my-4"></div>
                    <fieldset>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="col-span-1">
                                <legend class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Partnership option</legend>
                                <ul class="flex items-center font-semibold gap-8">
                                    <li>
                                        <input type="radio" name="partnership-option" id="one-off" value="one-off">
                                        <label for="one-off" class="cursor-pointer">One-off</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="partnership-option" id="continuos" value="continuos">
                                        <label for="continuos" class="cursor-pointer">Continuos</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </fieldset>

                </div>
                <div class="my-8"></div>
                <div class="flex items-center justify-between">
                    <button data-custom-target="free-online-appointment-form-stepper" type="submit" class="step-control next-btn text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Submit
                    </button>
                </div>
            </div>
        </form>

    </div>
</section>



<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>