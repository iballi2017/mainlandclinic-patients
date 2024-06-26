<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php
$routes = array("Home", "Health News and Updates");
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>

<section>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <!-- filter and search section -->
        <h2 class="sr-only">Filter and search products</h2>
        <div class="flex items-center justify-between">
            <div>
                <div class="relative">
                    <button class="absolute inset-y-0 end-0 flex items-center pe-3.5">
                        <i class="fas fa-search"></i>
                    </button>
                    <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pe-10 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-primary-500" placeholder="Search">
                </div>
            </div>
            <div>
                <select id="filter-blogpost" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                    <option selected>Sort by</option>
                    <option value="all">All</option>
                    <option value="average-rating">....</option>
                </select>
            </div>
        </div>

    </div>
</section>
<div class="my-4"></div>

<section>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <ul class="grid grid-cols-12 gap-2 sm:gap-4 xl:gap-8">
            <li class="col-span-12 sm:col-span-6">
                <div class="blogpost-card | bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="health-news-details.php?id=123" class="block h-60 overflow-hidden">
                        <img class="rounded-t-lg" src="https://images.pexels.com/photos/733856/pexels-photo-733856.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="w-full" />
                    </a>
                    <div class="p-5">
                        <a href="health-news-details.php?id=123">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Why health is wealth
                            </h5>
                        </a>
                        <p class="body | font-normal">
                            Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <hr class="my-4">
                        <small class="flex items-center gap-16">
                            <span>Friday, 5th of Jan 2024</span>
                            <p>Posted by Admin</p>
                        </small>
                    </div>
                </div>

            </li>
            <li class="col-span-12 sm:col-span-6">
                <div class="blogpost-card | bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="health-news-details.php?id=456" class="block h-60 overflow-hidden">
                        <img class="rounded-t-lg" src="https://images.pexels.com/photos/40568/medical-appointment-doctor-healthcare-40568.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="w-full" />
                    </a>
                    <div class="p-5">
                        <a href="health-news-details.php#?id=456">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Why health is wealth
                            </h5>
                        </a>
                        <p class="body | font-normal">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque fugiat molestiae impedit quas, libero itaque! Ab voluptatibus at natus tempora ullam doloremque velit ex delectus sequi iure, optio, temporibus ipsum repellendus tempore impedit reprehenderit minima porro labore dolor. Quisquam et enim temporibus a libero fugit consectetur voluptatibus sequi vel molestiae?
                        </p>
                        <hr class="my-4">
                        <small class="flex items-center gap-16">
                            <span>Friday, 5th of Jan 2024</span>
                            <p>Posted by Admin</p>
                        </small>
                    </div>
                </div>

            </li>
        </ul>

        <div class="my-16"></div>

        <div class="text-center">
            <nav aria-label="Page navigation example">
                <ul class="inline-flex -space-x-px h-10 text-sm">
                    <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="flex items-center justify-center px-4 h-10 text-green-600 border border-gray-300 bg-green-50 hover:bg-green-100 hover:text-green-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</section>


<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>