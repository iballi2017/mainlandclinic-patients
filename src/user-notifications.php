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
                    <h1 class="font-semibold text-xl border-b-2 pb-2">Notifications</h1>

                    <div class="my-2"></div>

                    <div class="p-2 sm:p-4 w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <ul class="notifications">
                            <li class="item">
                                <a href="" class="flex items-center justify-between">
                                    <span>
                                        <span class="font-semibold">Reminder:</span>&nbsp;Your time has complete, please stay tuned as our doctor will attend to you
                                    </span>
                                    <span class="text-accent-650">1s</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="" class="flex items-center justify-between">
                                    <span>
                                        <span class="font-semibold">Reminder:</span>&nbsp;Your have 3 hours left to your appointment time.
                                    </span>
                                    <span class="text-accent-650">1s</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="" class="flex items-center justify-between">
                                    <span>
                                        <span class="font-semibold">Reminder:</span>&nbsp;Your have 4 hours left to your appointment time.
                                    </span>
                                    <span class="text-accent-650">1s</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>