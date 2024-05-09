<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php
$routes = array("Home", "Partnership");
include_once(__DIR__ . "./components/page-title-header.php"); ?>

<div class="my-4"></div>


<!-- Partnership -->
<section class="padding-block-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <p>
            At Mainland Clinics, we believe in the power of collaboration to enhance healthcare outcomes and expand access to quality services in Lagos, Nigeria. Through strategic partnerships with leading healthcare providers, organizations, and community stakeholders, we aim to create a holistic healthcare ecosystem that caters to diverse needs and promotes overall well-being.
        </p>
        <div class="my-4"></div>

        At Mainland Clinics, we are committed to fostering meaningful partnerships that drive positive change and improve healthcare outcomes for individuals and families in Lagos and beyond.

    </div>
</section>

<div class="my-12"></div>
<section>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 md:px-8 md:leading-7">

        <h2 class="text-center font-bold text-xl md:text-2xl">
            Our Partnerships Focus on
        </h2>
        <p class="text-center text-accent-50 font-semibold">Learn more</p>
        <div class="my-10"></div>

        <div class="mx-auto max-w-5xl">
            <div class="mb-4 dark:border-gray-700">
                <ul class="flex flex-nowrap justify-between sm:justify-center -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="basis-1/3 sm:basis-0 sm:me-2" role="presentation">
                        <button class="inline-flex flex-col items-center gap-4 p-4 font-semibold rounded-t-lg" id="medical-expert-tab" data-tabs-target="#medical-expert" type="button" role="tab" aria-controls="medical-expert" aria-selected="false">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.6 36C2.61 36 1.7625 35.6475 1.0575 34.9425C0.3525 34.2375 0 33.39 0 32.4V10.8C0 9.81 0.3525 8.9625 1.0575 8.2575C1.7625 7.5525 2.61 7.2 3.6 7.2H10.8V3.6C10.8 2.61 11.1525 1.7625 11.8575 1.0575C12.5625 0.3525 13.41 0 14.4 0H21.6C22.59 0 23.4375 0.3525 24.1425 1.0575C24.8475 1.7625 25.2 2.61 25.2 3.6V7.2H32.4C33.39 7.2 34.2375 7.5525 34.9425 8.2575C35.6475 8.9625 36 9.81 36 10.8V32.4C36 33.39 35.6475 34.2375 34.9425 34.9425C34.2375 35.6475 33.39 36 32.4 36H3.6ZM3.6 32.4H32.4V10.8H3.6V32.4ZM14.4 7.2H21.6V3.6H14.4V7.2ZM16.2 23.4V28.8H19.8V23.4H25.2V19.8H19.8V14.4H16.2V19.8H10.8V23.4H16.2Z" fill="#C4C4C4" />
                            </svg>
                            <span>Medical Expertise</span>
                        </button>
                    </li>
                    <li class="basis-1/3 sm:basis-0 sm:me-2" role="presentation">
                        <button class="inline-flex flex-col items-center gap-4 p-4 font-semibold rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="tech-integration-tab" data-tabs-target="#tech-integration" type="button" role="tab" aria-controls="tech-integration" aria-selected="false">
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.25 28.25H12.25V18.25H8.25V28.25ZM24.25 28.25H28.25V8.25H24.25V28.25ZM16.25 28.25H20.25V22.25H16.25V28.25ZM16.25 18.25H20.25V14.25H16.25V18.25ZM4.25 36.25C3.15 36.25 2.20833 35.8583 1.425 35.075C0.641667 34.2917 0.25 33.35 0.25 32.25V4.25C0.25 3.15 0.641667 2.20833 1.425 1.425C2.20833 0.641667 3.15 0.25 4.25 0.25H32.25C33.35 0.25 34.2917 0.641667 35.075 1.425C35.8583 2.20833 36.25 3.15 36.25 4.25V32.25C36.25 33.35 35.8583 34.2917 35.075 35.075C34.2917 35.8583 33.35 36.25 32.25 36.25H4.25ZM4.25 32.25H32.25V4.25H4.25V32.25Z" fill="#C4C4C4" />
                            </svg>


                            <span>Technology Integration</span>
                        </button>
                    </li>
                    <li class="basis-1/3 sm:basis-0 sm:me-2" role="presentation">
                        <button class="inline-flex flex-col items-center gap-4 p-4 font-semibold rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="community-engagement-tab" data-tabs-target="#community-engagement" type="button" role="tab" aria-controls="community-engagement" aria-selected="false">
                            <span class="block">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.6 25.2C13.59 25.2 14.4375 24.8475 15.1425 24.1425C15.8475 23.4375 16.2 22.59 16.2 21.6C16.2 20.61 15.8475 19.7625 15.1425 19.0575C14.4375 18.3525 13.59 18 12.6 18C11.61 18 10.7625 18.3525 10.0575 19.0575C9.3525 19.7625 9 20.61 9 21.6C9 22.59 9.3525 23.4375 10.0575 24.1425C10.7625 24.8475 11.61 25.2 12.6 25.2ZM23.4 25.2C24.39 25.2 25.2375 24.8475 25.9425 24.1425C26.6475 23.4375 27 22.59 27 21.6C27 20.61 26.6475 19.7625 25.9425 19.0575C25.2375 18.3525 24.39 18 23.4 18C22.41 18 21.5625 18.3525 20.8575 19.0575C20.1525 19.7625 19.8 20.61 19.8 21.6C19.8 22.59 20.1525 23.4375 20.8575 24.1425C21.5625 24.8475 22.41 25.2 23.4 25.2ZM18 16.2C18.99 16.2 19.8375 15.8475 20.5425 15.1425C21.2475 14.4375 21.6 13.59 21.6 12.6C21.6 11.61 21.2475 10.7625 20.5425 10.0575C19.8375 9.3525 18.99 9 18 9C17.01 9 16.1625 9.3525 15.4575 10.0575C14.7525 10.7625 14.4 11.61 14.4 12.6C14.4 13.59 14.7525 14.4375 15.4575 15.1425C16.1625 15.8475 17.01 16.2 18 16.2ZM18 36C15.51 36 13.17 35.5275 10.98 34.5825C8.79 33.6375 6.885 32.355 5.265 30.735C3.645 29.115 2.3625 27.21 1.4175 25.02C0.4725 22.83 0 20.49 0 18C0 15.51 0.4725 13.17 1.4175 10.98C2.3625 8.79 3.645 6.885 5.265 5.265C6.885 3.645 8.79 2.3625 10.98 1.4175C13.17 0.4725 15.51 0 18 0C20.49 0 22.83 0.4725 25.02 1.4175C27.21 2.3625 29.115 3.645 30.735 5.265C32.355 6.885 33.6375 8.79 34.5825 10.98C35.5275 13.17 36 15.51 36 18C36 20.49 35.5275 22.83 34.5825 25.02C33.6375 27.21 32.355 29.115 30.735 30.735C29.115 32.355 27.21 33.6375 25.02 34.5825C22.83 35.5275 20.49 36 18 36ZM18 32.4C22.02 32.4 25.425 31.005 28.215 28.215C31.005 25.425 32.4 22.02 32.4 18C32.4 13.98 31.005 10.575 28.215 7.785C25.425 4.995 22.02 3.6 18 3.6C13.98 3.6 10.575 4.995 7.785 7.785C4.995 10.575 3.6 13.98 3.6 18C3.6 22.02 4.995 25.425 7.785 28.215C10.575 31.005 13.98 32.4 18 32.4Z" fill="#C4C4C4" />
                                </svg>

                            </span>
                            <span class="block">
                                Community Engagement</span>
                        </button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="medical-expert" role="tabpanel" aria-labelledby="medical-expert-tab">

                    <!-- partnership_medical-expertise-form -->
                    <?php include_once(__DIR__ . "./components/partnership_medical-expertise-form.php"); ?>
                </div>
                <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="tech-integration" role="tabpanel" aria-labelledby="tech-integration-tab">

                    <!-- partnership_technology-integration-form -->
                    <?php include_once(__DIR__ . "./components/partnership_technology-integration-form.php"); ?>
                </div>
                <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="community-engagement" role="tabpanel" aria-labelledby="community-engagement-tab">

                    <!-- partnership_community-engagement-form -->
                    <?php include_once(__DIR__ . "./components/partnership_community-engagement-form.php"); ?>
                </div>
            </div>
        </div>




        <!-- <div class="grid grid-cols-12 sm:items-center gap-4 sm:gap-8">
            <div class="col-span-12 sm:col-span-6 sm:order-last">
                <div class="md:p-8">
                    <img src="./assets/images/featured-image-3b.png" alt="image: Elderly woman and nurse smiles" class="w-full">
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:p-8 sm:order-first">
                <h3 class="text-base sm:text-lg font-bold">Volunteer Your Time</h3>
                <h4 class="text-lg sm:text-2xl font-bold">Join us in our efforts to give back by volunteering your time and skills.</h4>
                <p>Whether you're a healthcare professional looking to lend a helping hand or a community member passionate about making a difference, there are many opportunities to get involved and make a positive impact.
                </p>

                <div class="my-4"></div>
                <button type="button" data-modal-target="volunteer-modal" data-modal-toggle="volunteer-modal" class="text-primary-500 border border-primary-500 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Become a Volunteer
                </button>



            </div>
        </div> -->
        <div class="my-12"></div>
    </div>

</section>


<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>