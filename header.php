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

		<header id="masthead" class="site-header <?php echo $header_class; ?>" role="banner">

			<div class="row">

				<div class="nav-inner row-content buffer-left buffer-right even clear-after">

					<div id="brand" class="site-branding">

						<h1 class="site-title reset">

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" >

								<?php if ( $logo_style == "logo-1" || $logo_style == "logo-3" ) : ?>

									<?php bloginfo( 'name' ); ?>

								<?php endif; ?>	

								<?php if ( $logo_style == "logo-2" || $logo_style == "logo-3" ) : ?>

									<?php if ( isset( $mokaine['logo-img']['url'] ) && $mokaine['logo-img']['url'] != '' ) : ?>
									
										
											
										
										<img id="default-logo" src="<?php echo $mokaine['logo-img']['url']; ?>" alt="Brand Name">
																				
									
								<?php endif; ?>

									<?php if ( isset( $mokaine['logo-img-retina']['url'] ) && $mokaine['logo-img-retina']['url'] != '' ) : ?>

										<img id="retina-logo" src="<?php echo $mokaine['logo-img-retina']['url']; ?>" alt="Brand Name">

									<?php endif; ?>		

								<?php endif; ?>		

							</a>

						</h1>
					
					</div><!-- brand -->

					<a id="menu-toggle" href="#"><i class="icon-bars icon-lg"></i></a>

					<nav id="site-navigation" role="navigation">

						<?php if( has_nav_menu( 'primary' ) ) : ?>

							<?php wp_nav_menu( array( 'walker' => new beetle_walker_menu, 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'reset' ) ); ?>

						<?php else : ?>

							<?php echo '<ul class="reset"><li><a href="'. admin_url( 'nav-menus.php' ) .'">' . __( 'No menu assigned', MOKAINE_THEME_NAME ) . '</a></li></ul>'; ?>

						<?php endif; ?>
					
					</nav>

				</div><!-- row-content -->	

			</div><!-- row -->	

		</header>

		<main class="site-main" role="main">

			<?php if ( is_single() || is_page() || is_home() ) : ?>

				<?php get_template_part( 'section', 'intro' ); ?>

			<?php endif; ?>

			<div id="main">