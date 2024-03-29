<?php
/*
Template Name: Support Page Template
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
      <?php if( get_field('support-header-image') ): ?>
       <div class="mainfea--home-bg" style="height:initial;padding-top:100px;padding-bottom:150px;background: url('<?php the_field('support-header-image'); ?>') center center no-repeat; background-size: cover;">
          <?php endif; ?>
          <div class="landing-home-bg-overlap" style="top: 0;"></div>
           <div class="row--full">
               <h1 style="padding-top:50px;color:white;"><?php the_field('support-header-title'); ?></h1>
               <p style="font-size:18px;"><?php the_field('support-header-description'); ?></p>
             
           </div>
       </div>

       <div class="landing--home-desc tnz-desc referrals-feature">
<!-- 
             <h3><?php //the_field('support-title'); ?></h3>
             <p><?php //the_field('support-description'); ?></p> -->
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

                     <p style="width:100%; text-align:left;"><?php the_sub_field('description');?></p>
                     <ul>
                     <?php

                      // check if the repeater field has rows of data
                      if( have_rows('support-link') ):

                        // loop through the rows of data
                          while ( have_rows('support-link') ) : the_row();

                              // display a sub field value
                            
                              ?>
                              <li>
                                 <a class="support-link" href="<?php the_sub_field('support-link');?>"><?php the_sub_field('support-link-description');?></a>
                              </li>
                             
                              <?php

                          endwhile;

                      else :

                          // no rows found

                      endif;

                      ?>
                      </ul>                   
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

      <?php if( get_field('support-quote-image') ): ?>
       <div class="landing--home-quote tnz-quote referral-quote" style="background: url('<?php the_field('support-quote-image'); ?>') center center no-repeat; background-size: cover;">
       <?php endif; ?>
           <div class="landing--home-overlap"></div>
           <div class="row--full" style="padding-left:0px;">
               <h3 style="width:100%;text-align:center;"><?php the_field('support-quote-title'); ?></h3>
               <a style="text-align: center;display: block;margin: 0 auto;padding: 20px 60px;font-size: 18px;" href="mailto:support@coachseek.com" target="_blank">Get In Touch With Our Friendly Support Team</a>
  
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