<!-- user-orders-app works! -->
<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>
<!-- user-account-user-info -->
<?php include_once(__DIR__ . "./components/user-account-user-info-summary.php"); ?>


<div class="my-4"></div>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

    <div class="p-2 sm:p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="grid grid-cols-12 gap-2">
            <div class="col-span-12 md:col-span-3 hidden sm:block">
                <div class="p-1 sm:p-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <?php include_once(__DIR__ . "./components/user-account-sidebar.php"); ?>
                </div>

            </div>
            <div class="col-span-12 md:col-span-9">
                <div class="p-2 sm:p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <h1 class="font-semibold text-xl border-b-2 pb-2">My Orders</h1>

                    <div class="my-2"></div>

                    <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <ul class="remove-scrollbar flex overflow-auto text-sm font-bold text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                            <li>
                                <button id="order-history-tab" data-tabs-target="#order-history" type="button" role="tab" aria-controls="order-history" aria-selected="true" class="w-full inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Other History</button>
                            </li>
                            <li>
                                <button id="wishlist-tab" data-tabs-target="#wishlist" type="button" role="tab" aria-controls="wishlist" aria-selected="false" class="w-full inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Wishlist</button>
                            </li>
                        </ul>
                        <div id="defaultTabContent">
                            <div class="hidden p-2 sm:p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="order-history" role="tabpanel" aria-labelledby="order-history-tab">


                                <!-- user account - personal information -->
                                <?php include_once(__DIR__ . "./components/user-order-history.php") ?>

                            </div>
                            <div class="hidden p-2 sm:p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">

                                <!-- user profile - medical history -->
                                <?php include_once(__DIR__ . "./components/user-wishlist.php") ?>

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