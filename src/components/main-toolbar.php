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
                    <div class="flex items-center space-x-4 navlist">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#" class="block py-4 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium" aria-current="page">About</a>
                        <a href="#" class="block py-4 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium">Services</a>
                        <a href="#" class="block py-4 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium">Contact Us</a>
                        <a href="#" class="block py-4 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium">Career</a>
                        <a href="#" class="block py-4 text-secondary-500 hover:bg-gray-50 px-3 text-sm font-medium">Shop</a>
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