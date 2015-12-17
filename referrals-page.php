<?php
/*
Template Name: Referrals Page Template
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
                       <li><a href="/features">Features</a></li>
                      <li><a href="/customers" >Testimonials</a></li>
                       <li><a href="/pricing">Pricing</a></li>
                       <li class="landing--header-nav-dropdown">
                        <a class="landing--header-nav-more">More &nbsp; <i class="fa fa-caret-down"></i></a>
                        <ul class="landing--header-nav-more-dropdown">
                          <li><a href="/support">Support</a></li>
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
      <?php if( get_field('header-image') ): ?>
       <div class="mainfea--home-bg" style="height:initial;padding-top:100px;padding-bottom:150px;background: url('<?php the_field('header-image'); ?>') center center no-repeat; background-size: cover;">
          <?php endif; ?>
          <div class="landing-home-bg-overlap" style="top: 0;"></div>
           <div class="row--full">
               <h1 style="padding-top:50px;color:white;"><?php the_field('faqs-header-title'); ?></h1>
               <p style="font-size:18px;"><?php the_field('faqs-header-description'); ?></p>
             
           </div>
       </div>

       <div class="landing--home-desc tnz-desc referrals-feature">

             <h3><?php the_field('referrals-title'); ?></h3>
             <p><?php the_field('referrals-description'); ?></p>
             <?php

              // check if the flexible content field has rows of data
              if( have_rows('features') ):

                   // loop through the rows of data
                  while ( have_rows('features') ) : the_row();
                  if( get_row_layout() == 'circle-row' ): 
                   ?>                     
                <div class="row--full">
                <?php  if( have_rows('circle-row') ):
                      while ( have_rows('circle-row') ) : the_row(); ?>
                 <div class="col-4-12">
                    <div class="landing--home-circle">
                        <img style="border-radius: 200px;" src="<?php the_sub_field('image');?>" alt="">
                     </div>
                     <h5><?php the_sub_field('title');?></h5>
                     <p style="width:90%;text-align:center;"><?php the_sub_field('description');?></p>
                 </div>
                 
                 <?
                  endwhile;

                  endif;
                  endif;
                 ?>

               </div>
              <?php 

              endwhile;
              else :
                  // no layouts found
              endif;
              ?>

       </div>

      <?php if( get_field('quote-image') ): ?>
       <div class="landing--home-quote tnz-quote referral-quote" style="background: url('<?php the_field('quote-image'); ?>') center center no-repeat; background-size: cover;">
       <?php endif; ?>
           <div class="landing--home-overlap"></div>
           <div class="row--full" style="padding-left:0px;">
               <h3 style="width:100%;text-align:center;"><?php the_field('quote-title'); ?></h3>
               <a style="text-align: center;display: block;margin: 0 auto;padding: 20px 60px;font-size: 18px;" href="mailto:?cc=referrals@coachseek.com&subject=Your invite to Coachseek&body=Hi there!%0D%0A%0D%0AJust getting touch as I wanted to introduce you to Coachseek, a powerful scheduling and online booking tool built for sports coaches. %0D%0AI'm using it for my coaching business, and reckon it could help you too.%0D%0AThe team at Coachseek have a 14 day Free Trial you can sign up so you can give it a go!%0D%0ACheck it out at http://www.coachseek.com/%0D%0A%0D%0ATalk soon!" target="_blank">Introduce Your Friends</a>
  
           </div>
       </div>

      <div class="referral--faqs">
        <div class="row--full"><h1>Referral FAQs</h1></div>
        <?php

        // check if the flexible content field has rows of data
        if( have_rows('faqs') ):

          // loop through the rows of data
          while ( have_rows('faqs') ) : the_row();

            if( get_row_layout() == 'faqs-row' ):
        ?>

        <div class="row--full">
          <?php

          // check if the repeater field has rows of data
          if( have_rows('faqs-column') ):

            // loop through the rows of data
              while ( have_rows('faqs-column') ) : the_row();

                  // display a sub field value
                  ?>
                  <div class="col-4-12">
                    <h3 class="referral--faqs-title"><?php  the_sub_field('faqs-title'); ?></h3>
                    <p class="referral--faqs-description"><?php  the_sub_field('faqs-description'); ?></p>
                  </div>

                  <?php

              endwhile;

          else :

              // no rows found

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
        <div class="referral--faqs-contactus row--full">
          <h3><?php the_field('faqs-contactus'); ?></h3>
        </div>

      </div>

      <div class="pricing--home-list tnz-pricing referral--testimonials">
       <?php

        // check if the flexible content field has rows of data
        if( have_rows('testimonials') ):

          // loop through the rows of data
          while ( have_rows('testimonials') ) : the_row();

            if( get_row_layout() == 'testimonials-row' ):
        ?>
        <div class="row--full">
        <?php

          // check if the repeater field has rows of data
          if( have_rows('testimonials-column') ):

            // loop through the rows of data
              while ( have_rows('testimonials-column') ) : the_row();

                  // display a sub field value
                  ?>
          <div class="col-4-12">

            <div class="col-3-12">
              <img src="<?php the_sub_field('testimonials-image');?>" alt="">
            </div>
            <div class="col-9-12">      
              <p class="referral--testimonials-words"><?php the_sub_field('testimonials-words'); ?></p>
              <h3 class="referral--testimonials-name"><?php the_sub_field('testimonials-name'); ?></h3>
              <p class="referral--testimonials-title"><?php the_sub_field('testimonials-title'); ?></p>
            </div>

          </div>
                <?php

              endwhile;

          else :

              // no rows found

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

      </div>
    


       <footer>
           <div class="row">
               <div class="col-3-12">
                   <ul>
                       <li><h4>company</h4></li>
                       <li><a href="/team">Team</a></li>
                       <li><a href="/blog">Blog</a></li>
                       <li><a href="/careers">Careers</a></li>
                       <li><a href="/website-terms">Terms &</a> <a href="/privacy-policy">Privacy</a></li>
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