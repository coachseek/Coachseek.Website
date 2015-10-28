<?php
/*
Template Name: Testimonial Page Template
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
                        <li><a href="/support">Support</a></li>
                       <li><a href="/blog">Blog</a></li>
                        <li><a href="http://app.coachseek.com">Sign in</a></li>
                       <li><a class="landing--header-signin" href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'SignUpButton'});">Start My 14 Day Trial</a></li>
                   </ul>
              
               </div>               
            </div>
      </header>
      <?php if( get_field('header-image') ): ?>
       <div class="landing--home-bg testimonial" style="">
          <?php endif; ?>
          <div class="landing--home-bg-overlap"></div>
           <div class="row--full">
               <h1><?php the_field('title'); ?></h1>
           </div>
       </div>

       <div class="testimonial--home">
         <div class="row--full">
           <h3><?php the_field('testimonial-title'); ?></h3>
         </div>
         <div class="row--full">
           <div class="col-6-12">
             <h5><?php the_field('testimonial-coach-name'); ?></h5>
             <h6><?php the_field('testimonial-coach-organization'); ?></h6>
             <a href="http://<?php the_field('testimonial-coach-website'); ?>" target="_blank"><?php the_field('testimonial-coach-website'); ?></a>
             <p><?php the_field('testimonial-coach-description'); ?></p>
           </div>
           <div class="col-6-12">
             <img src="<?php the_field('testimonial-coach-image'); ?>" alt="">
           </div>
         </div>
         <div class="row--full tryforfree">

         <a href="https://app.coachseek.com/#/new-user-setup"  onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Mat-Top'});">Try for free</a> 
         <a href="/features"  onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Mat-Top'});">See Features</a> 
                      
         </div>
       </div>

       <div class="pricing--home-list testimonial-pricing">
         <div class="row">
          <?php
            // check if the flexible content field has rows of data
            if( have_rows('price-page-plan') ):
             // loop through the rows of data
            while ( have_rows('price-page-plan') ) : the_row(); 
            if( get_row_layout() == 'popular' ):

            ?>
            <div class="col-3-12">
             <div class="pricing--home-list-popular">Popular</div>  
              <div class="pricing--home-list-price">
                <h5><?php the_sub_field('plan-name');?></h5>
                <h2>$<?php the_sub_field('price-number');?> <span>/mo</span></h2>
              </div>
              <div class="pricing--home-list-coach">
                <p><?php the_sub_field('coach-number');?></p>
                <a href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Free trial</a>
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
                    <a href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Free trial</a>
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
                    <a href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Free trial</a>
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
         <div class="pricing--home-list-suitplan row">
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
      <?php if( get_field('quote-image') ): ?>
       <div class="landing--home-quote testimonial-quote" style="background: url('<?php the_field('quote-image'); ?>') center center no-repeat; background-size: cover;">
       <?php endif; ?>
           <div class="landing--home-overlap"></div>
           <div class="row--full">
               <h3><?php the_field('quote-title'); ?></h3>
               <p><?php the_field('quote-name'); ?></p>
               <a href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Mat-Bottom'});">Try for free</a>
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
         $(document).ready(function(){
          setTimeout(function() {
             $("html, body").animate({
                scrollTop:$('.testimonial--home').position().top
             },{duration:1200});
           },1000);
         
         });
          

    </script>
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