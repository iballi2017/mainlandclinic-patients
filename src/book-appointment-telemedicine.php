<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php
$routes = array("Home", "Book appointment", "Telemedicine");
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>

<div class="appointment-form-stepper | mx-auto max-w-4xl px-2 sm:px-6 lg:px-8">

    <!-- Stepper Form -->
    <form action="" id="free-online-appointment-form">

        <ol class="progress | flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
            <li class="step flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">

                    <span class="flex flex-col">
                        <span class="progress-point hidden md:flex items-center justify-center">
                            <span class="inner"></span>
                        </span>
                        <span class="text-nowrap">
                            <span class="hidden sm:inline-flex sm:ms-2">Main&nbsp;</span>Concern
                        </span>
                    </span>
                </span>
            </li>
            <li class="step flex items-center text-nowrap">
                <span class="flex flex-col">
                    <span class="progress-point hidden md:flex items-center justify-center">
                        <span class="inner"></span>
                    </span>
                    <span class="text-nowrap">
                        Wrap It Up
                    </span>
                </span>
            </li>
        </ol>
        <div class="stepper py-8 min-h-max" id="free-online-appointment-form-stepper">
            <ul class="pages ">
                <!-- Page 1 -->
                <li class="page p-2 sm:p-6">

                    <fieldset class="">
                        <legend class="text-2xl font-bold text-center">Tell us your concerns </legend>

                        <div class="my-10"></div>

                        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="bg-secondary-500 p-4">
                                <div class="max-w-24">
                                    <img class="rounded-t-lg" src="./assets/images/brand-logo-inverse.svg" alt="img" />
                                </div>
                            </div>
                            <div class="p-4">
                                <fieldset>
                                    <legend class="sr-only">Personal information</legend>

                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="col-span-12">
                                            <label for="medical_concern" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                Tell us about your main medical concern
                                            </label>
                                            <textarea name="medical_concern" id="medical_concern" cols="30" rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required></textarea>
                                        </div>
                                        <div class="col-span-12">
                                            <label for="other_concern" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                Are there any other medical concern you would like to let us know about?
                                            </label>
                                            <textarea name="other_concern" id="other_concern" cols="30" rows="5" placeholder="I also have ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </fieldset>
                    <div class="my-8"></div>
                    <div class="flex items-center justify-between">
                        <span></span>
                        <button data-custom-target="free-online-appointment-form-stepper" type="button" class="step-control next-btn text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Next</button>
                    </div>
                </li>
                <!-- Page 2 -->
                <li class="page p-2 sm:p-6">

                    <fieldset class="">
                        <legend class="text-2xl font-bold text-center">Input the time and date</legend>

                        <div class="my-10"></div>

                        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="bg-secondary-500 p-4">
                                <div class="max-w-24">
                                    <img class="rounded-t-lg" src="./assets/images/brand-logo-inverse.svg" alt="img" />
                                </div>
                            </div>
                            <div class="p-4">

                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-12">
                                        <label for="appointment_date" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Appointment date</label>
                                        <input type="date" id="appointment_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                    </div>
                                    <div class="col-span-12">
                                        <label for="appointment_time" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Appointment time</label>
                                        <select id="appointment_time" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="" selected>---</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="my-8"></div>
                    <div class="flex items-center justify-between">
                        <button data-custom-target="free-online-appointment-form-stepper" type="button" class="step-control prev-btn text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Back</button>
                        <button data-custom-target="free-online-appointment-form-stepper" type="button" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Checkout</button>
                    </div>
                </li>
            </ul>
        </div>

        <!-- <ul class="flex items-center gap-8 my-8">
            <li>
                <button type="button" class="step-control prev-btn step-backward" data-custom-target="free-online-appointment-form-stepper">Back</button>
            </li>
            <li>
                <button type="button" class="step-control next-btn step-forward" data-custom-target="free-online-appointment-form-stepper">Next</button>
            </li>
        </ul> -->
    </form>


    <!-- Stepper Form -->
    <!-- <form action="">

        <ol class="progress | flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
            <li class="step current flex md:w-full items-center sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                    <span class="flex flex-col">
                        <span class="progress-point hidden md:flex items-center justify-center">
                            <span class="inner"></span>
                        </span>
                        <span class="text-nowrap">
                            <span class="hidden sm:inline-flex sm:ms-2">Patient&nbsp;</span>Type
                        </span>
                    </span>
                </span>
            </li>
            <li class="step flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">

                    <span class="flex flex-col">
                        <span class="progress-point hidden md:flex items-center justify-center">
                            <span class="inner"></span>
                        </span>
                        <span class="text-nowrap">
                            <span class="hidden sm:inline-flex sm:ms-2">Patient&nbsp;</span>Information</span>
                    </span>
                </span>
            </li>
            <li class="step flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">

                    <span class="flex flex-col">
                        <span class="progress-point hidden md:flex items-center justify-center">
                            <span class="inner"></span>
                        </span>
                        <span class="text-nowrap">
                            <span class="hidden sm:inline-flex sm:ms-2">Main&nbsp;</span>Concern
                        </span>
                    </span>
                </span>
            </li>
            <li class="step flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">

                    <span class="flex flex-col">
                        <span class="progress-point hidden md:flex items-center justify-center">
                            <span class="inner"></span>
                        </span>
                        <span class="text-nowrap">
                            Test
                        </span>
                    </span>
                </span>
            </li>
            <li class="step flex items-center text-nowrap">
                <span class="flex flex-col">
                    <span class="progress-point hidden md:flex items-center justify-center">
                        <span class="inner"></span>
                    </span>
                    <span class="text-nowrap">
                        Wrap It Up
                    </span>
                </span>
            </li>
        </ol>
        <div class="stepper overflow-hidden">
            <ul class="pages">
                <li class="page">Step 1</li>
                <li class="page">Step 2</li>
                <li class="page">Step 3</li>
                <li class="page">Step 4</li>
                <li class="page">Step 5</li>
            </ul>
        </div>

        <ul class="flex items-center gap-8 my-8">
            <li>
                <button type="button" class="step-backward">Back</button>
            </li>
            <li>
                <button type="button" class="step-forward">Next</button>
            </li>
        </ul>
    </form> -->

</div>


<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>