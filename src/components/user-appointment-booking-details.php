<!-- user-appointment-booking-details-app works! -->

<div class="px-4 py-3 flex overflow-auto text-sm font-semibold text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
    <div class="flex items-center gap-2">
        <button class="back-history-btn">
            <i class="fas fa-arrow-left"></i>
        </button>
        <h2>Appointment Details</h2>
    </div>
</div>
<section class="p-4">
    <!-- Appointment information -->

    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="details-tab" data-tabs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="false">Details</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="chat-tab" data-tabs-target="#chat" type="button" role="tab" aria-controls="chat" aria-selected="false">Chat</button>
            </li>
        </ul>
    </div>
    <div id="default-tab-content">
        <div class="hidden rounded-lg" id="details" role="tabpanel" aria-labelledby="details-tab">

            <div class="border rounded-lg">
                <div class="flex justify-between flex-wrap sm:flex-nowrap text-sm">
                    <div class="p-2 sm:p-4 leading-normal">
                        <h5 class="font-semibold text-lg">Telemedicine</h5>
                        <h6 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">₦2,400.00</h6>
                        <span class="inline-block mb-2 bg-orange-100 text-orange-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-orange-900 dark:text-orange-300">Pending</span>
                        <div class="flex items-center gap-4 flex-nowrap mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <span>Date:&nbsp;15-03-2023</span>
                            <span>Time:&nbsp;07:00am</span>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <button href="#" class="block text-nowrap text-xs text-red-500 px-6 py-2 rounded border border-red-500 font-semibold">
                            Cancelled
                        </button>
                        <a href="#" class="rounded py-2 px-3 block text-center text-nowrap text-xs bg-primary-500 hover:bg-primary-600 text-white font-semibold">
                            Reschedule
                        </a>
                    </div>
                </div>
            </div>

            <div class="my-4"></div>

            <section class="p-2 sm:p-4 border rounded-lg">
                <h4 class="border-b pb-2 mb-2 font-semibold text-lg">Medical Concerns</h4>
                <dl>
                    <dt class="font-semibold">Primary/main</dt>
                    <dd class="mb-4">I am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach pain</dd>

                    <dt class="font-semibold">Other</dt>
                    <dd>Had flu before now Had flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before now</dd>
                </dl>
            </section>

            <section class="p-2 sm:p-4 border rounded-lg">
                <h4 class="border-b pb-2 mb-2 font-semibold text-lg">Payment information</h4>
                <dl>
                    <dt class="font-semibold">Payment method</dt>
                    <dd class="mb-4">
                        Pay with cards, Bank Transfer or USSD
                    </dd>

                    <dt class="font-semibold">Payment Details</dt>
                    <dd>
                        <p>
                            Items total:&nbsp;₦25, 000.00
                        </p>
                        <div class="my-2"></div>
                        <p>Total:&nbsp;₦25,000.00 </p>
                    </dd>
                </dl>
            </section>
        </div>
        <div class="hidden p-4 rounded-lg" id="chat" role="tabpanel" aria-labelledby="chat-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Chat tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
        </div>
    </div>

</section>