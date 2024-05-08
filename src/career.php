<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php
$routes = array("Home", "Career");
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>



<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <!-- filter and search section -->
    <section>
        <h2 class="sr-only">Filter and search products</h2>
        <div class="flex items-center justify-between">
            <div>
                <div class="relative">
                    <button class="absolute inset-y-0 end-0 flex items-center pe-3.5">
                        <i class="fas fa-search"></i>
                    </button>
                    <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pe-10 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-primary-500" placeholder="Search by title">
                </div>
            </div>
            <div>
                <select id="filter-jobs" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                    <option selected>Sort by</option>
                    <option value="all">All job type</option>
                    <option value="full-time">Full time</option>
                    <option value="contract">Contract</option>
                </select>
            </div>
        </div>
    </section>

    <div class="my-6"></div>

    <section>
        <h3 class="sr-only">Job list</h3>
        <p class="font-semibold text-accent-50 text-center py-32">There are no opening positions at the moment</p>
        <ul class="flex flex-col gap-4">
            <li>
                <div class="p-4 lg:p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center sm:justify-between">
                        <div>
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Medical Doctor</h5>
                            <a href="career-job-details.php?jobId="123">
                                <p class="text-sm font-semibold text-alt-300">More details</p>
                            </a>
                        </div>
                        <a href="career-job-application.php?jobId="223" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-500 rounded-lg hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Apply Now
                        </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="p-4 lg:p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center sm:justify-between">
                        <div>
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Nurses</h5>
                            <a href="career-job-details.php?jobId="123">
                                <p class="text-sm font-semibold text-alt-300">More details</p>
                            </a>
                        </div>
                        <a href="career-job-application.php?jobId="223" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-500 rounded-lg hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Apply Now
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </section>



    <!-- book appointment banner -->
    <?php include_once(__DIR__ . "./components/book-appointment-banner.php"); ?>
</div>

<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>