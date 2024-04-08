// alert("hello");

import FormControls from "./form-controls.js";


document.addEventListener('DOMContentLoaded', function () {

    
    const formControls = new FormControls();
    const passwordControls = document.getElementsByClassName("password");
    formControls.toggleInputTypes(passwordControls);


})