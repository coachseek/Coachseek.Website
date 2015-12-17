<?php
/*
Template Name: ebook Page Template
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

      <?php 
              if(isset($_POST['submit'])){
                  $to = "ianpbishop@gmail.com,denym8@gmail.com,samyin1990@gmail.com,Apwong8@gmail.com,alexhamilton@windowslive.com"; // this is your Email address
                  $from = $_POST['email']; // this is the sender's Email address
                  $firstname = $_POST['firstname'];
                  $lastname = $_POST['lastname'];
                  $phone = $_POST['phone'];
                  $subject = "Health Check from e-book page";
                  $subject2 = "Copy of your Demo request submission";
                  $message = $firstname . " ".$lastname . " Request a demo," . "\n\n" . "Business name is: ". $_POST['business']."\n\n". "phone number is : ".$phone ."\n\n". " email address is : ". $from;
                  $message2 = "Here is a copy of your request " . $firstname . "\n\n" . $message;
                  $headers = "From:" . $from;
                  $headers2 = "From:" . $to;
                  mail($to,$subject,$message,$headers);
                  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                  echo "<p class='feedback' style='position:relative;background:#00A578;text-align:center; color:white; font-size:14px;'>Your Demo request has been sent, see you soon!</p>";
                  ?>
                  <style type="text/css">

                    div.tnz-header-row{
                      display:none !important;
                    }</style>
                  <?php
                  // You can also use header('Location: thank_you.php'); to redirect to another page.
                  header( "Refresh:4; url=http://www.coachseek.com/sports-coaching-survival-guide/", true, 303);
                  }
              ?>
             <div id="mailchimp-popup" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close"><i class="fa fa-times"></i></a>
                      <form method="post" name="form1" action="">     
                        <div class="row--full">
                          <div class="col-7-12">
                            <h1>AWESOME YOUR FREE EBOOK IS ON ITS WAY!</h1>

                            <h3>Want to know how to stay ahead in the game?</h3>

                            <h3>Get a Free 15 Minute Coaching Business Health Check</h3>
                            <p>
                              At Coachseek, we're helping coaching businesses grow and be more profitable than ever.
                               We know that coaching is a tough challenge, but it can still be incredibly rewarding. 
                               With a few tweaks, your business can be running smoother than you ever imagined. 
                              Book a coaching business healthcheck with one of our specialists who will show you;
                            </p>
                         
                            <ul>
                              <li>- The 5 tools you can use to free up more time in your busy schedule</li>
                              <li>- Easy tweaks to your website to increase sign ups by 50% per term</li>
                              <li>- How you can consolidate your entire business admin in to one cloud based tool </li>
                              <li>- How to use social property to connect with new customers in your area </li>
                            </ul>
                          </div>
                          <div class="col-5-12">
                            <div class="row--full">
                        
                            <div class="row--full left ">
                              <label for="">Business name</label>
                              <input type="text" name="business" placeholder="Business name" required>
                            </div>
                            <div class="row--full name left">
                            <div class="col-6-12">
                              <label for="">First name</label>
                              <input type="text" name="firstname" placeholder="First name" required>
                            </div>
                            <div class="col-6-12">
                              <label for="">Last name</label>
                               <input type="text" name="lastname" placeholder="Last name" required></div>
                            </div>
                            </div>
                            <div class="row--full">
                              <div class="row--full right ">
                                <label for="">Email address</label>
                                <input type="email" name="email" placeholder="Email address" required>
                                </div>
                              <div class="row--full right ">
                              <label for="">Phone number</label>
                                <input type="tel" name="phone" placeholder="Phone number" required>
                                </div>
                                 <div class="row--full" style="text-align:center;">
                                  <button id="submit" type="submit" name="submit" style="background:white;color:#00A478;">Let's Talk!</button>
                                </div>
                            </div>
                            
                          </div>
                   
                        </div>
                     
                    </form>
   

                  </div>
                </div>
       <div class="landing--home-bg ebook" style="">
          <div class="landing--home-bg-overlap"></div>
           <div class="row--full">
              <div class="col-6-12">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/ebook-title-devices.png" alt="">
              </div>
              <div class="col-6-12">
                <h1><?php the_field('ebook-home-title'); ?></h1>
                <p style="font-size: 22px;max-width: 500px;width:100%;"><?php the_field('ebook-home-description'); ?></p>  
                <?php echo do_shortcode('[mc4wp_form id="2556"]'); ?>
               
                <p><?php the_field('ebook-home-copy'); ?></p>
              </div>
           </div>
       </div>

         <div class="landing--home-desc ebook">
             <h3><?php the_field('ebook-feature-title'); ?> </h3>
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
                 <div class="col-3-12">
                  <p><?php the_sub_field('description');?></p>
                  <div class="landing--home-circle">
                    <img src="<?php the_sub_field('image');?>" alt="">
                  </div>                   
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
  
      
       <div class="landing--home-quote ebook">
        <?php

          // check if the flexible content field has rows of data
          if( have_rows('ebook-quote') ):

               // loop through the rows of data
              while ( have_rows('ebook-quote') ) : the_row();

                  if( get_row_layout() == 'ebook-quote' ):

                    ?>
                    <div class="row--full">
                    <?php

                      // check if the repeater field has rows of data
                      if( have_rows('ebook-quote-repeater') ):

                        // loop through the rows of data
                          while ( have_rows('ebook-quote-repeater') ) : the_row();

                              // display a sub field value
                             ?>
                                <div class="col-6-12">

                                <div class="col-3-12">
                                  <img src="<?php the_sub_field('ebook-quote-img'); ?>" alt="">
                                </div>
                                <div class="col-9-12">
                                  <h3><?php the_sub_field('ebook-quote-desc'); ?></h3>
                                  <p><?php the_sub_field('ebook-quote-name'); ?></p>
                               

                                </div>
                              </div>
                             <?php

                          endwhile;

                      else :

                          // no rows found

                      endif;

                    ?></div><?php                

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

    <script type="text/javascript">
    $('input#mailchimp').click(function() {
      /* Act on the event */
      $('#mailchimp-popup').css('opacity', '1');
      $('#mailchimp-popup').css('pointer-events', 'auto');
    });
    $('a.close').click(function(){
        $('#mailchimp-popup').css('opacity', '0');
        $('#mailchimp-popup').css('pointer-events', 'none');
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

    <script type="text/javascript">
    mc4wp.forms.on('subscribed', function(form) {
      // analytics.js
      ga && ga('send', 'event', { eventCategory: 'Ebook&subcribeebook', eventAction: 'click', eventLabel: 'subcribeebook'});
    </script>


    <?php wp_footer(); ?>
    </body>
</html>