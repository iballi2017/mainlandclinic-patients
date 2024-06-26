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
        // stepperController();
    }

    /**remove page loader */
    const page_loader = document.querySelector(".page-loader");
    page_loader?.classList.contains("show") ?
        page_loader.classList.remove("show") :
        null;


    /* Page Content Intersection Observer */
    const faders = document.querySelectorAll(".fade-in");
    const sliders = document.querySelectorAll(".slide-in");

    const appearOptions = {
        threshold: 0,
        rootMargin: "0px 0px -100px 0px",
    };
    const appearOnScroll = new IntersectionObserver((entries, appearOnScroll) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add("appear");
            appearOnScroll.unobserve(entry.target);
        });
    }, appearOptions);

    faders.forEach((fader) => {
        appearOnScroll.observe(fader);
    });

    sliders.forEach((slider) => {
        appearOnScroll.observe(slider);
    });




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
            const currentMarginSize = stepper.getCurrentMarginSizeCount();
            pages.style.marginLeft = `${currentMarginSize}%`;

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
                            if (e.target.checked) {
                                stepper.stepForward()
                            }
                        })
                    }
                    if (control.tagName === TAGNAME.INPUT && control.classList.contains("prev-btn")) {
                        control.addEventListener("change", () => {
                            if (e.target.checked) {
                                stepper.stepBackward()
                            }
                        })
                    }
                }
            }
        }


    }



    const blogpost_card = document.querySelectorAll(".blogpost-card");
    for (let i = 0; i < blogpost_card.length; i++) {
        const card = blogpost_card[i];
        console.log("card: ", card)
        const body = card.querySelector(".body")
        console.log("body: ", body.innerHTML);
        // const slice = body.innerHTML.slice(0, 50)
        body.innerHTML = body.innerHTML.slice(0, 200) + "..."

    }


    // Function to be called when the viewport width crosses a media query threshold
    function handleBlogpostBodtTexts(mql) {
        if (mql.matches) {
            // Media query matches (viewport width is greater than or equal to 600px)
            console.log("Viewport width is 600px or more");
            // Your code here for actions to take when the media query matches
        } else {
            // Media query does not match (viewport width is less than 600px)
            console.log("Viewport width is less than 600px");
            // Your code here for actions to take when the media query does not match
        }
    }

    // Create a media query list for a viewport width of 600px or more
    const mediaQueryList = window.matchMedia("(min-width: 600px)");

    // Call the function initially to check the viewport width
    handleBlogpostBodtTexts(mediaQueryList);

    // Add a listener to handle changes in viewport width
    mediaQueryList.addListener(handleBlogpostBodtTexts);




    init();

})