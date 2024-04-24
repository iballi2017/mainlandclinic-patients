<!-- user-order-details-app works! -->

<div class="px-4 py-3 flex overflow-auto text-sm font-semibold text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
    <div class="flex items-center gap-2">
        <button class="back-history-btn">
            <i class="fas fa-arrow-left"></i>
        </button>
        <h2>Order Details</h2>
    </div>
</div>
<section>
    <!-- Order information -->
    <h3 class="sr-only">Order information</h3>
    <ul class="text-sm py-4 leading-normal">
        <li class="font-semibold">
            Order number 12345324535
        </li>
        <li>
            1 Items
        </li>
        <li>
            Placed on 15-03-2023
        </li>
        <li>
            Total: ₦2,400.00
        </li>
    </ul>
</section>
<section>
    <h3 class="text-lg font-semibold">Item</h3>

    <div class="flex items-center flex-wrap p-2 border rounded-lg mt-4">
        <div class="basis-full sm:basis-1/5">
            <img class="object-cover w-full h-52 sm:h-96 md:h-auto md:w-48 md:rounded-none" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHYbvesaUJWb2Z7F_-FoKthdQwuMlTEcHsWw&s" alt="">
        </div>
        <div class="basis-full sm:basis-4/5">
            <div class="flex justify-between flex-wrap sm:flex-nowrap text-sm">
                <div class="p-2 sm:p-4 leading-normal">
                    <h5>Combo 10 urine strip</h5>
                    <h6 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">₦2,400.00</h6>
                    <span class="inline-block mb-2 bg-orange-100 text-orange-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-orange-900 dark:text-orange-300">Pending</span>
                    <span class="inline-block mb-2 bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Completed</span>
                    <span class="inline-block mb-2 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-900 dark:text-gray-300">Cancelled</span>
                    <p>Qty: 2</p>
                    <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">On 15-03-2023</div>
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <div>
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="rounded py-2 px-6 block text-center text-nowrap text-xs bg-red-700 hover:bg-red-600 text-white font-semibold">Cancel</button>
                        <a href="#" class="rounded py-2 px-3 block text-center text-nowrap text-xs bg-primary-500 hover:bg-primary-600 text-white font-semibold">Buy again</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="my-4"></div>
<section>
    <h4 class="sr-only">Payment and delivery information</h4>
    <div class="grid grid-cols-2 items-start gap-4">
        <section class="col-span-2 sm:col-span-1 h-full bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
            <h5 class="px-4 py-3 font-semibold capitalize">Payment Information</h5>
            <div class="px-4 py-3 text-sm border-t border-gray-200">
                <section>
                    <h6 class="font-semibold mb-2">Payment Method</h6>
                    <p>Pay with cards, Bank Transfer or USSD</p>
                </section>
                <div class="my-8"></div>
                <section>
                    <h6 class="font-semibold mb-2">Payment Details</h6>
                    <p>
                    <ul class="leading-7">
                        <li>
                            Items total:&nbsp;₦2,400.00
                        </li>
                        <li>
                            Delivery fees:&nbsp;₦10.00
                        </li>
                    </ul>
                    </p>
                </section>
            </div>
        </section>

        <!--  -->
        <section class="col-span-2 sm:col-span-1 h-full bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
            <h5 class="px-4 py-3 font-semibold capitalize">delivery Information</h5>
            <div class="px-4 py-3 text-sm border-t border-gray-200">
                <section>
                    <h6 class="font-semibold mb-2">Delivery Method</h6>
                    <p>Door delivery</p>
                </section>
                <div class="my-8"></div>
                <section>
                    <h6 class="font-semibold mb-2">Shipping Address</h6>
                    <p>
                    <ul class="leading-7">
                        <li>
                            <i class="fas fa-user"></i>&nbsp;Akinolu Mogaji
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>&nbsp;23, Ogun street, imole estate, mushin, Lagos State, Nigeria
                        </li>
                    </ul>
                    </p>
                </section>
            </div>
        </section>

    </div>
</section>



<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 font-normal text-gray-500 dark:text-gray-400">Are you sure you want to cancel this order?</h3>
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Yes
                </button>
                <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No</button>
            </div>
        </div>
    </div>
</div>