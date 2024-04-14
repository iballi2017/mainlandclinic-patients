<!-- appointment-history-app works! -->
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
                    <h1 class="font-semibold text-xl border-b-2 pb-2">Appointment History</h1>

                    <div class="my-2"></div>

                    <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        Hello
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>