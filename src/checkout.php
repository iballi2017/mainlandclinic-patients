<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php $pageTitle = "Checkout";
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <!-- <h2 class="text-2xl font-bold">Your Order</h2> -->


    <div class="bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">

        <h2 class="py-4 px-6 border-b mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Your Order</h2>

        <div class="py-4 px-6">
            <div class="px-4 pt-2 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                <table class="table-pd-1 | w-full text-sm text-left rtl:text-right dark:text-gray-400">
                    <thead>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600">
                            <th scope="col" colspan="3" class="border-0">
                                <h2 class="text-lg font-semibold">Product</h2>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600">
                            <th scope="row" class="font-normal">Hot sale full auto biochemistry</th>
                            <td class="text-right bg-blue-300">
                                x 1
                            </td>
                            <td class="text-right bg-red-300" class="font-normal">
                                ₦283,800.00
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600">
                            <th scope="row" class="font-normal">Fitness/Wellness Test</th>
                            <td class="text-right bg-blue-300">
                                x 1
                            </td>
                            <td class="text-right bg-red-300">
                                ₦283,800.00
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600">
                            <th scope="row" colspan="2" class="font-normal">Subtotal</th>
                            <td class="text-right bg-red-300">
                                ₦367,600.00
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600">
                            <th scope="row" colspan="2" class="font-normal">VAT</th>
                            <td class="text-right bg-red-300">
                                ₦800.00
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600">
                            <th scope="row" colspan="2">Total</th>
                            <td class="text-right bg-red-300 text-2xl font-bold">
                                ₦368,400.00
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="my-8"></div>
    <form action="">
        <div class="bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">

            <h2 class="py-4 px-6 border-b mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Billing Details</h2>

            <div class="py-4 px-6">
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
                            <input type="tel" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>
                    </div>
                </fieldset>

                <div class="my-4"></div>

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
            </div>
        </div>

        <div class="my-8"></div>

        <div class="bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">

            <h2 class="py-4 px-6 border-b mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Payment Method</h2>

            <div class="py-4 px-6">
                <button>
                    <img src="./assets/images/pay-with-quickteller.svg" alt="Pay with Quickteller">
                </button>
            </div>
        </div>
    </form>

</div>

<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>