<!-- <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button> -->

<aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 right-24 z-40 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 pt-4 pb-32 overflow-y-auto remove-scrollbar bg-white dark:bg-gray-800">
        <a href="./" class="flex flex-shrink-0 items-center mb-8">
            <!-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"> -->
            <img class="h-8 w-auto" src="./assets/images/brand-logo.svg" alt="Mainlandclinic">
        </a>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="./" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span>Home</span>
                </a>
            </li>
            <li>
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="services-dropdown" data-collapse-toggle="services-dropdown">
                    <span class="flex-1 text-left rtl:text-right whitespace-nowrap">Services</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="services-dropdown" class="hidden py-2 space-y-2">
                    <li>
                        <a href="services_wellness-advisory-and-testing.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            Wellness Advisory and Testing
                        </a>
                    </li>
                    <li>
                        <a href="services_telemedicine.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            Telemedicine
                        </a>
                    </li>
                    <li>
                        <a href="services_home-care-live-in-nursing.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            Home Care (Live in) Nursing
                        </a>
                    </li>
                    <li>
                        <a href="services_employment-and-other-related-testing.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            Employment and other related testing
                        </a>
                    </li>
                    <li>
                        <a href="services_ambulance.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            Ambulance services
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="services_manage-clinics.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span>Manage clinics</span>
                </a>
            </li>
            <li>
                <a href="services_support-and-giving.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span> Support & giving</span>
                </a>
            </li>
            <li>
                <a href="partnership.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span>Partnership</span>
                </a>
            </li>
            <li>
                <a href="shop.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span>Shop</span>
                </a>
            </li>
            <li>
                <a href="career.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span>Career</span>
                </a>
            </li>
            <li>
                <a href="book-appointment.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span>Book appointment</span>
                </a>
            </li>
            <li>
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="my-account-dropdown" data-collapse-toggle="my-account-dropdown">
                    <span class="flex-1 text-left rtl:text-right whitespace-nowrap">My Account</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="my-account-dropdown" class="hidden py-2 space-y-2">
                    <li>
                        <a href="user-profile.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            My profile
                        </a>
                    </li>
                    <li>
                        <a href="user-appointment-history.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            Appointment history
                        </a>
                    </li>
                    <li>
                        <a href="user-orders.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            My order history
                        </a>
                    </li>
                    <li>
                        <a href="user-wishlist.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            Wishlist
                        </a>
                    </li>
                    <!-- <li>
                        <a href="logout.php" class="flex items-center w-full p-2 text-red-400 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            Logout
                        </a>
                    </li> -->
                </ul>
            </li>
            <li>
                <a href="logout.php" class="flex items-center p-2 text-red-400 transition duration-75 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>