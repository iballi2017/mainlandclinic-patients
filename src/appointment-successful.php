<!-- order-successful-app works! -->
<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>


<div class="my-4"></div>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

    <div class="p-2 sm:p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">


        <div class="min-h-96 flex place-content-center flex-col">

            <div class="tick-icon | hide relative inline-flex mx-auto mb-12">
                <!-- tick circle -->
                <div>
                    <svg width="109" height="109" viewBox="0 0 109 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M54.5 109C84.5548 109 109 84.5548 109 54.5C109 24.4452 84.5548 0 54.5 0C24.4452 0 0 24.4452 0 54.5C0 84.5548 24.4452 109 54.5 109ZM54.5 2.65854C83.0793 2.65854 106.341 25.9207 106.341 54.5C106.341 83.0793 83.0793 106.341 54.5 106.341C25.9207 106.341 2.65854 83.0793 2.65854 54.5C2.65854 25.9207 25.9207 2.65854 54.5 2.65854Z" fill="hsl(108, 93%, 29%)" />
                    </svg>

                </div>

                <!-- tick -->
                <div class="tick-animate-wrap | absolute top-8 start-6">
                    <svg class="tick-animate mx-auto" width="61" height="37" viewBox="0 0 61 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M60.6906 2.98998L59.0975 0.855469L17.2545 33.1551L2.41596 12.8705L0.309326 14.4815L16.741 36.9274L60.6906 2.98998Z" fill="hsl(108, 93%, 29%)" />
                    </svg>
                </div>
            </div>

            <p class="text-lg font-bold text-center">Appointment submitted successfully</p>
            <div class="my-2"></div>
            <a href="book-appointment.php" class="back-history-btn | block text-center text-primary-600 font-bold">Continue</a>
        </div>

        <script>
            setTimeout(() => {
                const tick_icon = document.querySelector(".tick-icon");
                tick_icon ? (tick_icon.classList.contains("hide") ? tick_icon.classList.remove("hide") :
                    null) : null;
            }, 1000);
        </script>
    </div>
</div>

<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>