class Stepper {
    marginCount = 0;
    fullWidth = 100;
    constructor(pagesWrapper, pageCount) {
        this.pagesWrapper = pagesWrapper ? pagesWrapper : null;
        this.maxPages = pageCount ? ((pageCount * this.fullWidth) - this.fullWidth) : null;
        pagesWrapper.parentElement.classList.add("show");
    }

    stepForward(btn) {
        btn ? btn.addEventListener("click", () => {
            if (this.marginCount != -this.maxPages) {
                this.marginCount = this.marginCount - this.fullWidth
                this.pagesWrapper ? this.pagesWrapper.style.marginLeft = this.marginCount + "% " : null;
            }
        }) : null;
    }
    stepBackward(btn) {
        btn ? btn.addEventListener("click", () => {
            if (this.marginCount < 0) {
                this.marginCount = this.marginCount + this.fullWidth
                this.pagesWrapper ? this.pagesWrapper.style.marginLeft = this.marginCount + "% " : null;
            }
        }) : null;
    }
}

export default Stepper;