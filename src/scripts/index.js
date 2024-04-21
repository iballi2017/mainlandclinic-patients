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
        stepperController();
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
    const stepperController = () => {
        const controls = document.querySelectorAll(".step-control");
        const steppers = document.querySelectorAll(".stepper");
        const TAGNAME = {
            BUTTON: 'BUTTON',
            INPUT: 'INPUT'
        }

        for (let i = 0; i < steppers.length; i++) {
            const stepper_wrapper = steppers[i];
            const stepper_id = stepper_wrapper.getAttribute("id")
            const pages = stepper_wrapper.querySelector(".pages");
            pages.style.width = (pages.children.length * 100) + "%";
            const progressBar = stepper_wrapper.parentElement.querySelector(".progress");
            const stepper = new Stepper(pages, pages.children.length, progressBar);

            for (let j = 0; j < controls.length; j++) {
                const control = controls[j];
                const controller = control.getAttribute("data-custom-target");
                if (controller === stepper_id) {

                    /**For buttons */
                    if (control.tagName === TAGNAME.BUTTON && control.classList.contains("next-btn")) {
                        control.addEventListener("click", () => {
                            stepper.stepForward()
                        })
                    }
                    if (control.tagName === TAGNAME.BUTTON && control.classList.contains("prev-btn")) {
                        control.addEventListener("click", () => {
                            stepper.stepBackward()
                        })
                    }
                    /**For Checkboxes */
                    if (control.tagName === TAGNAME.INPUT && control.classList.contains("next-btn")) {
                        control.addEventListener("change", (e) => {
                            if(e.target.checked){
                                stepper.stepForward()
                            }
                        })
                    }
                    if (control.tagName === TAGNAME.INPUT && control.classList.contains("prev-btn")) {
                        control.addEventListener("change", () => {
                            if(e.target.checked){
                                stepper.stepBackward()
                            }
                        })
                    }
                }
            }
        }
    }

    init();

})