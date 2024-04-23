<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php
$routes = array("Home", "Book appointment", "Employment and other related testing");
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>

<div class="mx-auto max-w-4xl px-2 sm:px-6 lg:px-8">


    <div class="p-2 sm:p-6">
        <fieldset class="">
            <legend class="text-2xl font-bold text-center">Input the right information</legend>

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
                                <label for="organisation_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Name of Organisation</label>
                                <input type="text" id="organisation_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="contact_email" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact Email</label>
                                <input type="text" id="contact_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="phone" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                <input type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="dob" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Birth</label>
                                <input type="date" id="dob" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="sex" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sex</label>
                                <select id="sex" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="male" selected>Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <div class="my-2"></div>
                    <fieldset>
                        <legend class="sr-only">Address</legend>
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12">
                                <label for="address" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                <input type="text" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="city" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Town/City</label>
                                <input type="text" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="state" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">State</label>
                                <select id="state" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="" selected>....</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="zipcode" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Zip</label>
                                <input type="text" id="zipcode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                            </div>
                        </div>
                    </fieldset>
                    <div class="my-2"></div>
                    <fieldset>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="col-span-1">
                                <legend class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Are you the patient?</legend>
                                <ul class="flex items-center font-semibold gap-8">
                                    <li>
                                        <input type="radio" name="are_you_the_patient" id="yes" value="yes">
                                        <label for="yes" class="cursor-pointer">Yes</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="are_you_the_patient" id="no" value="no">
                                        <label for="no" class="cursor-pointer">No</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </fieldset>
        <div class="my-8"></div>

        <form action="">
            <div class="flex items-center justify-between">
                <button data-custom-target="free-online-appointment-form-stepper" type="button" class="step-control prev-btn text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Back</button>
                <button data-custom-target="free-online-appointment-form-stepper" type="submit" class="step-control next-btn text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Next</button>
            </div>
        </form>
    </div>

</div>