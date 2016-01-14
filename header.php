<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>

		<?php
		global $mokaine, $intro_meta;

		$page_id = ( is_home() ) ? get_option( 'page_for_posts' ) : get_the_ID();

		$intro_meta = get_post_meta( $page_id, '_mokaine_select_intro_parse', true );

		$header_layout = $mokaine['header-style'];
		$logo_style =  $mokaine['logo-style'];
		$parallax = $mokaine['parallax'];

		// Reset vars
		$header_class = $extra_body_class = '';

		// Cases
		if ( $header_layout == "header-2" ) {
			$header_class = ' transparent';
		} else if ( $header_layout == "header-1" ) {
			$header_class = ' transparent light';
		}

		if ( $intro_meta && ( is_single() || is_page() || is_home() ) ) {
			$extra_body_class = ' has-intro';
		} else {
			$extra_body_class = ' no-intro';
			$header_class = ' fixed-header';				
		}

		if ( $parallax == false ) {
			$extra_body_class = ' no-parallax';
			$header_class = ' fixed-header';		
		}
		?>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/footer.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/header.css">

		<!-- Favicon and iOS icons -->
		<?php if ( isset( $mokaine['custom-favicon']['url'] ) && $mokaine['custom-favicon']['url'] != '' ) : ?>
		<link rel="shortcut icon" href="<?php echo $mokaine['custom-favicon']['url']; ?>" />
		<?php endif; ?>
		<?php if ( isset( $mokaine['custom-ios-icon144']['url'] ) && $mokaine['custom-ios-icon144']['url'] != '' ) : ?>
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $mokaine['custom-ios-icon144']['url']; ?>" />
		<?php endif; ?>
		<?php if ( isset( $mokaine['custom-ios-icon114']['url'] ) && $mokaine['custom-ios-icon114']['url'] != '' ) : ?>
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $mokaine['custom-ios-icon114']['url']; ?>" />
		<?php endif; ?>
		<?php if ( isset( $mokaine['custom-ios-icon72']['url'] ) && $mokaine['custom-ios-icon72']['url'] != '' ) : ?>
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $mokaine['custom-ios-icon72']['url']; ?>" />
		<?php endif; ?>
		<?php if ( isset( $mokaine['custom-ios-icon57']['url'] ) && $mokaine['custom-ios-icon57']['url'] != '' ) : ?>
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $mokaine['custom-ios-icon57']['url']; ?>" />
		<?php endif; ?>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class( $extra_body_class ); ?>>

		   <header>
            <div class="row--full">
               <div class="col-3-12 ">
                 <div class="landing--header-logo">
                    <a href="<?php echo site_url(); ?>">
                      <img src="<?php echo get_stylesheet_directory_uri();?>/images/logo-compressor.png" alt="">
                    </a>   
                 </div>
               </div>
               <div class="col-9-12 landing--header-nav" style="top:-5px;position:relative;">
                   <div class="landing--header-nav-icon" href="">
                     <i class="fa fa-bars fa-lg"></i>
                   </div>
                     <ul class="landing--header-nav-list">
                       <li><a href="/features">Features</a></li>
                      <li><a href="/customers" >Testimonials</a></li>
                       <li><a href="/pricing">Pricing</a></li>
                       <li class="landing--header-nav-dropdown">
                        <a class="landing--header-nav-more">More &nbsp; <i class="fa fa-caret-down"></i></a>
                        <ul class="landing--header-nav-more-dropdown" style="padding-left:0px;">
                          <li><a href="/support">Support</a></li>
                          <li><a href="/webinar-cut-the-admin-and-grow-your-business">Webinar</a></li>
                          <li><a href="/blog">Blog</a></li>
                          <li><a href="/sports-coaching-survival-guide">Ebook</a></li>
                          <li><a href="/subscribe-paypal">Purchase</a></li>
                        </ul>
                       </li>
                       <li><a href="http://app.coachseek.com">Sign in</a></li>
                       
                       <li><a class="landing--header-signin" href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'SignUpButton'});">Start My 14 Day Trial</a></li>
                   </ul>
              
               </div>               
            </div>
    	</header>
		<main class="site-main" role="main">

			<?php if ( is_single() || is_page() || is_home() ) : ?>

				<?php get_template_part( 'section', 'intro' ); ?>

			<?php endif; ?>

			<div id="main">