<?php
/*
Template Name: New Features Page Template
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
    <?php 
      $Path=$_SERVER['REQUEST_URI'];
      if($_POST){
        $to = "coachseeknz@gmail.com,samyin1990@gmail.com,r3i1i0s4l9j4e9m4@coachseeknz.slack.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $business = $_POST['business'];
        $subject = "Demo Request from ". $Path." page";
        $subject2 = "Copy of your Demo request submission";
        $message = $firstname . " " . $lastname . " from Business: ".$business . " request a demo," . "\n\n" . "Business name is: ". $_POST['business']."\n\n". " email address is : ". $from;
        $message2 = "Here is a copy of your request " . $firstname . "\n\n" . $message;
        $headers = "From:" . $from;
        $headers2 = "From: noreply@coachseek.com";
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
      }
    ?>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/styles.css?ver=<?php $theme_version = wp_get_theme(); echo $theme_version->Version; ?>" type="text/css" media="screen" />
    </head>

    <body>
    <div class="container">
    <?php

      // check if the flexible content field has rows of data
      if( have_rows('adwords-header') ):

           // loop through the rows of data
          while ( have_rows('adwords-header') ) : the_row();

              if( get_row_layout() == 'adwords-header-transparent' ):

              ?>
              <header class="fullpage--header">
                <div class="row--full">
                   <div class="col-3-12 ">
                     <div class="landing--header-logo">
                        <a href="<?php echo site_url(); ?>">
                          <img src="<?php echo get_stylesheet_directory_uri();?>/images/coachseek-logo-white.png" alt="">
                        </a>   
                     </div>
                   </div>
                   <div class="col-9-12 landing--header-nav">
                       <div class="landing--header-nav-icon" href="">
                         <i class="fa fa-bars fa-lg"></i>
                       </div>
                      <ul class="landing--header-nav-list">
                         
                           <li class="fullpage--header-nav-login"><a href="http://app.coachseek.com">Log in</a></li>
                           
                           <li><a class="landing--header-signin" href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'SignUpButton'});">Sign Up</a></li>
                       </ul>
                  
                   </div>               
                </div>
              </header>

              <?php

              elseif( get_row_layout() == 'adwords-header-white' ): 

              ?>
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
                             <li><a href="/features">Features</a></li>
                            <li><a href="/customers" >Testimonials</a></li>
                             <li><a href="/pricing">Pricing</a></li>
                             <li class="landing--header-nav-dropdown">
                              <a class="landing--header-nav-more">More &nbsp; <i class="fa fa-caret-down"></i></a>
                              <ul class="landing--header-nav-more-dropdown">
                                <li><a href="/support">Support</a></li>
                                <li><a href="/sports-website-design-services">Website Package</a></li>
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
              <?php
              endif;

          endwhile;

      else :

          // no layouts found

      endif;

      ?>

      <div id="fullpage">
       <?php
        // check if the flexible content field has rows of data
        if( have_rows('home') ):
             // loop through the rows of data
            while ( have_rows('home') ) : the_row();
                if( get_row_layout() == 'home' ):
                ?>
                <div class="section fullpage--home" style="background: url('<?php echo the_sub_field('home-background-image');?>') no-repeat center top; background-size:cover;">
                  <div class="fullpage--section-overlay"></div>
                  <div class="container">
          
                    <div class="row">
                      <h2><?php echo the_sub_field('home-title');?></h2>
                    </div>
                    <div class="row">
                      <div class="col-6-12">
                      <?php

                      // check if the flexible content field has rows of data
                      if( have_rows('adwords-home-left-section') ):

                           // loop through the rows of data
                          while ( have_rows('adwords-home-left-section') ) : the_row();

                              if( get_row_layout() == 'adwords-home-video' ):

                              ?>
                              <iframe src="https://player.vimeo.com/video/<?php echo the_sub_field('home-video-id');?>?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                              <?php

                              elseif( get_row_layout() == 'adwords-home-image' ): 
                              ?>
                              <img style="width:100%;max-width:100%;" src="<?php echo the_sub_field('home-image-url');?>" alt="">
                              <?php
                              endif;

                          endwhile;

                      else :
                        ?>
                        <iframe src="https://player.vimeo.com/video/<?php echo the_sub_field('home-video-id');?>?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        <?php

                      endif;

                      ?>
                      </div>
                      <div class="col-6-12">
                        <div class="row">
                          <h3><?php echo the_sub_field('home-bullet-title');?></h3>
                          <ul>
                          <?php

                            // check if the repeater field has rows of data
                            if( have_rows('home-bullet-list') ):

                              // loop through the rows of data
                                while ( have_rows('home-bullet-list') ) : the_row();

                                    // display a sub field value
                                  ?>
                                  <li><p><?php echo the_sub_field('home-bullet-list-row');?></p></li>
                                  <?php
                                endwhile;

                            else :

                                // no rows found

                            endif;

                            ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <a class="button" href="https://app.coachseek.com/#/new-user-setup"  onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'adwordsLandingPage'});"> <?php echo the_sub_field('home-button');?></a>
                    </div>
                  </div>
                </div>
            
                <?php
                  elseif( get_row_layout() == 'old-features-home' ): 
                ?>
                  <div class="mainfea--home-bg" style="background: url('<?php the_sub_field('header-image'); ?>') center center no-repeat; background-size: cover;">
                    <div class="landing-home-bg-overlap"></div>
                     <div class="row--full">
                         <h1><?php the_sub_field('title'); ?></h1>
                         <p><?php the_sub_field('description'); ?></p>
                          <a href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'FeaturesAndSolutions-top'}); ">Try for free</a>
                          <a href="#demo" class="white" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'FeaturesAndSolutions-top'}); ">Request a Demo</a>
                  
                     </div>
                 </div>

                <?php
                

                endif;

            endwhile;

        else :

            // no layouts found

        endif;

        ?>



        <?php

        // check if the flexible content field has rows of data
        if( have_rows('testimonial') ):

             // loop through the rows of data
            while ( have_rows('testimonial') ) : the_row();

              if( get_row_layout() == 'testimonial' ):
                ?>
                  <div class="section fullpage--testimonial">
                   <div class="container">
                      <a class="angle-left" href=""><i class="fa fa-angle-left"></i></a>
                      <a class="angle-right" href=""><i class="fa fa-angle-right"></i></a>
                      <div class="fullpage--testimonial-slides">
                        <?php

                          // check if the repeater field has rows of data
                          if( have_rows('testimonial-slides') ):

                            // loop through the rows of data
                              while ( have_rows('testimonial-slides') ) : the_row();
                                  ?>
                                  <div class="item row--full">
                                    <div class="col-6-12 <?php echo the_sub_field('testimonial-slides-color'); ?>">
                                      <h3><?php echo the_sub_field('testimonial-slides-quote'); ?></h3>
                                      <p><?php echo the_sub_field('testimonial-slides-name'); ?></p>
                                      <a class="button <?php echo the_sub_field('testimonial-slides-color'); ?>" href="<?php echo the_sub_field('testimonial-slides-link'); ?>">Read more</a>
                                    </div>
                                    <div class="col-6-12" style="background: url('<?php echo the_sub_field('testimonial-slides-image'); ?>') no-repeat center top; background-size:cover;"></div>
                                  </div>
                                  <?php
                              endwhile;

                          else :

                              // no rows found

                          endif;

                          ?>
                      </div>
                  </div>
                </div>

                <?php

              endif;

            endwhile;

        else :

            // no layouts found

        endif;

        ?>

      <?php

      // check if the flexible content field has rows of data
      if( have_rows('partners-banner') ):

           // loop through the rows of data
          while ( have_rows('partners-banner') ) : the_row();

              if( get_row_layout() == 'partners-banner' ):
      ?>
        <div class="section fullpage--partners-banner">
          <div class="row">
            <div class="col-6-12">
              <p> Official Partners: </p>
            </div>
            <div class="col-2-12">
              <img src="<?php the_sub_field('partners-banner-logo-1');?>" alt="">
            </div>
            <div class="col-4-12">
              <img src="<?php the_sub_field('partners-banner-logo-2');?>" alt="">
            </div>
          </div>
        </div>
      <?php  

              endif;

          endwhile;

      else :

          // no layouts found

      endif;

      ?>
      
        <?php

        // check if the flexible content field has rows of data
        if( have_rows('new-features') ):

             // loop through the rows of data
            while ( have_rows('new-features') ) : the_row();
                if( get_row_layout() == 'new-features-left' ):
                    ?>    
                  <div class="section fullpage--features left">
                  <?php

                    // check if the flexible content field has rows of data
                    if( have_rows('new-features-layout') ):

                         // loop through the rows of data
                        while ( have_rows('new-features-layout') ) : the_row();

                            if( get_row_layout() == 'new-features-layout-laptop' ):

                            ?>
                              <div class="fullpage--features-bg laptop">
                              </div>
                              <div class="fullpage--features-slides">
                                <div class="item">
                                  <div class="row--full">
                                    <div class="col-4-12 push-4">
                                      <i class="fa <?php the_sub_field('features-slides-icon');?> <?php the_sub_field('features-slides-color');?>"></i>
                                      <h3><?php the_sub_field('features-slides-title');?></h3>
                                      <p><?php the_sub_field('features-slides-description');?></p>
                                      <a href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'new-feature'}); ">Try for free</a>
                                    </div>
                                    <div class="col-8-12 pull-8">
                                      <div class="fullpage--feature-slides-bg laptop" style="background: url('<?php the_sub_field('features-slides-image');?>') no-repeat left center; background-size: 766px;"></div>
                                       <img src="<?php the_sub_field('features-slides-image');?>" alt="">
                                    </div>
                                  </div>
                                </div>
                              </div>  
                            <?php

                            elseif( get_row_layout() == 'new-features-layout-tablet' ): 

                            ?>
                              <div class="fullpage--features-bg tablet">
                              </div>
                              <div class="fullpage--features-slides">
                                <div class="item">
                                  <div class="row--full">
                                    <div class="col-4-12 push-4">
                                      <i class="fa <?php the_sub_field('features-slides-icon');?> <?php the_sub_field('features-slides-color');?>"></i>
                                      <h3><?php the_sub_field('features-slides-title');?></h3>
                                      <p><?php the_sub_field('features-slides-description');?></p>
                                      <a href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'new-feature'}); ">Try for free</a>
                                    </div>
                                    <div class="col-8-12 pull-8">
                                      <div class="fullpage--feature-slides-bg tablet" style="background: url('<?php the_sub_field('features-slides-image');?>') no-repeat left center;background-size: 641px;"></div>
                                       <img src="<?php the_sub_field('features-slides-image');?>" alt="">
                                    </div>
                                
                                  </div>
                                </div>
                              </div> 
                             <?php

                            elseif( get_row_layout() == 'new-features-layout-phone' ): 

                            ?>
                              <div class="fullpage--features-bg phone">
                              </div>
                              <div class="fullpage--features-slides">
                                <div class="item">
                                  <div class="row--full">
                                    <div class="col-4-12 push-4">
                                      <i class="fa <?php the_sub_field('features-slides-icon');?> <?php the_sub_field('features-slides-color');?>"></i>
                                      <h3><?php the_sub_field('features-slides-title');?></h3>
                                      <p><?php the_sub_field('features-slides-description');?></p>
                                      <a href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'new-feature'}); ">Try for free</a>
                                    </div>
                                    <div class="col-8-12 pull-8">
                                      <div class="fullpage--feature-slides-bg phone" style="background: url('<?php the_sub_field('features-slides-image');?>') no-repeat left 129px center;background-size: 240px;"></div>
                                       <img src="<?php the_sub_field('features-slides-image');?>" alt="">
                                    </div>
                                  </div>
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
              <?php
                endif;
                 if( get_row_layout() == 'new-features-right' ):
                ?>
                <div class="section fullpage--features">
                  <?php

                    // check if the flexible content field has rows of data
                    if( have_rows('new-features-layout') ):

                         // loop through the rows of data
                        while ( have_rows('new-features-layout') ) : the_row();

                            if( get_row_layout() == 'new-features-layout-laptop' ):

                            ?>
                             <div class="fullpage--features-bg laptop">
                              </div>
                              <div class="fullpage--features-slides">
                                <div class="item">
                                  <div class="row--full">
                                    <div class="col-4-12">
                                      <i class="fa <?php the_sub_field('features-slides-icon');?> <?php the_sub_field('features-slides-color');?>"></i>
                                      <h3><?php the_sub_field('features-slides-title');?></h3>
                                      <p><?php the_sub_field('features-slides-description');?></p>
                                      <a href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'new-feature'}); ">Try for free</a>
                                    </div>
                                    <div class="col-8-12">
                                      <div class="fullpage--feature-slides-bg laptop" style="background: url('<?php the_sub_field('features-slides-image');?>') no-repeat right center;background-size: 766px;"></div>
                                       <img src="<?php the_sub_field('features-slides-image');?>" alt="">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <?php

                            elseif( get_row_layout() == 'new-features-layout-tablet' ): 

                            ?>
                              <div class="fullpage--features-bg tablet">
                              </div>
                              <div class="fullpage--features-slides">
                                <div class="item">
                                  <div class="row--full">
                                    <div class="col-4-12">
                                      <i class="fa <?php the_sub_field('features-slides-icon');?> <?php the_sub_field('features-slides-color');?>"></i>
                                      <h3><?php the_sub_field('features-slides-title');?></h3>
                                      <p><?php the_sub_field('features-slides-description');?></p>
                                      <a href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'new-feature'}); ">Try for free</a>
                                    </div>
                                    <div class="col-8-12">
                                      <div class="fullpage--feature-slides-bg tablet" style="background: url('<?php the_sub_field('features-slides-image');?>') no-repeat right -14px center;background-size: 641px;"></div>
                                       <img src="<?php the_sub_field('features-slides-image');?>" alt="">
                                    </div>
                                  </div>
                                </div>
                              </div>
                             <?php

                            elseif( get_row_layout() == 'new-features-layout-phone' ): 

                            ?>
                              <div class="fullpage--features-bg phone">
                              </div>
                              <div class="fullpage--features-slides">
                                <div class="item">
                                  <div class="row--full">
                                    <div class="col-4-12">
                                      <i class="fa <?php the_sub_field('features-slides-icon');?> <?php the_sub_field('features-slides-color');?>"></i>
                                      <h3><?php the_sub_field('features-slides-title');?></h3>
                                      <p><?php the_sub_field('features-slides-description');?></p>
                                      <a href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'new-feature'}); ">Try for free</a>
                                    </div>
                                    <div class="col-8-12">
                                      <div class="fullpage--feature-slides-bg phone" style="background: url('<?php the_sub_field('features-slides-image');?>') no-repeat right 30px center;background-size: 240px;"></div>
                                       <img src="<?php the_sub_field('features-slides-image');?>" alt="">
                                    </div>
                                  </div>
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
                      
                <?php
                endif;              
            endwhile;

        else :

            // no layouts found

        endif;

        ?>           




        <?php

        // check if the flexible content field has rows of data
        if( have_rows('fullpage-optional-banner') ):

             // loop through the rows of data
            while ( have_rows('fullpage-optional-banner') ) : the_row();

                if( get_row_layout() == 'fullpage-optional-banner' ):
                  ?>

                <div class="section fullpage-optional-banner">
                  <div class="row">  
                    <h3><?php echo the_sub_field('banner-title'); ?></h3>
                    <div class="fullpage-optional-description"> 
                      <p><?php echo the_sub_field('banner-description'); ?></p>
                    </div>
                   
                    <a class="button" href="<?php echo the_sub_field('banner-link'); ?>" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'AdwordsLandingPage'});">Get Started</a>
                  </div>

                </div>
        <?php
                   endif;

            endwhile;

        else :

            // no layouts found

        endif;

        ?>

        <?php

        // check if the flexible content field has rows of data
        if( have_rows('fullpage-pricing') ):

             // loop through the rows of data
            while ( have_rows('fullpage-pricing') ) : the_row();

                if( get_row_layout() == 'usd' ):
        ?>
        <div class="section fullpage--testimonial-pricing">
          <div class="pricing--home-list">
          <h2>Pricing plan to suit any team</h2>
           <div class="row">
              <div class="col-3-12">  
                    <div class="pricing--home-list-price">
                      <h5>Solo</h5>
                      <h2>$20&nbsp;<span>/mo</span></h2>
                    </div>
                    <div class="pricing--home-list-coach">
                     <p>1 coach</p>
                      <a style="border-radius:8px;" href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Free Trial</a>
                    </div>
              </div> 
              <div class="col-3-12">
                <div class="pricing--home-list-price">
                  <h5>Standard&nbsp; <span>Popular!</span></h5>
                  <h2>$35&nbsp;<span>/mo</span></h2>
                </div>
                <div class="pricing--home-list-coach">
                   <p>Up to 5 coaches</p>
                  <a style="border-radius:8px;"  href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Free Trial</a>
                </div>
              </div>
              <div class="col-3-12">  
                    <div class="pricing--home-list-price">
                      <h5>Pro</h5>
                      <h2>$60&nbsp;<span>/mo</span></h2>
                    </div>
                    <div class="pricing--home-list-coach">
                      <p>Up to 10 coaches</p>
                      <a style="border-radius:8px;" href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Free Trial</a>
                    </div>
              </div> 
               <div class="col-3-12">
                <div class="pricing--home-list-price">
                    <h5>Unlimited</h5>
                    <h2>POA</h2>
                  </div>
                  <div class="pricing--home-list-coach">
                    <p class="unlimited">Unlimited number of coaches</p>
                    <a style="border-radius:8px;"  class="unlimited" href="#demo" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Request a Demo</a>
                </div>
              </div>      
           </div>
           <div class="pricing--home-list-desc row">
            <p>Pricing is in USD. Includes all features on every device, plus full support &amp; setup. <br>
"With Coachseek, I'm saving over two and a half hours on admin every single day." Carl Tinsley, Football Kidz NZ</p>
           </div>
           <div class="pricing--home-list-suitplan row" style="border-radius:8px;">
              <h5>SAVE 17% WITH OUR ANNUAL PLANS</h5>
              <p>Commit to a year, and we’ll only charge you for 10 months.</p>
           </div>
         </div>
        </div>
        <?php
           elseif( get_row_layout() == 'uk' ): 

                ?>
            <div class="section fullpage--testimonial-pricing">
                <div class="pricing--home-list">
                <h2>Pricing plan to suit any team</h2>
                 <div class="row">
                    <div class="col-3-12">  
                          <div class="pricing--home-list-price">
                            <h5>Solo</h5>
                            <h2>£15&nbsp;<span>/mo</span></h2>
                          </div>
                          <div class="pricing--home-list-coach">
                            <p>1 coach</p>
                            <a style="border-radius:8px;" href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Free Trial</a>
                          </div>
                    </div> 
                    <div class="col-3-12">
                      <div class="pricing--home-list-price">
                        <h5>Standard&nbsp; <span>Popular!</span></h5>
                        <h2>£25&nbsp;<span>/mo</span></h2>
                      </div>
                      <div class="pricing--home-list-coach">
                         <p>Up to 5 coaches</p>
                        <a style="border-radius:8px;"  href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Free Trial</a>
                      </div>
                    </div>
                    <div class="col-3-12">  
                          <div class="pricing--home-list-price">
                            <h5>Pro</h5>
                            <h2>£40&nbsp;<span>/mo</span></h2>
                          </div>
                          <div class="pricing--home-list-coach">
                            <p>Up to 10 coaches</p>
                            <a style="border-radius:8px;" href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Free Trial</a>
                          </div>
                    </div> 
                     <div class="col-3-12">
                      <div class="pricing--home-list-price">
                          <h5>Unlimited</h5>
                          <h2>POA</h2>
                        </div>
                        <div class="pricing--home-list-coach">
                          <p class="unlimited">Unlimited number of coaches</p>
                          <a style="border-radius:8px;"  class="unlimited" href="#demo" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Request a Demo</a>
                      </div>
                    </div>      
                 </div>
                 <div class="pricing--home-list-desc row">
                  <p>Pricing is in UK. Includes all features on every device, plus full support &amp; setup. <br>
      "With Coachseek, I'm saving over two and a half hours on admin every single day." Carl Tinsley, Football Kidz NZ</p>
                 </div>
                 <div class="pricing--home-list-suitplan row" style="border-radius:8px;">
                    <h5>SAVE 17% WITH OUR ANNUAL PLANS</h5>
                    <p>Commit to a year, and we’ll only charge you for 10 months.</p>
                 </div>
               </div>
              </div>

                <?php
                elseif( get_row_layout() == 'nz' ): 
                ?>
                <div class="section fullpage--testimonial-pricing">
                <div class="pricing--home-list">
                <h2>Pricing plan to suit any team</h2>
                 <div class="row">
                    <div class="col-3-12">  
                          <div class="pricing--home-list-price">
                            <h5>Solo</h5>
                            <h2>$30&nbsp;<span>/mo</span></h2>
                          </div>
                          <div class="pricing--home-list-coach">
                            <p>1 coach</p>
                            <a style="border-radius:8px;" href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Free Trial</a>
                          </div>
                    </div> 
                    <div class="col-3-12">
                      <div class="pricing--home-list-price">
                        <h5>Standard&nbsp; <span>Popular!</span></h5>
                        <h2>$50&nbsp;<span>/mo</span></h2>
                      </div>
                      <div class="pricing--home-list-coach">
                        <p>Up to 5 coaches</p>
                        <a style="border-radius:8px;"  href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Free Trial</a>
                      </div>
                    </div>
                    <div class="col-3-12">  
                          <div class="pricing--home-list-price">
                            <h5>Pro</h5>
                            <h2>$85&nbsp;<span>/mo</span></h2>
                          </div>
                          <div class="pricing--home-list-coach">
                            <p>Up to 10 coaches</p>
                            <a style="border-radius:8px;" href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Free Trial</a>
                          </div>
                    </div> 
                     <div class="col-3-12">
                      <div class="pricing--home-list-price">
                          <h5>Unlimited</h5>
                          <h2>POA</h2>
                        </div>
                        <div class="pricing--home-list-coach">
                          <p class="unlimited">Unlimited number of coaches</p>
                          <a style="border-radius:8px;"  class="unlimited" href="#demo" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Request a Demo</a>
                      </div>
                    </div>      
                 </div>
                 <div class="pricing--home-list-desc row">
                  <p>Pricing is in NZ. Includes all features on every device, plus full support &amp; setup. <br>
      "With Coachseek, I'm saving over two and a half hours on admin every single day." Carl Tinsley, Football Kidz NZ</p>
                 </div>
                 <div class="pricing--home-list-suitplan row" style="border-radius:8px;">
                    <h5>SAVE 17% WITH OUR ANNUAL PLANS</h5>
                    <p>Commit to a year, and we’ll only charge you for 10 months.</p>
                 </div>
               </div>
              </div>

                <?php

                endif;

            endwhile;

        else :

            // no layouts found

        endif;

        ?>
               
        <div class="section fullpage--footer">
          <div class="row">
            <h3><?php echo the_field('footer-title'); ?></h3>
          </div>
            <form method="post" name="footer-demo-request" id="footer-demo-request-form" action="">     
              <div class="row">
                <div class="row--full">
                  <div class="row--full left ">
                    <input type="text" name="business" placeholder="Business name" required>
                  </div>
                  <div class="row--full name left">
                    <div class="col-6-12">
                    <input type="text" name="firstname" placeholder="First name" required>
                    </div>
                    <div class="col-6-12">
                      <input type="text" name="lastname" placeholder="Last name" required>
                    </div>
                  </div>
                  <div class="row--full">
                    <div class="row--full right "><input type="email" name="email" placeholder="Email address" required></div>
                    </div>
                  </div>
                  <div class="row--full" style="text-align:center;">
                    <button id="footer-demo-request-submit" type="submit" name="submit">Let's Talk &nbsp;<span class="loading-submit"><i class="fa fa-spinner fa-pulse"></i></button>
                  </div>
                  <p class="footer-demo-post-error" style="color:red;text-align:center;">
                    Your submission could not be processed, Please try later again!
                  </p>
                  <p class="footer-demo-post-success" style="color:green;text-align:center;">
                    Your submission has been received, We will touch you soon!
                  </p>
            </form>
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
                       <li><a href="/top-50-influential-sports-coaches-for-2015">Top 50 Coaches for 2015</a></li>
                       <li><a href="/referrals">Refer & Earn</a></li>
                       <li><a href="/sports-coaching-survival-guide">Ebook</a></li>
                   </ul>
               </div>
               <div class="col-3-12">
                   <ul>
                       <li><h4>product</h4></li>
                       <li><a href="/features">Features</a></li>
                       <li><a href="/customers">Testimonials</a></li>
                       <li><a href="/pricing">Pricing</a></li>
                       <li><a href="/faq">FAQ's</a></li>
                       <li><a href="http://support.coachseek.com/" target="_blank">Support</a></li>
                       <li><a href="/newsletter">Newsletter</a></li>
                       <li><a href="/subscribe-paypal">Subscribe</a></li>
                   </ul>
               </div>
               <div class="col-3-12">
                   <ul>
                        <li><h4>solutions</h4></li>
                       <li><a href="/tennis-software">Tennis</a></li>
                       <li><a href="/squash-software">Squash</a></li>
                       <li><a href="/swimming-software">Swimming</a></li>
                       <li><a href="/golf-software">Golf</a></li>
                       <li><a href="/cricket-software">Cricket</a></li>
                       <li><a href="/yachting-and-sailing-software">Yachting & Sailing</a></li>
                       <li><a href="/basketball-software">Basketball</a></li>
                       <li><a href="/fitness">Fitness</a></li>
                       <li><a href="/running">Running</a></li>
                       <li><a href="/equestrian">Equestrian</a></li>
                   </ul>
               </div>
               <div class="col-3-12">
                   <ul>
                       <li><h4>contact</h4></li>
                       <li><a href="mailto:hello@coachseek.com" target="_blank"><i class="fa fa-envelope"></i> &nbsp; hello@coachseek.com</a></li>
                       <li><a href="mailto:support@coachseek.com" target="_blank"><i class="fa fa-envelope"></i> &nbsp; support@coachseek.com</a></li>
                         <li><a href=""><i class="fa fa-phone"></i> &nbsp; US/CAN +1-888-762-7187</a></li>
                       <li><a href=""><i class="fa fa-phone"></i> &nbsp; UK +44 (0)20-8133-0285</a></li>
                       <li><a href=""><i class="fa fa-phone"></i> &nbsp; AUS +61 (0)39-028-4578</a></li>
                       <li><a href=""><i class="fa fa-phone"></i> &nbsp; NZ +64 (0)21-842-810</a></li>
                       <li><a href="https://www.facebook.com/Coachseek" target="_blank"><i class="fa fa-facebook-f"></i> &nbsp; &nbsp; Facebook</a></li>
                       <li><a href="https://twitter.com/coachseek" target="_blank"><i class="fa fa-twitter"></i> &nbsp; Twitter</a></li>
                       <li><a href="https://www.linkedin.com/company/coachseek" target="_blank" ><i class="fa fa-linkedin"></i> &nbsp; &nbsp;Linkedin</a></li>
                   </ul>
               </div>
           </div>
       </footer>
    </div>
    
    <script src="<?php echo get_stylesheet_directory_uri();?>/bower_components/please-wait/build/please-wait.min.js"></script>
    <script type="text/javascript">
      var loading_screen = pleaseWait({
        logo: "<?php echo get_stylesheet_directory_uri();?>/images/coachseek-logo.png",
        backgroundColor: '#fefefe',
        loadingHtml: "<p class='loading-message' style='color:#00A478;text-transform:uppercase;text-shadow: 1px 1px 3px #bbb;'>Discover the best way to manage your coaching business</p> <div class='sk-double-bounce'><div class='sk-child sk-double-bounce1'></div><div class='sk-child sk-double-bounce2'></div></div>"
      });
    </script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/bower_components/jquery-mousewheel/jquery.mousewheel.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/bower_components/OwlCarousel/owl-carousel/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/script.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/adwords_script.js"></script>
    <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

     ga('create', 'UA-50345817-1', 'auto');
     ga('send', 'pageview');

    </script>
   
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