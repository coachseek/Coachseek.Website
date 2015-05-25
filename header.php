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
		<script type="text/javascript">
		adroll_adv_id = "HXFFG67C6NB25CAPFBAH7D";
		adroll_pix_id = "OG6XM5DRCNEWTHQWORDY5P";
		(function () {
		var oldonload = window.onload;
		window.onload = function(){
		   __adroll_loaded=true;
		   var scr = document.createElement("script");
		   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
		   scr.setAttribute('async', 'true');
		   scr.type = "text/javascript";
		   scr.src = host + "/j/roundtrip.js";
		   ((document.getElementsByTagName('head') || [null])[0] ||
		    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
		   if(oldonload){oldonload()}};
		}());
		</script>

	
      <script type="text/javascript">
      window.heap=window.heap||[],heap.load=function(t,e){window.heap.appid=t,window.heap.config=e;var a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=("https:"===document.location.protocol?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+t+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(t){return function(){heap.push([t].concat(Array.prototype.slice.call(arguments,0)))}},p=["clearEventProperties","identify","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
      heap.load("2818681617");
    </script>


	</head>

	<body <?php body_class( $extra_body_class ); ?>>

		 <header>
            <div class="row--full">
               <div class="col-6-12 ">
                 <div class="landing--header-logo">
                    <a href="<?php echo site_url(); ?>">
                      <img src="<?php echo get_stylesheet_directory_uri();?>/images/coachseek-logo-lg.png" alt="">
                    </a>   
                 </div>
               </div>
               <div class="col-6-12 landing--header-nav">
                   <div class="landing--header-nav-icon" href="">
                     <i class="fa fa-bars fa-lg"></i>
                   </div>
                   <ul class="landing--header-nav-list">
                       <li><a href="/features">Features</a></li>
                       <li><a href="/blog">Blog</a></li>
                       <li><a class="landing--header-signin" href="http://app.coachseek.com">Sign In</a></li>
                   </ul>
              
               </div>               
            </div>
    	</header>

		<main class="site-main" role="main">

			<?php if ( is_single() || is_page() || is_home() ) : ?>

				<?php get_template_part( 'section', 'intro' ); ?>

			<?php endif; ?>

			<div id="main">