<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>


<!-- Hero sliders -->
<!-- OwlCarousel for Hero -->
<section>
    <div class="hero-owl-slider | owl-carousel owl-theme">
        <!-- Slide Onew -->
        <div class="hero-item relative animated owl-animated-out owl-animated-in classNameOut classNameIn">
            <img src="./assets/images/hero-banner-1.jpg" class="block w-full" alt="Your Health, Our Priority">
            <div class="absolute top-0 left-0 w-full h-full flex items-center">
                <div class="w-full">
                    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                        <div class="grid grid-cols-12 justify-start">
                            <div class="col-span-12 sm:col-span-7 p-4" style="background: rgba(0, 0, 0, .4);">
                                <h1 class="fs-hero-title text-white animated animate__slideInDown">
                                    Healthy Starts Here
                                </h1>
                                <p class="fs-400 text-white mb-4 pb-2 animated animate__fadeIn">
                                    Experience Quality
                                    Healthcare and Wellness Support at Our State-of-the-Art Clinic
                                </p>
                                <a href="" class="bg-primary-500 text-white rounded py-2 sm:py-3 px-4 sm:px-5 animated animate__slideInLeft">
                                    Read
                                    More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide Two -->
        <div class="hero-item relative animated owl-animated-out owl-animated-in classNameOut classNameIn">
            <img src="./assets/images/hero-banner-2.jpg" class="block w-full" alt="Experience Better Health">
            <div class="absolute top-0 left-0 w-full h-full flex items-center">
                <div class="w-full">
                    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                        <div class="grid grid-cols-12 justify-start">
                            <!-- <div class="sm:col-span-10 lg:col-span-8 p-4" style="background: rgba(0, 0, 0, .4);"> -->
                            <div class="col-span-12 sm:col-span-7 p-4" style="background: rgba(0, 0, 0, .4);">
                                <h1 class="fs-hero-title text-white animated animate__slideInDown">
                                    Experience Better
                                    Health
                                </h1>
                                <p class="fs-400 text-white mb-4 pb-2 animated animate__fadeIn">
                                    Trust Our Expert Team
                                    of Healthcare Professionals to Provide Quality Medical Care and Support for Your
                                    Health Needs
                                </p>
                                <a href="" class="bg-primary-500 text-white rounded py-2 sm:py-3 px-4 sm:px-5 animated animate__slideInLeft">
                                    Read
                                    More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide Three -->
        <div class="hero-item relative animated owl-animated-out owl-animated-in classNameOut classNameIn">
            <img src="./assets/images/hero-banner-3.jpg" class="block w-full" alt="Your Health, Our Priority">
            <div class="absolute top-0 left-0 w-full h-full flex items-center">
                <div class="w-full">
                    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                        <div class="grid grid-cols-12 justify-start">
                            <div class="col-span-12 lg:col-span-7 p-4" style="background: rgba(0, 0, 0, .4);">
                                <h1 class="fs-hero-title text-white animated animate__slideInDown">
                                    Your Health, Our
                                    Priority
                                </h1>
                                <p class="fs-400 text-white mb-4 pb-2 animated animate__fadeIn">
                                    Experience
                                    Compassionate Care and Comprehensive Medical Services at Our Healthcare Facility
                                </p>
                                <a href="" class="bg-primary-500 text-white rounded py-2 sm:py-3 px-4 sm:px-5 animated animate__slideInLeft">
                                    Read
                                    More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- About us -->
<section class="padding-block-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="grid grid-cols-12 md:gap-8">
            <div class="col-span-12 md:col-span-5">
                <div class="rounded-md bg-blue-300 overflow-hidden mb-3 fade-in">
                    <img src="./assets/images/featured-image-1.png" alt="Take control of your health" class="w-full">
                </div>
            </div>
            <div class="col-span-12 md:col-span-7">
                <div class="fade-in">
                    <h2 class="fs-section-title animate__animated animate__fadeIn">About us</h2>
                    <h3 class="fs-section-headline font-bold" style="max-width: 500px;">
                        Take Control of Your
                        Health Today
                    </h3>
                    <p class="line-height-400">
                        At Mainland Clinic, we are dedicated to providing the highest
                        quality of medical care and
                        wellness support to our patients. We believe that everyone deserves access to
                        compassionate,
                        personalized healthcare that meets their unique needs and goals.
                    </p>
                    <div class="my-4"></div>
                    <a href="./views/about-us.php" class="button">Read more</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Services -->
