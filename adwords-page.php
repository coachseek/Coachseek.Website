<?php
/*
Template Name: Adwords Page Template
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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/styles.css?ver=<?php $theme_version = wp_get_theme(); echo $theme_version->Version; ?>" type="text/css" media="screen" />
    </head>

    <body>
    <div class="container">
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
      <div id="fullpage">
      <?php
        // check if the flexible content field has rows of data
        if( have_rows('home') ):
             // loop through the rows of data
            while ( have_rows('home') ) : the_row();
                if( get_row_layout() == 'home' ):
                ?>
                <div class="section fullpage--home" style="background: url('<?php echo get_stylesheet_directory_uri();?>/images/playing-tennis-1.jpeg') no-repeat center top; background-size:cover;">
                  <div class="fullpage--section-overlay"></div>
                  <div class="container">
          
                    <div class="row">
                      <h2><?php echo the_sub_field('home-title');?></h2>
                    </div>
                    <div class="row">
                      <div class="col-6-12">
                      <iframe src="https://player.vimeo.com/video/144455867?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
                      <a class="button" href=""><?php echo the_sub_field('home-button');?></a>
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
                                      <a class="button <?php echo the_sub_field('testimonial-slides-color'); ?>" href="">Read more</a>
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
        if( have_rows('features') ):

             // loop through the rows of data
            while ( have_rows('features') ) : the_row();

              if( get_row_layout() == 'features' ):

              ?>
              <div class="section fullpage--features">
                  <div class="fullpage--features-bg">
                  </div>
                  <div class="fullpage--features-slides">
                    <?php
                    // check if the repeater field has rows of data
                    if( have_rows('features-slides') ):
                      // loop through the rows of data
                        while ( have_rows('features-slides') ) : the_row();
                            ?>
                          <div class="item">
                            <div class="row--full">
                              <div class="col-4-12">
                                <i class="fa <?php the_sub_field('features-slides-icon');?> <?php the_sub_field('features-slides-color');?>"></i>
                                <h3><?php the_sub_field('features-slides-title');?></h3>
                                <p><?php the_sub_field('features-slides-description');?></p>
                              </div>
                              <div class="col-8-12">
                                <div class="fullpage--feature-slides-bg" style="background: url('<?php the_sub_field('features-slides-image');?>') no-repeat right center;
                                background-size: 766px;"></div>

                              </div>
                            </div>
                          </div>
                            <?php
                        endwhile;

                    else :

                        // no rows found

                    endif;

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

        <div class="section fullpage-optional-banner">
          
        </div>

        <div class="section fullpage--testimonial-pricing">
          
          <div class="pricing--home-list">
          <h2>Pricing plan to suit any team</h2>
           <div class="row">
            <?php
              // check if the flexible content field has rows of data
              if( have_rows('price-page-plan') ):
               // loop through the rows of data
              while ( have_rows('price-page-plan') ) : the_row(); 
              if( get_row_layout() == 'popular' ):

              ?>
              <div class="col-3-12">
               <!-- <div class="pricing--home-list-popular">Popular</div>   -->
                <div class="pricing--home-list-price">
                  <h5><?php the_sub_field('plan-name');?></h5>
                  <h2>$<?php the_sub_field('price-number');?> <span>/mo</span></h2>
                </div>
                <div class="pricing--home-list-coach">
                  <p><?php the_sub_field('coach-number');?></p>
                  <a style="border-radius:8px;"  href="/subscribe-paypal" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Free Trial</a>
                </div>
              </div>
             <?php elseif( get_row_layout() == 'unlimited' ): ?>
                 <div class="col-3-12">
                  <div class="pricing--home-list-price">
                      <h5><?php the_sub_field('plan-name');?></h5>
                      <h2><?php the_sub_field('price-poa');?></h2>
                    </div>
                    <div class="pricing--home-list-coach">
                      <p class="unlimited"><?php the_sub_field('coach-number');?></p>
                      <a style="border-radius:8px;"  class="unlimited" href="#demo" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Request a Demo</a>
                  </div>
                </div>
             <?php elseif( get_row_layout() == 'normal' ): ?>       
                <div class="col-3-12">  
                 
                    <div class="pricing--home-list-price">
                      <h5><?php the_sub_field('plan-name');?></h5>
                      <h2>$<?php the_sub_field('price-number');?> <span>/mo</span></h2>
                    </div>
                    <div class="pricing--home-list-coach">
                      <p><?php the_sub_field('coach-number');?></p>
                      <a style="border-radius:8px;" href="/subscribe-paypal" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Free Trial</a>
                    </div>
                </div>
              <?php endif;

                  endwhile;

                  else :

                      // no layouts found

                  endif;

              ?>       
           </div>
           <div class="pricing--home-list-desc row">
              <?php
              // check if the flexible content field has rows of data
              if( have_rows('price-information') ):
               // loop through the rows of data
              while ( have_rows('price-information') ) : the_row(); 

              ?>
             <p>
             <?php the_sub_field('information');?>
             </p>
           </div>
           <div class="pricing--home-list-suitplan row" style="border-radius:8px;">
              <h5><?php the_sub_field('help');?></h5>
              <?php the_sub_field('help-information');?>
               <?php 

                  endwhile;

                  else :

                      // no layouts found

                  endif;

              ?>       
           </div>
         </div>
        </div>

       
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