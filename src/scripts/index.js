// alert("hello");

import FormControls from "./form-controls.js";
import MiscellaneousEvents from "./miscellaneous-events.js";
import Product from "./product.js";
import Stepper from "./stepper.js";


document.addEventListener('DOMContentLoaded', function () {

    const init = () => {
        productDetailsPreviewImages();
        togglePasswordFieldTypes();
        goBackWithButtonClicked();
        formWidgetStepper();
    }


    /**Toggle password field types */
    const togglePasswordFieldTypes = () => {
        const formControls = new FormControls();
        const passwordControls = document.getElementsByClassName("password");

        formControls.toggleInputTypes(passwordControls);
    }

    // /**Go back with button clicked */
    const goBackWithButtonClicked = () => {
        const triggers = document.querySelectorAll(".back-history-btn");

        for (let i = 0; i < triggers.length; i++) {
            const button = triggers[i];

            button.addEventListener("click", () => {
                const miscellaneousEvents = new MiscellaneousEvents();
                miscellaneousEvents.goBackHistoryWithButton();
            });
        }
    }

    /**Product details preview images */
    const productDetailsPreviewImages = () => {
        const product_image_canvas = document.querySelector("#product-image-canvas");
        const priview_screen = product_image_canvas ? product_image_canvas.querySelector("#preview") : null
        const image_items = document.querySelector(".image-items")
        const toggleImages = new Product();

        toggleImages.toggleImagesOnDetailsPage(priview_screen, image_items)
    }

    /**Form widget stepper */
    const formWidgetStepper = () => {
        const form_steppers = document.querySelectorAll(".stepper");
        for (let i = 0; i < form_steppers.length; i++) {
            const form_stepper = form_steppers[i];
            const pages = form_stepper.querySelector(".pages");
            pages.style.width =( pages.children.length * 100) + "%";
            const step_forward = form_stepper.nextElementSibling.querySelector(".step-forward")
            const step_backward = form_stepper.nextElementSibling.querySelector(".step-backward")
            const stepper = new Stepper(pages, pages.children.length);
            stepper.stepForward(step_forward)
            stepper.stepBackward(step_backward)
            
        }
    }


    init();

})