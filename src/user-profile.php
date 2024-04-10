<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>
<!-- user-account-user-info -->
<?php include_once(__DIR__ . "./components/user-account-user-info-summary.php"); ?>


<div class="my-4"></div>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="grid grid-cols-12 gap-2">
            <div class="col-span-3">
                <div class="p-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <ul class="flex flex-col gap-2">
                        <li>
                            <a href="#" class="block font-semibold p-3 border hover:text-primary-500 hover:border-primary-500 rounded hover:bg-primary-200">My Profile</a>
                        </li>
                        <li>
                            <a href="#" class="block font-semibold p-3 border hover:text-primary-500 hover:border-primary-500 rounded hover:bg-primary-200">My Orders</a>
                        </li>
                        <li>
                            <a href="#" class="block font-semibold p-3 border hover:text-primary-500 hover:border-primary-500 rounded hover:bg-primary-200">My Appointments</a>
                        </li>
                        <li>
                            <a href="#" class="block font-semibold p-3 border hover:text-primary-500 hover:border-primary-500 rounded hover:bg-primary-200">Notifications</a>
                        </li>
                        <li>
                            <a href="#" class="block font-semibold p-3 border hover:text-primary-500 hover:border-primary-500 rounded hover:bg-primary-200">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block font-semibold p-3 text-center border text-red-500  border-red-500 rounded hover:bg-red-200">Log out</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-span-9">
                <div class="p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <h1 class="font-semibold text-xl border-b-2 pb-2">My Profile</h1>

                    <div class="my-2"></div>

                    <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                            <li class="me-2">
                                <button id="personal-information-tab" data-tabs-target="#personal-information" type="button" role="tab" aria-controls="personal-information" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Personal Information</button>
                            </li>
                            <li class="me-2">
                                <button id="medical-history-tab" data-tabs-target="#medical-history" type="button" role="tab" aria-controls="medical-history" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Medical History</button>
                            </li>
                            <li class="me-2">
                                <button id="medical-lab-tab" data-tabs-target="#medical-lab" type="button" role="tab" aria-controls="medical-lab" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Medical Lab</button>
                            </li>
                        </ul>
                        <div id="defaultTabContent">
                            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="personal-information" role="tabpanel" aria-labelledby="personal-information-tab">

                                <form class="" autocomplete="off">
                                    <fieldset>
                                        <legend class="block w-full border-b-2 font-semibold text-md mb-4">Personal Information</legend>
                                        <div class="grid grid-cols-12 gap-4">
                                            <div class="col-span-12">
                                                <label for="full_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
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
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="age" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                                                <input type="number" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="sex" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sex</label>
                                                <select id="sex" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option va;ue="male" selected>Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="regligion" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Religion</label>
                                                <select id="regligion" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option va;ue="christianity" selected>Christianity</option>
                                                    <option value="islam">Islam</option>
                                                    <option value="traditionalist">Traditionalist</option>
                                                    <option value="atheist">Atheist</option>
                                                </select>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="marital_status" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marital Status</label>
                                                <select id="marital_status" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option value="single" selected>Single</option>
                                                    <option value="married">Married</option>
                                                    <option value=" divorced">Divorced</option>
                                                    <option value="widowed">Widowed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="my-8"></div>
                                    <fieldset>
                                        <legend class="block w-full border-b-2 font-semibold text-md mb-4">Address</legend>
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
                                    <div class="my-8"></div>
                                    <fieldset>
                                        <legend class="block w-full border-b-2 font-semibold text-md mb-4">Referrer</legend>
                                        <div class="grid grid-cols-12 gap-4">
                                            <div class="col-span-12 sm:col-span-6">
                                                <label for="informant" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Informant</label>
                                                <select id="informant" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option value="single" selected>Toddler</option>
                                                    <option value="married">Aged</option>
                                                    <option value=" divorced">Non-english Speaker</option>
                                                </select>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6">
                                                <label for="relationship" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Relationship</label>
                                                <input type="text" id="relationship" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="my-8"></div>
                                    <button type="submit" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm w-full sm:w-auto inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save</button>

                                </form>
                            </div>
                            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="medical-history" role="tabpanel" aria-labelledby="medical-history-tab">
                                <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">We invest in the world’s potential</h2>
                                <!-- List -->
                                <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="leading-tight">Dynamic reports and dashboards</span>
                                    </li>
                                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="leading-tight">Templates for everyone</span>
                                    </li>
                                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="leading-tight">Development workflow</span>
                                    </li>
                                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="leading-tight">Limitless business automation</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="medical-lab" role="tabpanel" aria-labelledby="medical-lab-tab">
                                <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                                    <div class="flex flex-col">
                                        <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                                        <dd class="text-gray-500 dark:text-gray-400">Developers</dd>
                                    </div>
                                    <div class="flex flex-col">
                                        <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                                        <dd class="text-gray-500 dark:text-gray-400">Public repositories</dd>
                                    </div>
                                    <div class="flex flex-col">
                                        <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                                        <dd class="text-gray-500 dark:text-gray-400">Open source projects</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>