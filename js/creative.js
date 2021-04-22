(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 72)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '',
    offset: 75
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-scrolled");
    } else {
      $("#mainNav").removeClass("navbar-scrolled");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Magnific popup calls
  $('#portfolio').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });

  // ----- custom Table for Wordpress ---------

  $('table').each(function(){
    var table = $(this);
    table.addClass("table");
  });

  $('figure.wp-block-table').each(function(){
    var table = $(this);
    table.addClass("table-responsive");
  });

   $('a').each(function(){
    var link = $(this);
    link.parent().addClass("link-word-wrap");
  });

  $('.publications-box a').each(function(){ // FIRST ADD DIV with class="publications-box" and put everthing inside
    var link = $(this);
    link.after("<hr/>");
  });

  $('#search-box input[type="submit"]').each(function(){ // FIRST ADD DIV with class="publications-box" and put everthing inside
    var button = $(this);
    button.removeClass().addClass('btn btn-primary');
  });


  // -----eof custom Table for Wordpress ---------

  

})(jQuery); // End of use strict
