<!-- header -->
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>



<div class="mx-auto my-8 flex items-center justify-center">
    <div class="mx-auto w-full max-w-lg px-2 sm:px-6 lg:px-8">
        <div class="block mx-auto bg-white border border-gray-200 rounded-lg overflow-hidden shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="grid grid-cols-2">
                <div class="col-span-2 p-3 sm:p-6 flex flex-col justify-center">
                    <h1 class="text-center font-bold text-2xl text-secondary-500 uppercase font-display">Reset Password</h1>
                    <div class="my-2"></div>
                    <p class="font-medium text-center">Password reset successful!</p>
                    <div class="my-4"></div>
                    <a href="./auth.php" class="inline-block mx-auto text-white bg-primary-500 hover:bg-primary-800 focus:outline-none focus:ring-1 focus:ring-primary-300 font-medium rounded-full text-sm px-5 py-1 text-center mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>