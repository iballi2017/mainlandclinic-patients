class Product {
    constructor() { }

    toggleImagesOnDetailsPage(preview, imageList) {
        const screen = preview ? preview.querySelector(".inner") : null;
        const firstImage = imageList ? imageList.children[0] : null;
        screen ? screen.firstElementChild.setAttribute("src", firstImage.firstElementChild.firstElementChild.getAttribute("src")) : null

        for (let i = 0; i < imageList?.children.length; i++) {
            const element = imageList.children[i];
            element.addEventListener("click", (e) => {
                const image = element.firstElementChild.firstElementChild.getAttribute("src");
                screen.firstElementChild.setAttribute("src", image)
            })
        }

    }
}

export default Product;