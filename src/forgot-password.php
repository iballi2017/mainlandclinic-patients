<!-- header -->
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>



<div class="mx-auto min-h-screen flex items-center justify-center">
    <div class="mx-auto w-full max-w-[700px] px-2 sm:px-6 lg:px-8">
        <div class="block mx-auto bg-white border border-gray-200 rounded-lg overflow-hidden shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="grid grid-cols-2">
                <div class="col-span-2 p-8">
                    <h1 class="text-center font-bold text-xl text-secondary-500 uppercase">Forgot Password</h1>
                    <p class="text-center">Please enter the email address you registered with. We will send you a link</p>
                    <div class="my-8"></div>
                    <form class="" autocomplete="off">
                        <label for="email" class="font-semibold block mb-2 text-base font-medium text-gray-900 dark:text-white">Email Address</label>
                        <div class="flex items-center">
                            <input type="email" id="email" class="basis-9/12 rounded-e-none border-e-0 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                            <button class="border basis-3/12 text-nowrap text-white bg-primary-500 hover:bg-primary-600 ring-1 focus:ring-2 ring-primary-500 focus:outline-none focus:ring-primary-600 font-medium rounded-e-lg  text-sm w-full px-2 sm:px-4 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send Link</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>