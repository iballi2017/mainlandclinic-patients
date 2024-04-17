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


  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".sticky-top").css("top", "0px");
    } else {
      $(".sticky-top").css("top", "-100px");
    }
  });

})