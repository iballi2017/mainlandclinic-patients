// alert("hello");

import FormControls from "./form-controls.js";
import MiscellaneousEvents from "./miscellaneous-events.js";


document.addEventListener('DOMContentLoaded', function () {


    const formControls = new FormControls();
    const passwordControls = document.getElementsByClassName("password");
    formControls.toggleInputTypes(passwordControls);



    
    // /**Go back with button clicked */
    const triggers = document.querySelectorAll(".back-history-btn");
    for (let i = 0; i < triggers.length; i++) {
        const button = triggers[i];
        button.addEventListener("click", () => {
            const miscellaneousEvents = new MiscellaneousEvents();
            miscellaneousEvents.goBackHistoryWithButton();
        })

    }


})