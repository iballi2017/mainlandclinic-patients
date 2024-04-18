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
        <div class="stepper overflow-hidden">
            <ul class="pages">
                <li class="page">Step 1</li>
                <li class="page">Step 2</li>
                <li class="page">Step 3</li>
                <li class="page">Step 4</li>
            </ul>
        </div>

        <ul class="flex items-center gap-8 my-8">
            <li>
                <button type="button" class="step-backward">Previous</button>
            </li>
            <li>
                <button type="button" class="step-forward">Next</button>
            </li>
        </ul>
    </form>

</div>


<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>