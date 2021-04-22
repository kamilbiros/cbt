<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mbrn
 */

?>


<?php wp_footer(); ?>


<!-- Bootstrap core JavaScript -->
  <script src="<?php bloginfo('stylesheet_directory')?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php bloginfo('stylesheet_directory')?>/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory')?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php bloginfo('stylesheet_directory')?>/js/creative.js"></script>
  <script type="text/javascript">
  // 	$('body').scrollspy({
  //   target: '#navbar-page',
  //   offset: 75
  // });

  // Collapse Navbar
  // var navbarCollapse = function() {
  //   if ($("#navbar-page").offset().top > 100) {
  //     $("#navbar-page").addClass("navbar-scrolled");
  //   } else {
  //     $("#navbar-page").removeClass("navbar-scrolled");
  //   }
  // };
  //  // Collapse now if page is not at top
  // navbarCollapse();
  // // Collapse the navbar when page is scrolled
  // $(window).scroll(navbarCollapse);
</script>


</body>
</html>
