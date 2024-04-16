<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>

<!-- page title header -->
<?php $pageTitle = "Shop";
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
                    <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pe-10 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-primary-500" placeholder="Search">
                </div>
            </div>
            <div>
                <select id="countries" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                    <option selected>Sort by</option>
                    <option value="popularity">Popularity</option>
                    <option value="latest">Latest</option>
                    <option value="average-rating">Average rating</option>
                    <option value="low-to-high">Low to high</option>
                    <option value="high-to-low">High to low</option>
                </select>
            </div>
        </div>
    </section>

    <div class="my-4"></div>

    <!-- product list -->
    <section>
        <h3 class="sr-only">Product list</h3>
        <div class="grid grid-cols-12 gap-4">
            <!-- item 1 -->
            <div class="col-span-6 sm:col-span-4 md:col-span-3 out-of-stock">
                <div class="product-listing-card flex flex-col justify-between" x-data="{ isOpen: false }" x-on:mouseenter="isOpen = true" x-on:mouseleave="isOpen = false">
                    <div class="overflow-hidden border-t border-x rounded-t-lg">
                        <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/47/761281/1.jpg?0471" alt="">
                    </div>
                    <div class="border-b border-x rounded-b-lg hover:rounded-none hover:border-b-0">
                        <div class="body p-6 b-4">
                            <a href="#">
                                <h3 class="title">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h3>
                            </a>
                            <p class="text-xl font-bold">N35,000</p>
                        </div>

                        <div x-show="isOpen">
                            <div class="bg-red-200 relative">
                                <div class="bg-white absolute left-0 right-0 -top-4 p-4 rounded-b-lg shadow-md">
                                    <div class="flex flex-col gap-2">
                                        <button type="button" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Add to cart</button>
                                        <button type="button" class="text-red-500 border border-red-500  bg-white hover:bg-red-500 hover:text-white focus:ring-1 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Add to wishlist</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item 2 -->
            <div class="col-span-6 sm:col-span-4 md:col-span-3">
                <div class="product-listing-card flex flex-col justify-between" x-data="{ isOpen: false }" x-on:mouseenter="isOpen = true" x-on:mouseleave="isOpen = false">
                    <div class="overflow-hidden border-t border-x rounded-t-lg">
                        <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/47/761281/1.jpg?0471" alt="">
                    </div>
                    <div class="border-b border-x rounded-b-lg hover:rounded-none hover:border-b-0">
                        <div class="body p-6 b-4">
                            <a href="#">
                                <h3 class="title">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis repellat ratione adipisci et sunt nam suscipit dolores aut nesciunt accusamus.
                                </h3>
                            </a>
                            <p class="text-xl font-bold">N35,000</p>
                        </div>

                        <div x-show="isOpen">
                            <div class="bg-red-200 relative">
                                <div class="bg-white absolute left-0 right-0 -top-4 p-4 rounded-b-lg shadow-md">
                                    <div class="flex flex-col gap-2">
                                        <button type="button" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Add to cart</button>
                                        <button type="button" class="text-red-500 border border-red-500  bg-white hover:bg-red-500 hover:text-white focus:ring-1 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Add to wishlist</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="my-16"></div>
<!-- foot -->
<?php include_once(__DIR__ . "./components/foot.php"); ?>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>