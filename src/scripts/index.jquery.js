$(document).ready(function () {
    // alert("hello world!");
    $(".hero-owl-slider").owlCarousel({
        loop: true,
        autoplay: false,
        smartSpeed: 1500,
        animateOut: "fadeOut",
        animateOut: "slideOutDown",
        animateIn: "flipInX",
        items: 1,
        // navText: ['<i data-feather="menu"></i>', ' <i data-feather="menu"></i>'],
    });

})