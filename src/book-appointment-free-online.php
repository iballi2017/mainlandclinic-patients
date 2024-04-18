<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php
$routes = array("Home", "Book appointment", "Free - Book online appointment");
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>

<div class="appointment-form-stepper | mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

    <ol class="flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
        <li class="step current flex md:w-full items-center sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                <!-- <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg> -->
                <span class="flex flex-col">
                    <span class="progress-point hidden md:flex items-center justify-center">
                        <span class="inner"></span>
                    </span>
                    <span class="text-nowrap">
                        <span class="hidden sm:inline-flex sm:ms-2">Patient&nbsp;</span>Type
                    </span>
                </span>
            </span>
        </li>
        <li class="step flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">

                <span class="flex flex-col">
                    <span class="progress-point hidden md:flex items-center justify-center">
                        <span class="inner"></span>
                    </span>
                    <span class="text-nowrap">
                        <span class="hidden sm:inline-flex sm:ms-2">Patient&nbsp;</span>Information</span>
                </span>
            </span>
        </li>
        <li class="step flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">

                <span class="flex flex-col">
                    <span class="progress-point hidden md:flex items-center justify-center">
                        <span class="inner"></span>
                    </span>
                    <span class="text-nowrap">
                        <span class="hidden sm:inline-flex sm:ms-2">Main&nbsp;</span>Concern
                    </span>
                </span>
            </span>
        </li>
        <li class="step flex items-center text-nowrap">
            <span class="flex flex-col">
                <span class="progress-point hidden md:flex items-center justify-center">
                    <span class="inner"></span>
                </span>
                <span class="text-nowrap">
                    Wrap It Up
                </span>
            </span>
        </li>
    </ol>

    <!-- Stepper Form -->
    <form action="">
        <div class="stepper">
            <ul class="pages">
                <li class="page">Step 1</li>
                <li class="page">Step 2</li>
                <li class="page">Step 3</li>
                <li class="page">Step 4</li>
            </ul>
        </div>
    </form>

</div>


<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>