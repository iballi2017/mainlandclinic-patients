<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php
$routes = array("Home", "Book appointment", "Home Care (Live in) Nursing");
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>

<div class="appointment-form-stepper | mx-auto max-w-4xl px-2 sm:px-6 lg:px-8">

    <!-- Stepper Form -->
    <div action="" id="free-online-appointment-form">
        <!-- <input type="text" value=""> -->
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
            <ul class="pages">
                <!-- Page1 -->
                <li class="page p-2 sm:p-6">
                    <form action="">
                        <fieldset class="">
                            <legend class="text-2xl font-bold text-center">Booking an appointment with us</legend>
                            <p class="text-primary-700 font-semibold text-center">Select one to begin the process</p>

                            <div class="my-10"></div>

                            <ul class="grid grid-cols-2 items-stretch gap-4 justify-center min-h-40">
                                <li class="custom-checkbox | col-span-2 sm:col-span-1 flex flex-stretch justify-center">
                                    <input type="radio" name="type_of_patient" id="new_patient" value="new_patient" class="step-control next-btn" data-custom-target="free-online-appointment-form-stepper">
                                    <label class="text-center cursor-pointer block w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700" for="new_patient">
                                        <p class="text-colored text-2xl font-bold text-accent-750">New patient</p>
                                        <p class="text-lg">Provide your Information</p>
                                    </label>
                                </li>
                                <li class="custom-checkbox | col-span-2 sm:col-span-1 flex flex-stretch justify-center">
                                    <input type="radio" name="type_of_patient" id="returning_patient" value="returning_patient" class="step-control next-btn" data-custom-target="free-online-appointment-form-stepper">
                                    <label class="text-center cursor-pointer block w-full py-6 px-10 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700" for="returning_patient">
                                        <p class="text-colored text-2xl font-bold text-accent-750">Returning patient</p>
                                        <p class="text-lg">Request using your Mainland clinics account</p>
                                    </label>
                                </li>
                            </ul>
                            <div class="my-8"></div>
                            <div class="flex items-center justify-between">
                                <span></span>
                                <button data-custom-target="free-online-appointment-form-stepper" type="submit" class="step-control next-btn text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Proceed</button>
                            </div>
                        </fieldset>
                    </form>
                </li>
                <!-- Page 2 -->
                <li class="page p-2 sm:p-6">
                    <form action="">
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
                                                <label for="id_number" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mainland clinics ID number</label>
                                                <input type="text" id="id_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                            </div>
                                            <div class="col-span-12 sm:col-span-4">
                                                <label for="first_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                            </div>
                                            <div class="col-span-12 sm:col-span-4">
                                                <label for="middle_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle Name</label>
                                                <input type="text" id="middle_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                            </div>
                                            <div class="col-span-12 sm:col-span-4">
                                                <label for="last_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                                <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                            </div>
                                            <div class="col-span-12">
                                                <label for="suffix" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Suffix <small class="text-accent-700">(Optional)</small></label>
                                                <select id="suffix" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected>...</option>
                                                </select>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6">
                                                <label for="email" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                                                <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                            </div>
                                            <div class="col-span-12 sm:col-span-6">
                                                <label for="phone" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                                <input type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                            </div>
                                            <div class="col-span-12 sm:col-span-6">
                                                <label for="dob" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Birth</label>
                                                <input type="text" id="dob" class="datepicker bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
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
                        <div class="flex items-center justify-between">
                            <button data-custom-target="free-online-appointment-form-stepper" type="button" class="step-control prev-btn text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Back</button>
                            <button data-custom-target="free-online-appointment-form-stepper" type="submit" class="step-control next-btn text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Next</button>
                        </div>
                    </form>
                </li>
                <!-- Page 3 -->
                <li class="page p-2 sm:p-6">
                    <form action="">

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
                            <button data-custom-target="free-online-appointment-form-stepper" type="button" class="step-control prev-btn text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Back</button>
                            <button data-custom-target="free-online-appointment-form-stepper" type="submit" class="step-control next-btn text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Next</button>
                        </div>
                    </form>
                </li>
                <!-- Page 4 -->
                <li class="page p-2 sm:p-6">
                    <form action="">

                        <fieldset class="">
                            <legend class="text-2xl font-bold text-center">Input the time and date</legend>

                            <div class="my-10"></div>

                            <div class="bg-white rounded-lg overflow-hidden border dark:bg-gray-800 dark:border-gray-700">
                                <div class="bg-secondary-500 p-4">
                                    <div class="max-w-24">
                                        <img class="rounded-t-lg" src="./assets/images/brand-logo-inverse.svg" alt="img" />
                                    </div>
                                </div>
                                <div class="p-4">

                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="col-span-12">
                                            <label for="appointment_date" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Appointment date</label>
                                            <!-- <input type="date" id="appointment_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required /> -->
                                            <!-- <input type="text" id="appointment__date" class="datepicker | bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required /> -->
                                            <input type="text" id="appointment_date" class="datepicker-friday | bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
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
                            <button data-custom-target="free-online-appointment-form-stepper" type="submit" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Checkout</button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>