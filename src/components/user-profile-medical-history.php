<form action="">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12">
            <fieldset>
                <legend class="block w-full border-b-2 font-semibold text-md mb-4">Past Medical History</legend>
                <ul>
                    <li>
                        <div class="flex items-center mb-4">
                            <input id="asthma" type="checkbox" name="diagnosis" value="asthma" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="asthma" class="cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Asthma</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center mb-4">
                            <input id="diabetes" type="checkbox" name="diagnosis" value="diabetes" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="diabetes" class="cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Diabetes</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center mb-4">
                            <input id="seizures" type="checkbox" name="diagnosis" value="seizures" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="seizures" class="cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Seizures (Convulsions)</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center mb-4">
                            <input id="others" type="checkbox" name="diagnosis" value="others" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="others" class="cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Others</label>
                        </div>
                    </li>
                </ul>
                <div>
                    <label for="others-specification" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Please Specify if you select other, and if you don't have any other past Medical History type <strong>NA</strong></label>
                    <input type="text" id="others-specification" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                </div>
            </fieldset>
        </div>

        <div class="col-span-12">
            <fieldset>
                <legend class="sr-only block w-full border-b-2 font-semibold text-md mb-4">Past Surgical History: (Please fill out if available, and if its not available type NA)</legend>
                <label for="past-surgical-history" class="cursor-pointer block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Past Surgical History: (Please fill out if available, and if its not available type NA)</label>
                <input type="text" id="past-surgical-history" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
            </fieldset>
        </div>

        <div class="col-span-12">
            <fieldset>
                <legend class="block w-full border-b-2 font-semibold text-md mb-4">Drug and Allergy History: (Please fill out if available)</legend>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Are you on any routine medications?</label>
                    <ul>
                        <li>
                            <div class="flex items-center mb-4">
                                <input id="routine-medications-yes" type="radio" value="Yes" name="routine-medications" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="routine-medications-yes" class="cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center mb-4">
                                <input id="routine-medications-no" type="radio" value="No" name="routine-medications" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="routine-medications-no" class="cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                            </div>
                        </li>
                    </ul>
                    <div>
                        <label for="drug-and-allergy-history-specification" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">If Yes, please specify and if you select No type <strong>NA</strong></label>
                        <input type="text" id="drug-and-allergy-history-specification" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Do you have any allergies or adverse reactions to medications?</label>
                    <ul>
                        <li>
                            <div class="flex items-center mb-4">
                                <input id="reactions-to-medications-yes" type="radio" value="Yes" name="reactions-to-medications" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="reactions-to-medications-yes" class="cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center mb-4">
                                <input id="reactions-to-medications-no" type="radio" value="No" name="reactions-to-medications" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="reactions-to-medications-no" class="cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                            </div>
                        </li>
                    </ul>
                    <div>
                        <label for="reactions-to-medications-specification" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">If Yes, please specify and if you select No type <strong>NA</strong></label>
                        <input type="text" id="reactions-to-medications-specification" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                    </div>
                </div>
            </fieldset>
        </div>



        <div class="col-span-12">
            <fieldset>
                <legend class="block w-full border-b-2 font-semibold text-md mb-4">Additional Information</legend>
                <label for="other-medical-conditions" class="cursor-pointer block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Please specify any other medical conditions or concerns you would like to share and if No type <strong>NA</strong></label>
                <input type="text" id="other-medical-conditions" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
            </fieldset>
        </div>
    </div>
    <div class="my-8"></div>
    <button type="submit" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm w-full sm:w-auto inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save</button>

</form>