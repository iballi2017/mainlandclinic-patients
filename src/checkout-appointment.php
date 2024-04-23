<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php
$routes = array("Home", "Book appointment", "Free - Book online appointment", "Checkout");
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-8"></div>



<!-- <div class="mx-auto max-w-4xl px-2 sm:px-6 lg:px-8"> -->
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="bg-secondary-500 p-4">
            <div class="max-w-24">
                <img class="rounded-t-lg" src="./assets/images/brand-logo-inverse.svg" alt="img" />
            </div>
        </div>
        <div class="p-4">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 sm:col-span-7">

                    <div class="bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                        <h2 class="px-4 pt-4 text-xl font-bold border-b pb-4">Your Appointment Summary</h2>
                        <div class="my-3"></div>
                        <div class="px-2 sm:px-4 pb-2 sm:pb-4">
                            <div class="relative overflow-x-auto">
                                <table class="w-full text-base text-left rtl:text-right dark:text-gray-400">
                                    <thead class=" rounded-t-lg overflow-hidden">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 bg-accent-600 rounded-tl-lg">
                                                Appointment
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-accent-600 rounded-tr-lg text-right">
                                                Subtotal
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <strong class="text-lg">Home Care (Live-in) Nursing</strong>
                                            </th>
                                            <td class="px-2 sm:px-6 py-4 text-right">
                                                ₦25,000.00
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" colspan="2" class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <strong class="text-lg font-semibold">Patient type:&nbsp;</strong>New patient
                                            </th>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <section>
                                                    <h3 class="text-lg font-semibold">Patient information:&nbsp;</h3>
                                                    <ul class="leading-8">
                                                        <li>
                                                            Mr. John Doe Muller
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-envelope"></i>&nbsp; muller_masking@gmail.com
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-phone"></i>&nbsp; 09032433566
                                                        </li>
                                                        <li>
                                                            <strong>Date of birth:</strong>&nbsp; 04/29/1983
                                                        </li>
                                                        <li>
                                                            <strong>Sex:</strong>&nbsp; Male
                                                        </li>
                                                        <li>
                                                            <strong>Address:</strong>&nbsp; No 10 Adegbayi road, slow down
                                                        </li>
                                                        <li>
                                                            <strong>City:</strong>&nbsp;Lagos City
                                                        </li>
                                                        <li>
                                                            <strong>Sate:</strong>&nbsp; Lagos
                                                        </li>
                                                        <li>
                                                            <strong>Zip code:</strong>&nbsp; 1232123
                                                        </li>
                                                        <li>
                                                            <strong>Are you the Patients?:</strong>&nbsp; Yes
                                                        </li>
                                                    </ul>
                                                </section>
                                            </th>
                                            <td class="px-2 sm:px-6 py-4 text-right">
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-2 sm:px-6 py-4 font-medium text-gray-900 dark:text-white">
                                                <section>
                                                    <h3 class="text-lg font-semibold">Medical concern:&nbsp;</h3>
                                                    <ul class="leading-8">
                                                        <li>
                                                            <strong>Primary/main:</strong>&nbsp;
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Et aperiam ipsam ad assumenda vero accusamus ab! Vero similique distinctio neque harum, quaerat molestiae nostrum magnam, sapiente voluptas aut suscipit fugiat.
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <strong>Other:</strong>&nbsp;
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, dolorem beatae. Tempora sapiente, molestiae perspiciatis aut nemo quidem nam autem deserunt expedita, qui optio. Sint illo laboriosam pariatur saepe aut hic nihil consequatur natus rem, officia asperiores eveniet deserunt tempora sit numquam suscipit consectetur! Quibusdam dicta consequatur unde blanditiis facere.
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </section>
                                            </th>
                                            <td class="px-2 sm:px-6 py-4 text-right">

                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-2 sm:px-6 py-4 font-medium text-gray-900 dark:text-white">
                                                <section>
                                                    <h3 class="text-lg font-semibold">Appointment duration:&nbsp;</h3>
                                                    <ul class="leading-8">
                                                        <li class="flex items-center gap-2">
                                                            <strong>Date:</strong>&nbsp;
                                                            <p>
                                                                12/12/2024
                                                            </p>
                                                        </li>
                                                        <li class="flex items-center gap-2">
                                                            <strong>Time:</strong>&nbsp;
                                                            <p>
                                                                07:00 am
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </section>
                                            </th>
                                            <td class="px-2 sm:px-6 py-4 text-right">

                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                VAT
                                            </th>
                                            <td class="px-2 sm:px-6 py-4 text-right">
                                                ₦800.00
                                            </td>
                                        </tr>
                                        <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" colspan="2" class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Microsoft Surface Pro
                                    </th>
                                </tr> -->
                                    </tbody>
                                    <tfoot class="text-lg">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 bg-accent-600 rounded-bl-lg">
                                                Total
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-accent-600 rounded-br-lg text-right">
                                                ₦25,800.00
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-span-12 sm:col-span-5">
                    <form class="" autocomplete="off">
                        <div class="bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                            <h2 class="px-4 pt-4 text-xl font-bold border-b pb-4">Billing Details</h2>
                            <div class="my-3"></div>
                            <div class="px-2 sm:px-4 pb-2 sm:pb-4">
                                <fieldset>
                                    <legend class="sr-only">Personal Information</legend>
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="first_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="last_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="email" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                                            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="phone" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                            <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="my-8"></div>
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
                                        <div class="col-span-6 sm:col-span-6">
                                            <label for="state" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">State</label>
                                            <select id="state" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option value="" selected>....</option>
                                            </select>
                                        </div>
                                    </div>

                                </fieldset>
                                <!-- <div class="my-8"></div>
                                <button type="submit" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm w-full sm:w-auto inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Register</button> -->

                            </div>
                        </div>
                        <div class="my-4"></div>
                        <div class="bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                            <h2 class="px-4 pt-4 text-xl font-bold border-b pb-4">Payment Method</h2>
                            <div class="my-3"></div>
                            <div class="px-2 sm:px-4 pb-2 sm:pb-4">

                                <button aria-label="Pay with Quickteller">
                                    <img src="./assets/images/pay-with-quickteller.svg" alt="Pay with Quickteller">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="my-4"></div>
    <button class="back-history-btn | border-2 border-primary-500 px-6 py-2 text-primary-500 font-semibold rounded-lg">Go back</button>

</div>


<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>