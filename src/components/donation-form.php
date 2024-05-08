<form class="" autocomplete="off">
    <fieldset>
        <legend class="mb-2 text-base font-semibold">Bill</legend>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-6">
                <label for="amount" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
                <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
            </div>
            <div class="col-span-6">                
            <label for="type" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                <select id="type" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="" selected>Select</option>
                    <option value="...">...</option>
                </select>
            </div>
        </div>
    </fieldset>
    <div class="my-4"></div>
    <fieldset>
        <legend class="mb-2 text-base font-semibold">Billing Information</legend>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-6">
                <label for="first_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
            </div>
            <div class="col-span-6">
                <label for="last_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
            </div>
            <div class="col-span-12 sm:col-span-6">
                <label for="email" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
            </div>
            <div class="col-span-12 sm:col-span-6">
                <label for="phone" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
            </div>
        </div>
    </fieldset>
    <div class="my-8"></div>
    <button type="submit" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm w-full sm:w-auto inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
       Payment Method
    </button>

</form>