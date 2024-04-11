<form action="">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12">
            <label for="medical-lab-report" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload reports (Optional)</label>
            <div class="overflow-hidden relative flex items-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <input type="text" id="ui-control" readonly class="w-full border-transparent focus:border-transparent focus:ring-0" required />
                <button type="button" id="trigger" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <span class="hidden sm:block">Upload</span>
                    <i class="fas fa-upload sm:hidden"></i>
                </button>

                <input type="file" name="" id="medical-lab-report" class="absolute right-0 invisible">
            </div>

        </div>
    </div>
    <div class="my-8"></div>
    <button type="submit" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm w-full inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save</button>

</form>


<ul>
    <li class="flex flex-wrap items-center justify-between">
        <p class="text-alt-200">Lorem, ipsum dolor.</p>
        <button class="text-sm bg-red-500 text-white hover:text-blue-500 px-2.5 py-1 rounded">Delete</button>
    </li>
</ul>


<script>
    const file_input = document.querySelector("input[type='file']");
    const trigger = document.querySelector("#trigger");
    const ui_control = document.querySelector("#ui-control");
    file_input.focus()
    file_input.addEventListener("change", (e) => {
        ui_control.value = e.target.files[0].name
    })

    trigger.addEventListener("click", () => {
        file_input.click()
    })
</script>