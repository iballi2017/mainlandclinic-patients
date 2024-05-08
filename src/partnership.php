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


        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap justify-center -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-flex flex-col items-center gap-4 p-4 border-b-2 rounded-t-lg" id="medical-expert-tab" data-tabs-target="#medical-expert" type="button" role="tab" aria-controls="medical-expert" aria-selected="false">
                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 30C2.675 30 1.96875 29.7062 1.38125 29.1187C0.79375 28.5312 0.5 27.825 0.5 27V9C0.5 8.175 0.79375 7.46875 1.38125 6.88125C1.96875 6.29375 2.675 6 3.5 6H9.5V3C9.5 2.175 9.79375 1.46875 10.3812 0.88125C10.9687 0.29375 11.675 0 12.5 0H18.5C19.325 0 20.0313 0.29375 20.6188 0.88125C21.2063 1.46875 21.5 2.175 21.5 3V6H27.5C28.325 6 29.0312 6.29375 29.6187 6.88125C30.2062 7.46875 30.5 8.175 30.5 9V27C30.5 27.825 30.2062 28.5312 29.6187 29.1187C29.0312 29.7062 28.325 30 27.5 30H3.5ZM3.5 27H27.5V9H3.5V27ZM12.5 6H18.5V3H12.5V6ZM14 19.5V24H17V19.5H21.5V16.5H17V12H14V16.5H9.5V19.5H14Z" fill="#C3C3C3" />
                        </svg>
                        <!-- 17A110 -->
                        <!-- C3C3C3 -->
                        <!-- <img src="./assets/icons/medical_services_FILL0_wght400_GRAD0_opsz241.svg" alt=""> -->
                        <span>Medical Expertise</span>
                    </button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-flex flex-col items-center gap-4 p-4 border-b-2 font-semibold rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="tech-integration-tab" data-tabs-target="#tech-integration" type="button" role="tab" aria-controls="tech-integration" aria-selected="false">

                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.75 24.75H11.25V16H7.75V24.75ZM21.75 24.75H25.25V7.25H21.75V24.75ZM14.75 24.75H18.25V19.5H14.75V24.75ZM14.75 16H18.25V12.5H14.75V16ZM4.25 31.75C3.2875 31.75 2.46354 31.4073 1.77812 30.7219C1.09271 30.0365 0.75 29.2125 0.75 28.25V3.75C0.75 2.7875 1.09271 1.96354 1.77812 1.27812C2.46354 0.592708 3.2875 0.25 4.25 0.25H28.75C29.7125 0.25 30.5365 0.592708 31.2219 1.27812C31.9073 1.96354 32.25 2.7875 32.25 3.75V28.25C32.25 29.2125 31.9073 30.0365 31.2219 30.7219C30.5365 31.4073 29.7125 31.75 28.75 31.75H4.25ZM4.25 28.25H28.75V3.75H4.25V28.25Z" fill="#C4C4C4" />
                        </svg>

                        <span>Technology Integration</span>
                    </button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-flex flex-col items-center gap-4 p-4 border-b-2 font-semibold rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="community-engagement-tab" data-tabs-target="#community-engagement" type="button" role="tab" aria-controls="community-engagement" aria-selected="false">
                        <span class="block"> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.2 22.4C12.08 22.4 12.8333 22.0867 13.46 21.46C14.0867 20.8333 14.4 20.08 14.4 19.2C14.4 18.32 14.0867 17.5667 13.46 16.94C12.8333 16.3133 12.08 16 11.2 16C10.32 16 9.56667 16.3133 8.94 16.94C8.31333 17.5667 8 18.32 8 19.2C8 20.08 8.31333 20.8333 8.94 21.46C9.56667 22.0867 10.32 22.4 11.2 22.4ZM20.8 22.4C21.68 22.4 22.4333 22.0867 23.06 21.46C23.6867 20.8333 24 20.08 24 19.2C24 18.32 23.6867 17.5667 23.06 16.94C22.4333 16.3133 21.68 16 20.8 16C19.92 16 19.1667 16.3133 18.54 16.94C17.9133 17.5667 17.6 18.32 17.6 19.2C17.6 20.08 17.9133 20.8333 18.54 21.46C19.1667 22.0867 19.92 22.4 20.8 22.4ZM16 14.4C16.88 14.4 17.6333 14.0867 18.26 13.46C18.8867 12.8333 19.2 12.08 19.2 11.2C19.2 10.32 18.8867 9.56667 18.26 8.94C17.6333 8.31333 16.88 8 16 8C15.12 8 14.3667 8.31333 13.74 8.94C13.1133 9.56667 12.8 10.32 12.8 11.2C12.8 12.08 13.1133 12.8333 13.74 13.46C14.3667 14.0867 15.12 14.4 16 14.4ZM16 32C13.7867 32 11.7067 31.58 9.76 30.74C7.81333 29.9 6.12 28.76 4.68 27.32C3.24 25.88 2.1 24.1867 1.26 22.24C0.42 20.2933 0 18.2133 0 16C0 13.7867 0.42 11.7067 1.26 9.76C2.1 7.81333 3.24 6.12 4.68 4.68C6.12 3.24 7.81333 2.1 9.76 1.26C11.7067 0.42 13.7867 0 16 0C18.2133 0 20.2933 0.42 22.24 1.26C24.1867 2.1 25.88 3.24 27.32 4.68C28.76 6.12 29.9 7.81333 30.74 9.76C31.58 11.7067 32 13.7867 32 16C32 18.2133 31.58 20.2933 30.74 22.24C29.9 24.1867 28.76 25.88 27.32 27.32C25.88 28.76 24.1867 29.9 22.24 30.74C20.2933 31.58 18.2133 32 16 32ZM16 28.8C19.5733 28.8 22.6 27.56 25.08 25.08C27.56 22.6 28.8 19.5733 28.8 16C28.8 12.4267 27.56 9.4 25.08 6.92C22.6 4.44 19.5733 3.2 16 3.2C12.4267 3.2 9.4 4.44 6.92 6.92C4.44 9.4 3.2 12.4267 3.2 16C3.2 19.5733 4.44 22.6 6.92 25.08C9.4 27.56 12.4267 28.8 16 28.8Z" fill="#C4C4C4" />
                            </svg>
                        </span>
                        <span class="block">
                            Community Engagement</span>
                    </button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="medical-expert" role="tabpanel" aria-labelledby="medical-expert-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">medical-expert tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="tech-integration" role="tabpanel" aria-labelledby="tech-integration-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">tech-integration tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="community-engagement" role="tabpanel" aria-labelledby="community-engagement-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">community-engagement tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
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