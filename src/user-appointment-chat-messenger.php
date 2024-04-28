<!-- user-appointment-chat-messenger-app works! -->
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

                        <div class="px-4 py-3 flex overflow-auto text-sm font-semibold text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                            <div class="flex items-center gap-2">
                                <button class="back-history-btn">
                                    <i class="fas fa-arrow-left"></i>
                                </button>
                                <h2>Appointment Details</h2>
                            </div>
                        </div>
                        <section class="p-4 text-sm">

                            <!-- user-appointment-toolbar -->
                            <?php include_once(__DIR__ . "./components/user-appointment-toolbar.php"); ?>

                            <div class="my-4"></div>


                            <!-- CONTENT -->

                            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden dark:bg-gray-800 dark:border-gray-700">

                                <div class="p-2 sm:p-4 h-80 min-h-80 text-sm overflow-auto primary-scrollbar">
                                    <!-- Typing... -->

                                    <ul class="chat-screen | flex flex-col items-center gap-8">
                                        <li class="streams w-full">
                                            <div class="date text-center block mx-auto mb-10">
                                                <span class="inline-block bg-accent-400 text-accent-720 rounded-lg px-4 py-2">FEB 13, 2024</span>
                                            </div>
                                            <ul class="events | flex flex-col gap-4">
                                                <li data-type="host" class="event">
                                                    <div class="inline-block max-w-lg">
                                                        <div class="content">
                                                            <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                                <div class="flex items-center justify-between gap-8 mb-2">
                                                                    <div class="font-bold">Me</div>
                                                                    <div class="time | text-accent-720">07:20pm</div>
                                                                </div>
                                                                <div class="body">Hello Mr Alade</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li data-type="client" class="event">
                                                    <div class="inline-block max-w-lg">
                                                        <div class="content">
                                                            <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                                <div class="flex items-center justify-between gap-8 mb-2">
                                                                    <div class="font-bold">Mr Alade</div>
                                                                    <div class="time | text-accent-720">07:20pm</div>
                                                                </div>
                                                                <div class="body">Hi</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li data-type="host" class="event">
                                                    <div class="inline-block max-w-lg">
                                                        <div class="content">
                                                            <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                                <div class="flex items-center justify-between gap-8 mb-2">
                                                                    <div class="font-bold">Me</div>
                                                                    <div class="time | text-accent-720">07:22pm</div>
                                                                </div>
                                                                <div class="body">Did you get the memo?</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li data-type="client" class="event">
                                                    <div class="inline-block max-w-lg">
                                                        <div class="content">
                                                            <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                                <div class="flex items-center justify-between gap-8 mb-2">
                                                                    <div class="font-bold">Mr Alade</div>
                                                                    <div class="time | text-accent-720">07:20pm</div>
                                                                </div>
                                                                <div class="body">Haven't checked my mail today.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li data-type="client" class="event">
                                                    <div class="inline-block max-w-lg">
                                                        <div class="content">
                                                            <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                                <div class="flex items-center justify-between gap-8 mb-2">
                                                                    <div class="font-bold">Mr Alade</div>
                                                                    <div class="time | text-accent-720">07:20pm</div>
                                                                </div>
                                                                <div class="body"> I'm goin to look it up rightaway</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li data-type="host" class="event">
                                                    <div class="inline-block max-w-lg">
                                                        <div class="content">
                                                            <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                                <div class="flex items-center justify-between gap-8 mb-2">
                                                                    <div class="font-bold">Me</div>
                                                                    <div class="time | text-accent-720">07:25pm</div>
                                                                </div>
                                                                <div class="body">Please do, it is very important</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li data-type="client" class="event">
                                                    <div class="inline-block max-w-lg">
                                                        <div class="content">
                                                            <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                                <div class="flex items-center justify-between gap-8 mb-2">
                                                                    <div class="font-bold">Mr Alade</div>
                                                                    <div class="time | text-accent-720">07:25pm</div>
                                                                </div>
                                                                <div class="body">Thank you.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="streams w-full">
                                            <div class="date text-center block mx-auto mb-10">
                                                <span class="inline-block bg-accent-400 text-accent-720 rounded-lg px-4 py-2">FEB 15, 2024</span>
                                            </div>
                                            <ul class="events | flex flex-col gap-4">
                                                <li data-type="client" class="event">
                                                    <div class="inline-block max-w-lg">
                                                        <div class="content">
                                                            <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                                <div class="flex items-center justify-between gap-8 mb-2">
                                                                    <div class="font-bold">Mr Alade</div>
                                                                    <div class="time | text-accent-720">08:00am</div>
                                                                </div>
                                                                <div class="body">Are you in his office?</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li data-type="host" class="event">
                                                    <div class="inline-block max-w-lg">
                                                        <div class="content">
                                                            <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                                <div class="flex items-center justify-between gap-8 mb-2">
                                                                    <div class="font-bold">Me</div>
                                                                    <div class="time | text-accent-720">09:20am</div>
                                                                </div>
                                                                <div class="body">Not yet</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li data-type="host" class="event">
                                                    <div class="inline-block max-w-lg">
                                                        <div class="content">
                                                            <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                                <div class="flex items-center justify-between gap-8 mb-2">
                                                                    <div class="font-bold">Me</div>
                                                                    <div class="time | text-accent-720">09:20am</div>
                                                                </div>
                                                                <div class="body">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio rem fugit facilis consequuntur non sed inventore officiis enim iste maxime laboriosam laudantium, labore soluta corrupti reprehenderit ab tenetur nesciunt accusamus veritatis expedita modi possimus? Ut, quod impedit quo iure suscipit eos vel perspiciatis tempore assumenda molestiae ab eveniet sed optio.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>


                                <div class="px-2 py-4 sm:x-4 sm:py-8 bg-white border-t border-gray-200 rounded-b-lg dark:bg-gray-800 dark:border-gray-700">
                                    <div class="relative">
                                        <form action="">
                                            <button type="submit" class="absolute inset-y-0 end-0 flex items-center pe-3.5">
                                                <img src="./assets/icons/paper-plane-blue.svg" alt="">
                                            </button>
                                            <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pe-10 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-primary-500" required>
                                        </form>
                                    </div>
                                </div>

                                <!--  -->

                                <div class="px-2 py-4 sm:x-4 sm:py-8">
                                    <hr class="mb-4 sm:mb-8">
                                    <p class="text-center text-accent-720">Appointment completed. Chat will expire in 5days</p>
                                    <div class="my-4"></div>
                                    <button type="submit" class="text-white bg-primary-500 hover:bg-primary-800 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full max-w-md block mx-auto px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                        Export chat
                                    </button>
                                </div>
                            </div>

                        </section>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>