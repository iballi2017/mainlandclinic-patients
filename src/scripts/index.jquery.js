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

  $(".reviews-owl-slider").owlCarousel({
    loop: true,
    autoplay: true,
    nav: false,
    lazyLoad: true,
    //
    animateOut: "fadeOut",
    animateOut: "slideOutDown",
    animateIn: "flipInX",
    margin: 30,
    smartSpeed: 450,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 3,
      },
    },
  });


  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".sticky-top").css("top", "0px");
    } else {
      $(".sticky-top").css("top", "-100px");
    }
  });




  // Initialize Datepicker
  $(".datepicker").datepicker({
    // Specify date format
    dateFormat: "yy-mm-dd",

    // Define enabled and disabled dates
    beforeShowDay: function (date) {
      // Define enabled dates (e.g., all Fridays)
      if (date.getDay() === 5) {
        // 5 represents Friday (0=Sunday, 1=Monday, ..., 6=Saturday)
        return [true];
      }

      // Define disabled dates (e.g., specific dates)
      var disabledDates = ["2024-04-29", "2024-05-01", "2024-05-10"]; // Array of disabled dates
      var stringDate = $.datepicker.formatDate("yy-mm-dd", date);
      return [disabledDates.indexOf(stringDate) === -1];
    },
  });

})