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
</head>

<body id="page-top" <?php body_class(); ?>>
	

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
		<div class="container">
		  <a class="navbar-brand js-scroll-trigger" href="/mbrn/#page-top">MRN</a>
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
	            <ul class="navbar-nav ml-auto mr-lg-5">
	                <li class="nav-item"><a class="nav-link" href="index.html">Home </a></li>
	                <li class="nav-item dropdown dropdown-xl no-caret">
	                    <a class="nav-link dropdown-toggle" id="navbarDropdownDemos" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Landings<!-- <i class="fas fa-chevron-right dropdown-arrow"></i> Font Awesome fontawesome.com --></a>
	                    <div class="dropdown-menu dropdown-menu-right animated--fade-in-up mr-lg-n25 mr-xl-n15" aria-labelledby="navbarDropdownDemos">
	                        <div class="row no-gutters">
	                            <div class="col-lg-5 p-lg-3 bg-img-cover overlay overlay-primary overlay-70 d-none d-lg-block" style="background-image: url('assets/img/backgrounds/bg-dropdown-xl.jpg')">
	                                <div class="d-flex h-100 w-100 align-items-center justify-content-center">
	                                    <div class="text-white text-center z-1">
	                                        <div class="mb-3">Multipurpose landing pages for a variety of projects.</div>
	                                        <a class="btn btn-white btn-sm text-primary font-weight-500" href="index.html">View All</a>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-lg-7 p-lg-5">
	                                <div class="row">
	                                    <div class="col-lg-6">
	                                        <h6 class="dropdown-header text-primary">Applications</h6>
	                                        <a class="dropdown-item" href="landing-app-mobile.html">Mobile App</a><a class="dropdown-item" href="landing-app-desktop.html">Desktop App</a>
	                                        <div class="dropdown-divider border-0"></div>
	                                        <h6 class="dropdown-header text-primary">Business</h6>
	                                        <a class="dropdown-item" href="landing-multipurpose.html">Multipurpose</a><a class="dropdown-item" href="landing-agency.html">Agency</a><a class="dropdown-item" href="landing-press.html">Press</a><a class="dropdown-item" href="landing-directory.html">Directory</a><a class="dropdown-item" href="landing-rental.html">Rental</a><a class="dropdown-item" href="landing-real-estate.html">Real Estate</a><a class="dropdown-item" href="landing-classifieds.html">Classifieds</a>
	                                        <div class="dropdown-divider border-0"></div>
	                                        <h6 class="dropdown-header text-primary">Lead Generation</h6>
	                                        <a class="dropdown-item" href="landing-lead-capture.html">Lead Capture</a>
	                                        <div class="dropdown-divider border-0 d-lg-none"></div>
	                                    </div>
	                                    <div class="col-lg-6">
	                                        <h6 class="dropdown-header text-primary">Personal</h6>
	                                        <a class="dropdown-item" href="landing-resume.html">Resume</a><a class="dropdown-item" href="landing-portfolio.html">Portfolio</a>
	                                        <div class="dropdown-divider border-0"></div>
	                                        <h6 class="dropdown-header text-primary">Header Styles</h6>
	                                        <a class="dropdown-item" href="header-basic.html">Basic</a><a class="dropdown-item" href="header-basic-signup.html">Basic (Signup)</a><a class="dropdown-item" href="header-graphic.html">Graphic</a><a class="dropdown-item" href="header-graphic-signup.html">Graphic (Signup)</a><a class="dropdown-item" href="header-inner-page.html">Inner Page</a><a class="dropdown-item" href="header-nav-only.html">Nav Only</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </li>
	                <li class="nav-item dropdown dropdown-xl no-caret">
	                    <a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages<!-- <i class="fas fa-chevron-right dropdown-arrow"></i> Font Awesome fontawesome.com --></a>
	                    <div class="dropdown-menu dropdown-menu-right mr-lg-n20 mr-xl-n15 animated--fade-in-up" aria-labelledby="navbarDropdownPages">
	                        <div class="row no-gutters">
	                            <div class="col-lg-4 p-lg-5">
	                                <h6 class="dropdown-header text-primary">Company</h6>
	                                <a class="dropdown-item" href="page-basic.html">Basic Page</a><a class="dropdown-item" href="page-company-about.html">About</a><a class="dropdown-item" href="page-company-pricing.html">Pricing</a><a class="dropdown-item" href="page-company-contact.html">Contact</a><a class="dropdown-item" href="page-company-team.html">Team</a><a class="dropdown-item" href="page-company-terms.html">Terms</a>
	                                <div class="dropdown-divider border-0"></div>
	                                <h6 class="dropdown-header text-primary">Support</h6>
	                                <a class="dropdown-item" href="page-help-center.html">Help Center</a><a class="dropdown-item" href="page-help-knowledgebase.html">Knowledgebase</a><a class="dropdown-item" href="page-help-message-center.html">Message Center</a><a class="dropdown-item" href="page-help-support-ticket.html">Support Ticket</a>
	                                <div class="dropdown-divider border-0 d-lg-none"></div>
	                            </div>
	                            <div class="col-lg-4 p-lg-5">
	                                <h6 class="dropdown-header text-primary">Careers</h6>
	                                <a class="dropdown-item" href="page-careers-overview.html">Careers List</a><a class="dropdown-item" href="page-careers-listing.html">Position Details</a>
	                                <div class="dropdown-divider border-0"></div>
	                                <h6 class="dropdown-header text-primary">Blog</h6>
	                                <a class="dropdown-item" href="page-blog-overview.html">Overview</a><a class="dropdown-item" href="page-blog-post.html">Post</a><a class="dropdown-item" href="page-blog-archive.html">Archive</a>
	                                <div class="dropdown-divider border-0"></div>
	                                <h6 class="dropdown-header text-primary">Portfolio</h6>
	                                <a class="dropdown-item" href="page-portfolio-grid.html">Grid</a><a class="dropdown-item" href="page-portfolio-large-grid.html">Large Grid</a><a class="dropdown-item" href="page-portfolio-masonry.html">Masonry</a><a class="dropdown-item" href="page-portfolio-case-study.html">Case Study</a><a class="dropdown-item" href="page-portfolio-project.html">Project</a>
	                                <div class="dropdown-divider border-0 d-lg-none"></div>
	                            </div>
	                            <div class="col-lg-4 p-lg-5">
	                                <h6 class="dropdown-header text-primary">Error</h6>
	                                <a class="dropdown-item" href="page-error-400.html">400 Error</a><a class="dropdown-item" href="page-error-401.html">401 Error</a><a class="dropdown-item" href="page-error-404-1.html">404 Error (Option 1)</a><a class="dropdown-item" href="page-error-404-2.html">404 Error (Option 2)</a><a class="dropdown-item" href="page-error-500.html">500 Error</a><a class="dropdown-item" href="page-error-503.html">503 Error</a><a class="dropdown-item" href="page-error-504.html">504 Error</a>
	                            </div>
	                        </div>
	                    </div>
	                </li>
	                <li class="nav-item dropdown no-caret">
	                    <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Documentation<!-- <i class="fas fa-chevron-right dropdown-arrow"></i> Font Awesome fontawesome.com --></a>
	                    <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
	                        <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/quickstart" target="_blank"><div class="icon-stack bg-primary-soft text-primary mr-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg></div>
	                            <div>
	                                <div class="small text-gray-500">Documentation</div>
	                                Usage instructions and reference
	                            </div></a>
	                        <div class="dropdown-divider m-0"></div>
	                        <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/components" target="_blank"><div class="icon-stack bg-primary-soft text-primary mr-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg></div>
	                            <div>
	                                <div class="small text-gray-500">Components</div>
	                                Code snippets and reference
	                            </div></a>
	                        <div class="dropdown-divider m-0"></div>
	                        <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/changelog" target="_blank"><div class="icon-stack bg-primary-soft text-primary mr-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></div>
	                            <div>
	                                <div class="small text-gray-500">Changelog</div>
	                                Updates and changes
	                            </div></a>
	                    </div>
	                </li>
	            </ul>
	            <a class="btn font-weight-500 ml-lg-4 btn-teal" href="https://shop.startbootstrap.com/sb-ui-kit-pro">Buy Now<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right ml-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
	        </div>
		</div>
	</nav>

