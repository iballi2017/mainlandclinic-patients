<nav class="main-toolbar | bg-white">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 sm:h-auto items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
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
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
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
            <div class="absolute inset-y-0 right-0 flex items-center gap-2 pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex items-center space-x-8 navlist">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#" class="block py-6 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium" aria-current="page">About us</a>

                        <!-- Services -->
                        <button id="dropdownServicesButton" data-dropdown-toggle="dropdownServices" data-dropdown-delay="500" data-dropdown-trigger="hover" class="font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                            Services
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownServices" class="z-10 hidden min-w-64 px-4 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 -left-8 -right-8 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownServicesButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">Clinical services</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">Fitness/Wellness test</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">Telemedicine</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">Pre-employment test</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">Food Handlers test</a>
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
                        <div id="dropdownOthers" class="z-10 hidden min-w-64 px-4 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 -left-8 -right-8 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownOthersButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">
                                        Manage clinics
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">
                                        Support & giving
                                    </a>
                                </li>
                                <li>

                                    <a href="#" class="block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">
                                        Partnership
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-center hover:bg-primary-50 hover:rounded-l-full hover:rounded-r-full dark:hover:bg-gray-600 dark:hover:text-white">
                                        Career
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="block py-6 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium">Health news & updates</a>
                        <!-- <a href="#" class="block py-6 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium">Contact Us</a> -->
                        <!-- <a href="#" class="block py-6 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium">Career</a> -->
                        <a href="#" class="block py-6 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium">Shop</a>
                        <a href="#" class="text-white bg-primary-500 rounded-r-full rounded-l-full hover:bg-primary-600 hover:text-white px-6 py-2 text-sm font-medium">Book an appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
        </div>
    </div>
</nav>