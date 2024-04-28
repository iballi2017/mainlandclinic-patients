<!-- user-order-list-app works! -->

<div class="flex items-center justify-between gap-2 border-b border-b-accent-650 pb-4 mb-4">
    <div class="basis-full sm:basis-1/2 text-xs">
        Showing 1-12 of 12 results
    </div>
    <div class="basis-full sm:basis-1/2 sm:flex justify-end">
        <div class="flex items-end justify-end gap-2 max-w-56 min-w-56">
            <label for="countries" class="block text-sm font-medium text-gray-900 dark:text-white">Filter:</label>
            <select id="countries" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="all" selected>All</option>
                <option>...</option>
            </select>
        </div>
    </div>
</div>


<ul class="flex flex-col gap-4 text-sm">
    <li>
        <div class="p-2 border rounded-lg">
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
                    <a href="user-appointment-chat-messenger.php?appointmentId=123" class="block text-nowrap text-xs text-green-400 font-semibold">See details</a>
                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="p-2 border rounded-lg">
            <div class="flex justify-between flex-wrap sm:flex-nowrap text-sm">
                <div class="p-2 sm:p-4 leading-normal">
                    <h5 class="font-semibold text-lg">Telemedicine</h5>
                    <h6 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">₦2,400.00</h6>
                    <span class="inline-block mb-2 bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Completed</span>
                    <div class="flex items-center gap-4 flex-nowrap mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <span>Date:&nbsp;15-03-2023</span>
                        <span>Time:&nbsp;07:00am</span>
                    </div>
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <a href="user-appointment-chat-messenger.php?appointmentId=123" class="block text-nowrap text-xs text-green-400 font-semibold">See details</a>
                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="p-2 border rounded-lg">
            <div class="flex justify-between flex-wrap sm:flex-nowrap text-sm">
                <div class="p-2 sm:p-4 leading-normal">
                    <h5 class="font-semibold text-lg">Telemedicine</h5>
                    <h6 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">₦2,400.00</h6>
                    <span class="inline-block mb-2 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-900 dark:text-gray-300">Cancelled</span>
                    <div class="flex items-center gap-4 flex-nowrap mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <span>Date:&nbsp;15-03-2023</span>
                        <span>Time:&nbsp;07:00am</span>
                    </div>
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <a href="user-appointment-chat-messenger.php?appointmentId=123" class="block text-nowrap text-xs text-green-400 font-semibold">See details</a>
                </div>
            </div>
        </div>
    </li>
</ul>