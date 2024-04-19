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

<div class="appointment-form-stepper | mx-auto max-w-4xl px-2 sm:px-6 lg:px-8">

    <!-- Stepper Form -->
    <form action="" id="free-online-appointment-form">

        <ol class="progress | flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
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
        <div class="stepper overflow-hidden py-8 min-h-max">
            <ul class="pages ">
                <li class="page p-6">
                    <fieldset class="">
                        <legend class="text-2xl font-bold text-center">Booking an appointment with us</legend>
                        <p class="text-primary-700 font-semibold text-center">Select one to begin the process</p>

                        <div class="my-10"></div>

                        <ul class="grid grid-cols-2 items-stretch gap-4 justify-center min-h-40">
                            <li class="custom-checkbox | col-span-2 sm:col-span-1 flex flex-stretch justify-center">
                                <input type="radio" name="type_of_patient" id="new_patient" value="new_patient"
                                class="route-checkbox">
                                <label class="text-center cursor-pointer block w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700" for="new_patient">
                                    <p class="text-colored text-2xl font-bold text-accent-750">New patient</p>
                                    <p class="text-lg">Provide your Information</p>
                                </label>
                            </li>
                            <li class="custom-checkbox | col-span-2 sm:col-span-1 flex flex-stretch justify-center">
                                <input type="radio" name="type_of_patient" id="returning_patient" value="returning_patient"
                                class="route-checkbox">
                                <label class="text-center cursor-pointer block w-full py-6 px-10 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700" for="returning_patient">
                                    <p class="text-colored text-2xl font-bold text-accent-750">Returning patient</p>
                                    <p class="text-lg">Request using your Mainland clinics account</p>
                                </label>
                            </li>
                        </ul>
                    </fieldset>
                </li>
                <li class="page p-6">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident iste placeat repellendus ad debitis minima, sit nesciunt eligendi perspiciatis corrupti commodi eius nobis? Non quaerat velit temporibus commodi, explicabo dolor quae placeat distinctio consectetur enim molestiae autem, iste, odio tempore. Officia obcaecati voluptate suscipit explicabo aliquid cum cupiditate consequuntur nisi veritatis. Dolorum quam ut ratione nisi tempora sunt soluta consectetur eaque distinctio modi quasi, odio officiis quaerat nam ex, omnis cum incidunt numquam delectus perferendis veritatis est, quo repellat exercitationem. Autem, praesentium qui quaerat fugit similique voluptates. Natus nesciunt quidem amet fuga ipsa saepe in adipisci nisi. Ullam rem optio, architecto numquam illum maiores tempora. Assumenda fugit doloribus necessitatibus adipisci, esse in quo quos laudantium aliquid commodi natus fugiat hic explicabo! Atque aliquam cumque dolorum quaerat porro vero facere, ullam exercitationem non animi corporis nisi temporibus iure. Reprehenderit explicabo, suscipit officia assumenda maxime consequuntur minima. Cum cumque sunt quo est! Molestiae, voluptatibus recusandae nemo hic aspernatur veritatis placeat tempora repellat libero, vel doloribus labore quibusdam id neque rerum! Corporis nihil voluptates, veritatis cum ex maiores, similique magnam minima rem neque optio modi reprehenderit. Unde recusandae eligendi modi molestias dolores accusantium et officiis consectetur fugiat. Qui dolorum nobis optio ducimus soluta?
                </li>
                <li class="page p-6">Step 3</li>
                <li class="page p-6">Step 4</li>
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


    <!-- Stepper Form -->
    <!-- <form action="">

        <ol class="progress | flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
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
            <li class="step flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">

                    <span class="flex flex-col">
                        <span class="progress-point hidden md:flex items-center justify-center">
                            <span class="inner"></span>
                        </span>
                        <span class="text-nowrap">
                            Test
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
        <div class="stepper overflow-hidden">
            <ul class="pages">
                <li class="page">Step 1</li>
                <li class="page">Step 2</li>
                <li class="page">Step 3</li>
                <li class="page">Step 4</li>
                <li class="page">Step 5</li>
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
    </form> -->

</div>


<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>