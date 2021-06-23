<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mbrn
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Font Awesome Icons -->
	<link href="<?php bloginfo('stylesheet_directory')?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

	<!-- Plugin CSS -->
	<link href="<?php bloginfo('stylesheet_directory')?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">


	<!-- Theme CSS - Includes Bootstrap -->
	<link href="<?php bloginfo('stylesheet_directory')?>/css/creative.css" rel="stylesheet">

	<?php wp_head(); ?>
	<a class="sr-only sr-only-focusable" href="#mainNav">Przejdź do menu głównego.</a>
	<a class="sr-only sr-only-focusable" href="#navbar-page">Przejdź do nawigacji strony.</a>
	<a class="sr-only sr-only-focusable" href="#content">Przejdź do treści strony.</a>
</head>

<body id="page-top" <?php body_class(); ?>>
	

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
		<div class="container">

			<?php
				if (! is_front_page() ) :
			?>
			<a class="navbar-brand js-scroll-trigger" href="/">CBT</a>

			<?php
				else :
			?>
			<a class="navbar-brand js-scroll-trigger" href="/#page-top">CBT</a>
			<?php
				endif;
			?>


		  <div id="search-box"><?php 
		  // get_search_form(); 
		  ?>
		  	<form role="search" method="get" class="search-form" action="<?php echo get_site_url(); ?>">
				<div class="input-group">
					<input type="search" value="" name="s" class="form-control" placeholder="Szukaj..." aria-label="Szukaj..." aria-describedby="basic-addon2">
						<span class="sr-only" id="szukaj_description">Wpisz szukaną frazę</span>
						<div class="input-group-append">
						<button class="btn btn-primary" type="submit"><i class="fas fa-search"></i><span class="sr-only">Szukaj</span></button>
					</div>
				</div>
			</form>
		  	
		  </div>
		  <button class="navbar-toggler navbar-toggler-right float-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <?php
            wp_nav_menu([
                'menu'            => 'primary',
                'theme_location'  => 'menu-1',
                'container'       => 'div',
                'container_id'    => 'navbarResponsive',
                'container_class' => 'collapse navbar-collapse',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav ml-auto',
                'depth'           => 0,
                'fallback_cb'     => 'bs4navwalker::fallback',
                'walker'          => new bs4navwalker()
            ]);
            ?>
		</div>
	</nav>