<section class="bg-accent-400 padding-block-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <!-- Display services card grid -->
        <div class="services-card-grid">
            <div class="item">
                <div class="title">
                    <h2 class="fs-section-title fade-in">Our services</h2>
                    <h3 class="fs-section-headline font-bold fade-in">Invest in Your Well -Being.</h3>
                </div>
            </div>
            <div class="item">
                <a href="./views/clinical-services.php">
                    <div class="feature-card">
                        <img src="./assets/images/feature-card-image-1.png" alt="Clinical Service" class="w-full">
                        <div class="title">
                            <span>Clinical Service</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="./views/food-handlers-test.php">
                    <div class="feature-card">
                        <img src="./assets/images/feature-card-image-2.png" alt="Clinical Service" class="w-full">
                        <div class="title">
                            <span>Food Handlers Test</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="./views/pre-employment-test.php">
                    <div class="feature-card">
                        <img src="./assets/images/feature-card-image-3.png" alt="Clinical Service" class="w-full">
                        <div class="title">
                            <span>Pre-employment Test</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="./views/fitness-wellness-test.php">
                    <div class="feature-card">
                        <img src="./assets/images/feature-card-image-4.png" alt="Clinical Service" class="w-full">
                        <div class="title">
                            <span>Fitness/Wellness Test</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="./views/telemedicine.php">
                    <div class="feature-card">
                        <img src="./assets/images/feature-card-image-5.png" alt="Clinical Service" class="w-full">
                        <div class="title">
                            <span>Telemedicine</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <div class="card border-0 h-100">
                    <div class="card-body p-4  fade-in">
                        <p class="font-medium fs-200 mb-0">Choose Health. Choose Us</p>
                        <p class="font-semibold fs-400 ff-body" style="max-width: 420px;">
                            We Care for Your
                            Health
                            and Well-Being
                        </p>
                        <div class="my-4"></div>
                        <a href="#" class="button">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Appointment Booking -->
<section class="padding-block-700">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="rainbow-type-bg rounded-md">
            <div class="flex items-center justify-between flex-wrap px-2 py-4 lg:p-8">
                <div>
                    <p class="text-white font-semibold fs-150 mb-0">Set a date with us</p>
                    <p class="text-white font-bold fs-300">Experience Compassionate Care and Expertise</p>
                </div>
                <a href="#" class="button" data-type="inverted">Book Appointment</a>
            </div>
        </div>
    </div>
</section>

