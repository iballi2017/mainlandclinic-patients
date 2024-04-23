class Stepper {
    marginSize = 0;
    fullWidth = 100;
    progressBar = null;
    progressPoints = null;
    progressClassname = "current";
    pageCount = 0;
    pagesWrapperWidth = 0;
    constructor(pagesWrapper, pageCount, progressBar) {
        this.pagesWrapper = pagesWrapper ? pagesWrapper : null;
        this.pageCount = pageCount;
        this.pagesWrapperWidth = this.pageCount * this.fullWidth;
        this.maxPages = this.pageCount ? ((this.pagesWrapperWidth) - this.fullWidth) : null;
        pagesWrapper.parentElement.classList.add("show");
        this.progressBar = progressBar;
        this.progressPoints = this.progressBar.children;
        this.updateProgress(this.marginSize);
    }


    stepForward() {
        if (this.marginSize != -this.maxPages) {
            this.marginSize -= this.fullWidth
            this.pagesWrapper ? this.pagesWrapper.style.marginLeft = this.marginSize + "% " : null;
            this.updateProgress(this.marginSize);
        }
    }
    stepBackward() {
        if (this.marginSize < 0) {
            this.marginSize = this.marginSize + this.fullWidth
            this.pagesWrapper ? this.pagesWrapper.style.marginLeft = this.marginSize + "% " : null;
            this.updateProgress(this.marginSize);
        }
    }

    updateProgress(marginSize) {
        let pagesWidthNotPassed = this.pagesWrapperWidth + marginSize;
        let numberOfScreensNotPassed = pagesWidthNotPassed / this.fullWidth;
        let currentScreenNumber = (this.pageCount + 1) - numberOfScreensNotPassed;

        for (let i = 0; i < this.progressPoints.length; i++) {
            const element = this.progressPoints[i];
            element.classList.remove(this.progressClassname);
        }
        for (let i = 0; i < currentScreenNumber; i++) {
            const element = this.progressPoints[i];
            element.classList.add(this.progressClassname)
        }
    }

    getCurrentMarginSizeCount() {
        return this.marginSize;
    }
}

export default Stepper;