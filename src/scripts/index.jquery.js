$(document).ready(function () {
    // alert("hello world!");
    $(".hero-owl-slider").owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 1500,
        animateOut: "fadeOut",
        animateOut: "slideOutDown",
        animateIn: "flipInX",
        animateOut: 'fadeOut',
        items: 1,
    });

})