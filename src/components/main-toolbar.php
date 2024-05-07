<nav class="main-toolbar | bg-white sticky-top sticky z-40">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 md:h-auto items-center justify-between">
            <div class="absolute inset-y-0 right-0 flex items-center md:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400" aria-expanded="false" data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-start md:items-stretch md:justify-start">
                <a href="./" class="flex flex-shrink-0 items-center">
                    <!-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"> -->
                    <img class="h-8 w-auto" src="./assets/images/brand-logo.svg" alt="Mainlandclinic">
                </a>
                <!-- <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4"> -->
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <!-- <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Dashboard</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Team</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Projects</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
                    </div>
                </div> -->
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center gap-2 pr-2 md:static md:inset-auto md:ml-6 md:pr-0">
                <div class="hidden md:ml-6 md:block">
                    <div class="flex items-center space-x-8 navlist">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="about-us.php" class="block py-8 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium" aria-current="page">About us</a>

                        <!-- Services -->
                        <button id="dropdownServicesButton" data-dropdown-toggle="dropdownServices" data-dropdown-delay="500" data-dropdown-trigger="hover" class="font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                            Services
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownServices" class="z-10 hidden min-w-64 px-4 bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                            <ul class="py-2 -left-8 -right-8 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownServicesButton">
                                <li>
                                    <a href="services_wellness-advisory-and-testing.php" class="whitespace-nowrap block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">
                                        Wellness Advisory and Testing
                                    </a>
                                </li>
                                <li>
                                    <a href="services_telemedicine.php" target="_blank" class="whitespace-nowrap block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">
                                        Telemedicine
                                    </a>
                                </li>
                                <li>
                                    <a href="services_telemedicine.php" class="whitespace-nowrap block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">
                                        Home Care (Live in) Nursing
                                    </a>
                                </li>
                                <li>
                                    <a href="services_employment-and-other-related-testing.php" class="whitespace-nowrap block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">
                                        Employment and other related testing
                                    </a>
                                </li>
                                <li>
                                    <a href="services_ambulance.php" class="whitespace-nowrap block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">
                                        Ambulance services
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Others -->
                        <button id="dropdownOthersButton" data-dropdown-toggle="dropdownOthers" data-dropdown-delay="500" data-dropdown-trigger="hover" class="font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                            Others
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownOthers" class="z-10 hidden min-w-64 px-4 bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                            <ul class="py-2 -left-8 -right-8 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownOthersButton">
                                <li>
                                    <a href="services_manage-clinics.php" class="whitespace-nowrap block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">
                                        Manage clinics
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="whitespace-nowrap block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">
                                        Support & giving
                                    </a>
                                </li>
                                <li>

                                    <a href="#" class="whitespace-nowrap block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">
                                        Partnership
                                    </a>
                                </li>
                                <li>
                                    <a href="career.php" class="whitespace-nowrap block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">
                                        Career
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="health-news-and-updates.php" class="block py-8 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium">Health news & updates</a>
                        <!-- <a href="#" class="block py-8 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium">Contact Us</a> -->
                        <!-- <a href="#" class="block py-8 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium">Career</a> -->
                        <a href="shop.php" class="block py-8 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium">Shop</a>

                        <!-- <a href="shopping-cart.php" aria-label="shopping cart" class="p-2 md:p-1.5 rounded-full bg-white">
                            <span class="block max-w-4">
                                <img src="./assets/icons/icon-shopping-cart-outline-rounded.svg" alt="">
                            </span>
                        </a> -->
                        <a href="book-appointment.php" class="text-nowrap text-white bg-primary-500 rounded-r-full rounded-l-full hover:bg-primary-600 hover:text-white px-6 py-2 text-sm font-medium">Book an appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <!-- <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2"> -->
    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
    <!-- <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a> -->
    <!-- </div>
    </div> -->


    <!-- mobile-main-toolbar -->
    <div class="sm:hidden">
        <?php include_once(__DIR__ . "./mobile-main-toolbar.php"); ?>
    </div>
</nav>

<!-- <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button> -->