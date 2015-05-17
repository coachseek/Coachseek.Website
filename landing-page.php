<?php
/*
Template Name: Landing Page Template
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
       
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/styles.css">

    </head>

    <body>
    <div class="container">
        <header>
            <div class="row--full">
               <div class="col-6-12 landing--header-logo">
                   <img src="<?php echo get_stylesheet_directory_uri();?>/images/coachseek-logo.png" alt="">
               </div>
               <div class="col-6-12 landing--header-nav">
                   <ul>
                       <li><a href="">Features</a></li>
                       <li><a href="">Blog</a></li>
                       <li><a class="landing--header-signin" href="">Sign In</a></li>
                   </ul>
               </div>               
            </div>
		</header>
   
       <div class="landing--home-bg">
          <div class="landing-home-bg-overlap"></div>
           <div class="row--full">
               <h1><?php the_field('title'); ?></h1>
               <p class="subtitle"><?php the_field('description'); ?></p>
               <a class="landing--home-tryfree" href="">Try for free</a>
               <p class="sublabel">14 day trial, no credit card required</p>
           </div>
       </div>
       
       <div class="landing--home-desc">
           <div class="row">
                <img class="computer-center" src="<?php echo get_stylesheet_directory_uri();?>/images/computer.png" alt="">
                <?php
                // check if the repeater field has rows of data
                if( have_rows('features') ):

                  // loop through the rows of data
                    while ( have_rows('features') ) : the_row();
                        ?>
                        <div class="col-3-12">
                           <h5><?php the_sub_field('title');?></h5>
                           <p><?php the_sub_field('description');?></p>
                        </div>
                        <?php

                    endwhile;

                else :

                    // no rows found

                endif;

                ?>
           </div>
           <div class="row--full">
               <a href="">View Features</a>
           </div>
       </div>
       
       <div class="landing--home-quote">
           <div class="landing--home-overlap"></div>
           <div class="row--full">
               <h3><?php the_field('quote-title'); ?></h3>
               <p><?php the_field('quote-name'); ?></p>
               <a href="">View Features</a>
           </div>
       </div>
       
       
       <footer>
           <div class="row">
               <div class="col-3-12">
                   <ul>
                       <li><h4>company</h4></li>
                       <li><a href="">Team</a></li>
                       <li><a href="">Blog</a></li>
                       <li><a href="">Careers</a></li>
                       <li><a href="">Terms & Privacy</a></li>
                   </ul>
               </div>
               <div class="col-3-12">
                   <ul>
                       <li><h4>product</h4></li>
                       <li><a href="">Features</a></li>
                       <li><a href="">Pricing</a></li>
                       <li><a href="">FAQ's</a></li>
                       <li><a href="">Roadmap</a></li>
                       <li><a href="">Newsletter</a></li>
                   </ul>
               </div>
               <div class="col-3-12">
                   <ul>
                       <li><h4>examples</h4></li>
                       <li><a href="">Tennis</a></li>
                       <li><a href="">Golf</a></li>
                       <li><a href="">Swimming</a></li>
                       <li><a href="">Fitness</a></li>
                       <li><a href="">Equestrian</a></li>
                       <li><a href="">Running</a></li>
                       <li><a href="">Cricket</a></li>
                   </ul>
               </div>
               <div class="col-3-12">
                   <ul>
                       <li><h4>contact</h4></li>
                       <li><a href="">hello@coachseek.com</a></li>
                       <li><a href="">support@coachseek.com</a></li>
                       <li><a href="">Facebook</a></li>
                       <li><a href="">Twitter</a></li>
                       <li><a href="">Linkedin</a></li>
                   </ul>
               </div>
           </div>
       </footer>
       
    </div>
    
    
    
    </body>
</html>