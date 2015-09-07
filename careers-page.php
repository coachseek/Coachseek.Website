<?php
/*
Template Name: Careers Page Template
* Version: 1.0
*/
?>
<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
    <head>
       	<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
         
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
       
     
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/styles.css?ver=<?php $theme_version = wp_get_theme(); echo $theme_version->Version; ?>" type="text/css" media="screen" />

      


    </head>

    <body>
    <div class="container">
        <header>
            <div class="row--full">
              <div class="col-3-12 ">
                 <div class="landing--header-logo">
                    <a href="<?php echo site_url(); ?>">
                      <img src="<?php echo get_stylesheet_directory_uri();?>/images/logo-compressor.png" alt="">
                    </a>   
                 </div>
               </div>
               <div class="col-9-12 landing--header-nav">
                   <div class="landing--header-nav-icon" href="">
                     <i class="fa fa-bars fa-lg"></i>
                   </div>
                   <ul class="landing--header-nav-list">
                      <li><a href="/pricing">Pricing</a></li>
                       <li><a href="/features">Features</a></li>
                       <li><a href="/blog">Blog</a></li>
                        <li><a href="http://app.coachseek.com">Sign in</a></li>
                       <li><a class="landing--header-signin" href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'SignUpButton'});">Sign up</a></li>
                   </ul>
              
               </div>               
            </div>
    </header>
    <div class="careers--home">
      <div class="row--full">
      <?php

      // check if the flexible content field has rows of data
      if( have_rows('careers-intro') ):

           // loop through the rows of data
          while ( have_rows('careers-intro') ) : the_row(); ?>


          <h3><?php the_sub_field('title');?></h3>
          <p><?php the_sub_field('description');?></p>
          <img src="<?php the_sub_field('image');?>" alt="">

           <?php endwhile;
          else :
              // no layouts found
          endif;
          ?>
      </div>

      <?php

      // check if the flexible content field has rows of data
      if( have_rows('careers-list') ):

           // loop through the rows of data
      while ( have_rows('careers-list') ) : the_row(); ?>

       <div class="row">
      <?php if( get_row_layout() == 'careers-list' ): 
              if( have_rows('careers-list-left') ):
              while ( have_rows('careers-list-left') ) : the_row();
          ?>

          <div class="col-6-12">
            <h3><?php the_sub_field('title');?></h3>
            <p><?php the_sub_field('description');?></p>
            <a href="mailto:hello@coachseek.com">Apply</a>
          </div>
          <?php endwhile;

            endif;

          endif;

          ?>

        <?php if( get_row_layout() == 'careers-list' ): 
              if( have_rows('careers-list-right') ):
              while ( have_rows('careers-list-right') ) : the_row();
          ?>

          <div class="col-6-12">
            <h3><?php the_sub_field('title');?></h3>
            <p><?php the_sub_field('description');?></p>
            <a href="mailto:hello@coachseek.com">Apply</a>
          </div>
          <?php endwhile;

            endif;

          endif;

          ?>


      </div>
      <?
        endwhile;

        else :

            // no layouts found

        endif;
      ?>


      
    </div>


      
       <?php if( get_field('quote-image') ): ?>
       <div class="mainfea--home-quote" style="background: url('<?php the_field('quote-image'); ?>') center center no-repeat; background-size: cover;">
        <?php endif; ?>
           <div class="mainfea--home-overlap"></div>
           <div class="row--full">
               <h3>Let's get started</h3>

               <a href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Careers'});">Try for free</a>
           </div>
       </div>
       
       
           <footer>
           <div class="row">
               <div class="col-3-12">
                   <ul>
                       <li><h4>company</h4></li>
                       <li><a href="/team">Team</a></li>
                       <li><a href="/blog">Blog</a></li>
                       <li><a href="/careers">Careers</a></li>
                       <li><a href="/website-terms">Terms &</a> <a href="/privacy-policy"> Privacy</a></li>
                   </ul>
               </div>
               <div class="col-3-12">
                   <ul>
                       <li><h4>product</h4></li>
                       <li><a href="/features">Features</a></li>
                       <li><a href="/pricing">Pricing</a></li>
                       <li><a href="/faq">FAQ's</a></li>
                       <li><a href="http://support.coachseek.com/" target="_blank">Support</a></li>
                       <li><a href="/newsletter">Newsletter</a></li>

                   </ul>
               </div>
               <div class="col-3-12">
                   <ul>
                       <li><h4>solutions</h4></li>
                       <li><a href="/tennis">Tennis</a></li>
                       <li><a href="/golf">Golf</a></li>
                       <li><a href="/swimming">Swimming</a></li>
                       <li><a href="/fitness">Fitness</a></li>
                       <li><a href="/equestrian">Equestrian</a></li>
                       <li><a href="/running">Running</a></li>
                       <li><a href="/cricket">Cricket</a></li>
                   </ul>
               </div>
               <div class="col-3-12">
                   <ul>
                       <li><h4>contact</h4></li>
                       <li><a href="mailto:hello@coachseek.com" target="_blank"><i class="fa fa-envelope"></i> &nbsp; hello@coachseek.com</a></li>
                       <li><a href="mailto:support@coachseek.com" target="_blank"><i class="fa fa-envelope"></i> &nbsp; support@coachseek.com</a></li>
                       <li><a href=""><i class="fa fa-phone"></i> &nbsp;  +1-888-762-7187</a></li>
                       <li><a href="https://www.facebook.com/Coachseek" target="_blank"><i class="fa fa-facebook-f"></i> &nbsp; &nbsp; Facebook</a></li>
                       <li><a href="https://twitter.com/coachseek" target="_blank"><i class="fa fa-twitter"></i> &nbsp; Twitter</a></li>
                       <li><a href="https://www.linkedin.com/company/coachseek" target="_blank" ><i class="fa fa-linkedin"></i> &nbsp; &nbsp;Linkedin</a></li>
                   </ul>
               </div>
           </div>
       </footer>
    </div>
    
    <script src="<?php echo get_stylesheet_directory_uri();?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/script.js"></script>

          
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5FP99N"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5FP99N');</script>
    <!-- End Google Tag Manager -->
    <?php wp_footer(); ?>
    </body>
</html>