<!-- Reviews -->
<section class="gray-bg padding-block-800" id="reviews">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <h2 class="text-center font-bold fs-500 fade-in">Reviews</h2>
        <p class="sub-heading fade-in">
            Learn More About Our Innovative Medical Services, Holistic Wellness
            Programs, and
            Patient-Centered
            Approach to Healthcare
        </p>

        <div class="my-12"></div>
        <!-- Set up your HTML -->
        <div class="reviews-owl-slider | owl-carousel owl-theme fade-in">
            <div class="review-card">
                <div class="review-title text-primary-500 fw-semi-bold px-6 py-6">Frank</div>
                <p class="review-body fs-50 px-6 pb-6">
                    "I can't say enough good things about Mainland Clinic.
                    The staff is
                    so friendly and welcoming, and they always take the time to listen to my concerns and
                    answer my questions. I feel like they truly care about my well-being, and I'm so
                    grateful to have them as my healthcare provider."
                </p>
                <div class="review-footer bg-primary-500 text-white fw-medium px-6 py-6">
                    <div class="foot-text fs-150">Contractor</div>
                    <div class="foot-image">
                        <img data-src="./assets/images/avartar-sample-2.jpg" alt="Reviewer image" class="img-fluid owl-lazy">
                    </div>
                </div>
            </div>
            <div class="review-card">
                <div class="review-title text-primary-500 fw-semi-bold px-6 py-6">Frank</div>
                <p class="review-body fs-50 px-6 pb-6">
                    "I can't say enough good things about Mainland Clinic.
                    The staff is
                    so friendly and welcoming, and they always take the time to listen to my concerns and
                    answer my questions. I feel like they truly care about my well-being, and I'm so
                    grateful to have them as my healthcare provider."
                </p>
                <div class="review-footer bg-primary-500 text-white fw-medium px-6 py-6">
                    <div class="foot-text fs-150">Contractor</div>
                    <div class="foot-image">
                        <img data-src="./assets/images/avartar-sample.jpg" alt="Reviewer image" class="img-fluid owl-lazy">
                    </div>
                </div>
            </div>
            <div class="review-card">
                <div class="review-title text-primary-500 fw-semi-bold px-6 py-6">Frank</div>
                <p class="review-body fs-50 px-6 pb-6">
                    "I can't say enough good things about Mainland Clinic.
                    The staff is
                    so friendly and welcoming, and they always take the time to listen to my concerns and
                    answer my questions. I feel like they truly care about my well-being, and I'm so
                    grateful to have them as my healthcare provider."
                </p>
                <div class="review-footer bg-primary-500 text-white fw-medium px-6 py-6">
                    <div class="foot-text fs-150">Contractor</div>
                    <div class="foot-image">
                        <img data-src="./assets/images/avartar-sample-2.jpg" alt="Reviewer image" class="img-fluid owl-lazy">
                    </div>
                </div>
            </div>
            <div class="review-card">
                <div class="review-title text-primary-500 fw-semi-bold px-6 py-6">Frank</div>
                <p class="review-body fs-50 px-6 pb-6">
                    "I can't say enough good things about Mainland Clinic.
                    The staff is
                    so friendly and welcoming, and they always take the time to listen to my concerns and
                    answer my questions. I feel like they truly care about my well-being, and I'm so
                    grateful to have them as my healthcare provider."
                </p>
                <div class="review-footer bg-primary-500 text-white fw-medium px-6 py-6">
                    <div class="foot-text fs-150">Contractor</div>
                    <div class="foot-image">
                        <img data-src="./assets/images/avartar-sample.jpg" alt="Reviewer image" class="img-fluid owl-lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partners -->
<section class="padding-block-700">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="grid grid-cols-12 items-center">
            <div class="col-span-12 lg:col-span-4">
                <h2 class="font-bold ff-title fade-in text-4xl">Trusted Business Partners</h2>
            </div>
            <div class="col-span-12 lg:col-span-8">
                <ul role="list" data-type="sponsors" class="ps-0 fade-in">
                    <li>
                        <div class="sponsor">
                            <img src="./assets/images/partner-logos/image-01.svg" alt="" class="img-fluid rounded">
                        </div>
                    </li>
                    <li>
                        <div class="sponsor">
                            <img src="./assets/images/partner-logos/image-02.svg" alt="" class="img-fluid rounded">
                        </div>
                    </li>
                    <li>
                        <div class="sponsor">
                            <img src="./assets/images/partner-logos/image-03.svg" alt="" class="img-fluid rounded">
                        </div>
                    </li>
                    <li>
                        <div class="sponsor">
                            <img src="./assets/images/partner-logos/image-04.svg" alt="" class="img-fluid rounded">
                        </div>
                    </li>
                    <li>
                        <div class="sponsor">
                            <img src="./assets/images/partner-logos/image-05.svg" alt="" class="img-fluid rounded">
                        </div>
                    </li>
                    <li>
                        <div class="sponsor">
                            <img src="./assets/images/partner-logos/image-06.svg" alt="" class="img-fluid rounded">
                        </div>
                    </li>
                    <li>
                        <div class="sponsor">
                            <img src="./assets/images/partner-logos/image-07.svg" alt="" class="img-fluid rounded">
                        </div>
                    </li>
                    <li>
                        <div class="sponsor">
                            <img src="./assets/images/partner-logos/image-08.svg" alt="" class="img-fluid rounded">
                        </div>
                    </li>
                    <li>
                        <div class="sponsor">
                            <img src="./assets/images/partner-logos/image-09.svg" alt="" class="img-fluid rounded">
                        </div>
                    </li>
                    <li>
                        <div class="sponsor">
                            <img src="./assets/images/partner-logos/image-10.svg" alt="" class="img-fluid rounded">
                        </div>
                    </li>
                    <li>
                        <div class="sponsor">
                            <img src="./assets/images/partner-logos/image-11.svg" alt="" class="img-fluid rounded">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>