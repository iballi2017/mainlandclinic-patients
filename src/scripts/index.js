// alert("hello");

import FormControls from "./form-controls.js";
import MiscellaneousEvents from "./miscellaneous-events.js";
import Product from "./product.js";


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


    const product_image_canvas = document.querySelector("#product-image-canvas");
    // console.log("product_image_canvas: ", product_image_canvas)

    const priview_screen = product_image_canvas ? product_image_canvas.querySelector("#preview") : null
    // console.log("priview_screen: ", priview_screen)

    const image_items = document.querySelector(".image-items")
    // console.log("image_items: ", image_items.children)

    const toggleImages = new Product();
    toggleImages.toggleImagesOnDetailsPage(priview_screen, image_items)

})