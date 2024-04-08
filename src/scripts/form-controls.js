class FormControls {
    constructor() { }


    toggleInputTypes = (controls) => {
        if (controls)
            for (let i = 0; i < controls.length; i++) {
                const element = controls[i];
                let toggler = element.parentElement.lastElementChild;

                toggler.addEventListener("click", () => {
                    let attr = element?.getAttribute("type");

                    if (attr === "password")
                        element.setAttribute("type", "text");

                    if (attr === "text")
                        element.setAttribute("type", "password");


                    if (attr === "password") toggler.setAttribute("aria-expanded", true)
                    if (attr !== "password") toggler.setAttribute("aria-expanded", false)
                });

            }
    }
}

export default FormControls;