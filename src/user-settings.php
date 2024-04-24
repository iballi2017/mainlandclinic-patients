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
                    <h1 class="font-semibold text-xl border-b-2 pb-2">Settings</h1>

                    <div class="my-2"></div>
                    <!-- <div class="p-2 sm:p-4 w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        kllj
                    </div> -->

                    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="password-tab" data-tabs-target="#password" type="button" role="tab" aria-controls="password" aria-selected="false">Password</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="notification-tab" data-tabs-target="#notification" type="button" role="tab" aria-controls="notification" aria-selected="false">Notification</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="delete-account-tab" data-tabs-target="#delete-account" type="button" role="tab" aria-controls="delete-account" aria-selected="false">Delete account</button>
                            </li>
                        </ul>
                    </div>

                    <div id="default-tab-content">
                        <div class="hidden p-4 rounded-lg" id="password" role="tabpanel" aria-labelledby="password-tab">
                            <!-- user-settings-reset-password -->
                            <?php include_once(__DIR__ . "./components/user-settings-reset-password.php"); ?>
                        </div>
                        <div class="hidden p-4 rounded-lg" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                            <!-- user-settings-notification -->
                            <?php include_once(__DIR__ . "./components/user-settings-notification.php"); ?>
                        </div>
                        <div class="hidden p-4 rounded-lg" id="delete-account" role="tabpanel" aria-labelledby="delete-account-tab">
                            <!-- user-settings-delete-account -->
                            <?php include_once(__DIR__ . "./components/user-settings-delete-account.php"); ?>
                        </div>
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