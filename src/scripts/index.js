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
            pages.style.width = (pages.children.length * 100) + "%";
            const step_forward = form_stepper.nextElementSibling.querySelector(".step-forward")
            const step_backward = form_stepper.nextElementSibling.querySelector(".step-backward")
            const progressBar = form_stepper.parentElement.querySelector(".progress");
            const stepper = new Stepper(pages, pages.children.length, progressBar);

            stepper.stepForward(step_forward)
            stepper.stepBackward(step_backward)

        }
    }



    /**route on checked */
    const forwardRouteOnChecked = () => {
        const route_checkboxes = document.querySelectorAll(".route-checkbox");
        for (let i = 0; i < route_checkboxes.length; i++) {
            const checkbox = route_checkboxes[i];
            const dt = checkbox.getAttribute("data-custom-target")
            const stepper_wrapper = document.querySelector(dt)
            const pages = stepper_wrapper.querySelector(".pages");
            const progressBar = stepper_wrapper.parentElement.querySelector(".progress");
            const stepper = new Stepper(pages, pages.children.length, progressBar);
            stepper.stepForwardChange(checkbox);
        }
    }

    const stepperController = () => {
        const controls = document.querySelectorAll(".step-control");
        for (let i = 0; i < controls.length; i++) {
            const control = controls[i];
            console.log("control: ", control)

            const controller = control.getAttribute("data-custom-target");
            // console.log("controller: ", controller)
            const prevBtnCheck = control.classList.contains("prev-btn-check") ? control : null;
            const nextBtnCheck = control.classList.contains("next-btn-check") ? control : null;
            const prevBtn = control.classList.contains("prev-btn") ? control : null;
            const nextBtn = control.classList.contains("next-btn") ? control : null;
            const stepper_wrapper = document.querySelector(controller)
            console.log("stepper_wrapper: ", stepper_wrapper);
            const pages = stepper_wrapper.querySelector(".pages");
            const progressBar = stepper_wrapper.parentElement.querySelector(".progress");
            const stepper = new Stepper(pages, pages.children.length, progressBar);

            if (control.classList.contains("next-btn-check")) {
                stepper.stepForwardChange(nextBtnCheck)
            }
            if (control.classList.contains("prev-btn-check")) {
                stepper.stepBackwardChange(prevBtnCheck)
            }
            if (control.classList.contains("prev-btn")) {
                stepper.stepBackward(prevBtn)
            }
            if (control.classList.contains("next-btn")) {
                stepper.stepForward(nextBtn)
            }

        }
    }

    stepperController();


    const prevNxtButton = () => {
        const next_btn = document.querySelectorAll(".next-btn");
        // const route_checkboxes = document.querySelectorAll(".route-checkbox");
        for (let i = 0; i < next_btn.length; i++) {
            const button = next_btn[i];
            const dt = button.getAttribute("data-custom-target")
            const stepper_wrapper = document.querySelector(dt)
            const pages = stepper_wrapper.querySelector(".pages");
            const progressBar = stepper_wrapper.parentElement.querySelector(".progress");
            const stepper = new Stepper(pages, pages.children.length, progressBar);
            stepper.stepForward(button);
        }
    }



    forwardRouteOnChecked();
    // prevNxtButton();
    init();

})