<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mbrn
 */

get_header();
?>

<header class="masthead">
    <div class="container h-100">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-6">
          
          <h1 class="text-uppercase font-weight-bold">Centrum Badań Translacyjnych i&nbsp;Biologii Molekularnej Nowotworów</h1>
          <!-- <hr class="divider my-4"> -->
        </div>
        <div class="col-lg-6">
          <img class="img-fluid header-logo" alt="logo narodowego instytutu onkologii w gliwicach"src="<?php bloginfo('stylesheet_directory')?>/img/logo_gliwice.png">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <!-- <p class="text-white-75 font-weight-light mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p> -->
          <a class="btn btn-primary btn-xl mt-5 js-scroll-trigger" href="#onas">Dowiedz się więcej...</a>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor" class="section-divider"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
</header>


<section class="page-section" id="onas">
    <div class="container">
        <div class="row justify-content-center">
        	
    		<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>
        	
        </div>
    </div>
</section>

<?php

get_footer();
