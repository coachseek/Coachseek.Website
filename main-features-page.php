<?php
/*
Template Name: Main Features Page Template
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
                  <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/coachseek-logo.png" alt="">
                  </a>   
               </div>
               <div class="col-6-12 landing--header-nav">
                   <div class="landing--header-nav-icon" href="">
                     <i class="fa fa-bars fa-lg"></i>
                   </div>
                   <ul class="landing--header-nav-list">
                       <li><a href="/main-features">Features</a></li>
                       <li><a href="/blog">Blog</a></li>
                       <li><a class="landing--header-signin" href="http://app.coachseek.com">Sign In</a></li>
                   </ul>
              
               </div>               
            </div>
    </header>
      <?php if( get_field('header-image') ): ?>
       <div class="mainfea--home-bg" style="background: url('<?php the_field('header-image'); ?>') center center no-repeat; background-size: cover;">
          <?php endif; ?>
          <div class="landing-home-bg-overlap"></div>
           <div class="row--full">
               <h1><?php the_field('title'); ?></h1>
               <p><?php the_field('description'); ?></p>
        
           </div>
       </div>

       <div class="mainfea--home-feature">       
        <?php

        // check if the flexible content field has rows of data
        if( have_rows('features') ):

             // loop through the rows of data
            while ( have_rows('features') ) : the_row();
                if( get_row_layout() == 'features-left' ):
                    ?>
                      <div class="row">
                          <div class="col-6-12 mainfea--home-feature-desc push-6">
                          <h5><?php  the_sub_field('title');?></h5>
                          <p><?php  the_sub_field('desc');?></p>
                        </div>
                         <div class="col-6-12 mainfea--home-feature-img pull-6">
                          <?php 
                            $image = get_sub_field('image');
                            echo ' <img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />'    
                          ?>          
                        </div>
                    
                      </div>   
              <?php
                endif;
                 if( get_row_layout() == 'features-right' ):
                ?>
                     <div class="row">
                         <div class="col-6-12 mainfea--home-feature-desc ">
                            <h5><?php  the_sub_field('title');?></h5>
                            <p><?php  the_sub_field('desc');?></p>
                         </div>
                         <div class="col-6-12 mainfea--home-feature-img ">
                          <?php 
                            $image = get_sub_field('image');
                            echo ' <img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />'    
                          ?>          
                        </div>                     
                      </div>   
                <?php
                endif;              
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
               <h3>Interested in Coachseek ?</h3>

               <a href="">try for free</a>
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
                       <li><a href="/website-terms">Terms</a> & <a href="/privacy-policy"> Privacy</a></li>
                   </ul>
               </div>
               <div class="col-3-12">
                   <ul>
                       <li><h4>product</h4></li>
                       <li><a href="/main-features">Features</a></li>
                       <li><a href="/pricing">Pricing</a></li>
                       <li><a href="/faq">FAQ's</a></li>
                   </ul>
               </div>
               <div class="col-3-12">
                   <ul>
                       <li><h4>examples</h4></li>
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
                       <li><a href="mailto:hello@coachseek.com" target="_blank">hello@coachseek.com</a></li>
                       <li><a href="mailto:support@coachseek.com" target="_blank">support@coachseek.com</a></li>
                       <li><a href="https://www.facebook.com/Coachseek" target="_blank">Facebook</a></li>
                       <li><a href="https://twitter.com/coachseek" target="_blank">Twitter</a></li>
                       <li><a href="https://www.linkedin.com/company/coachseek" target="_blank" >Linkedin</a></li>
                   </ul>
               </div>
           </div>
       </footer>
    </div>
    
    <script src="<?php echo get_stylesheet_directory_uri();?>/bower_components/jquery/dist/jquery.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/script.js"></script>
    
    </body>
</html>