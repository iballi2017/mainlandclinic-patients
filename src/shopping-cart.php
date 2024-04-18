<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php $routes = ["Home", "Cart"];
include_once(__DIR__ . "./components/page-title-header.php"); ?>
<div class="my-4"></div>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

    <a href="shop.php" class="inline-block mb-4 font-semibold text-primary-500 px-4 py-2 border-primary-500 border-2 rounded-lg">Continue shopping</a>

    <div class="">

        <div class="relative overflow-x-auto border rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Item
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sub-total
                        </th>
                        <th scope="col" class="px-6 py-3 text-right">
                            Remove
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center gap-2">
                                <div class="h-10 w-10 overflow-hidden border rounded-lg">
                                    <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/47/761281/1.jpg?0471" alt="">
                                </div>
                                <p>Apple MacBook Pro 17"</p>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            ₦283,800.00
                        </td>
                        <td class="px-6 py-4">
                            <div class="qty-ctrl">
                                <div class="qty-val">1</div>
                                <div>
                                    <button class="btn-sm qty-add">+</button>
                                </div>
                                <div>
                                    <button class="btn-sm qty-remove">-</button>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            ₦283,800.00
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="px-2 py-1.5 flex rounded bg-red-700 ml-auto">
                                <i class="fas fa-times text-white"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center gap-2">
                                <div class="h-10 w-10 overflow-hidden border rounded-lg">
                                    <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/47/761281/1.jpg?0471" alt="">
                                </div>
                                <p>Microsoft Surface Pro</p>
                            </div>

                        </th>
                        <td class="px-6 py-4">
                            ₦283,800.00
                        </td>
                        <td class="px-6 py-4">
                            <div class="qty-ctrl">
                                <div class="qty-val">1</div>
                                <div>
                                    <button class="btn-sm qty-add">+</button>
                                </div>
                                <div>
                                    <button class="btn-sm qty-remove">-</button>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            ₦283,800.00
                        </td>
                        <td class="px-6 py-4">
                            <button class="px-2 py-1.5  flex rounded bg-red-700 ml-auto">
                                <i class="fas fa-times text-white"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center gap-2">
                                <div class="h-10 w-10 overflow-hidden border rounded-lg">
                                    <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/47/761281/1.jpg?0471" alt="">
                                </div>
                                <p>Magic Mouse 2</p>
                            </div>

                        </th>
                        <td class="px-6 py-4">
                            ₦283,800.00
                        </td>
                        <td class="px-6 py-4">
                            <div class="qty-ctrl">
                                <div class="qty-val">1</div>
                                <div>
                                    <button class="btn-sm qty-add">+</button>
                                </div>
                                <div>
                                    <button class="btn-sm qty-remove">-</button>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            ₦283,800.00
                        </td>
                        <td class="px-6 py-4">
                            <button class="px-2 py-1.5  flex rounded bg-red-700 ml-auto">
                                <i class="fas fa-times text-white"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="my-8"></div>

        <div class="flex">
            <div class="relative overflow-x-auto ml-auto border rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" colspan="2" class="px-6 py-3 text-center">
                                Cart Summary
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Subtotal
                            </th>
                            <td class="px-6 py-4 font-bold">
                                ₦283,800.00
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" colspan="2" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                <button type="submit" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    Checkout&nbsp;<span>₦368,400.00</span>
                                </button>

                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    <div class="h-32 flex items-center justify-center">
        <p class="text-gray-400">Cart is empty</p>
    </div>

</div>


<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>