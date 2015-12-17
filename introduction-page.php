<?php
/*
Template Name: Introduction Page Template
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
          <?php 
              if(isset($_POST['submit'])){
                  $to = "ian@coachseek.com,ianpbishop@gmail.com,denym8@gmail.com,samyin1990@gmail.com,Apwong8@gmail.com"; // this is your Email address
                  $from = $_POST['email']; // this is the sender's Email address
                  $firstname = $_POST['firstname'];
                  $lastname = $_POST['lastname'];
                  $phone = $_POST['phone'];
                  $subject = "Demo Request from introduction page";
                  $subject2 = "Copy of your Demo request submission";
                  $message = $firstname . " ".$lastname . " Request a demo," . "\n\n" . "Business name is: ". $_POST['business']."\n\n". "phone number is : ".$phone ."\n\n". " email address is : ". $from;
                  $message2 = "Here is a copy of your request " . $firstname . "\n\n" . $message;
                  $headers = "From:" . $from;
                  $headers2 = "From:" . $to;
                  mail($to,$subject,$message,$headers);
                  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                  echo "<p class='feedback' style='background:#00A578;text-align:center; color:white; font-size:14px;'>Your Demo request has been sent, see you soon!</p>";
                  ?>
                  <style type="text/css">

                    div.tnz-header-row{
                      display:none !important;
                    }</style>
                  <?php
                  // You can also use header('Location: thank_you.php'); to redirect to another page.
                  header( "Refresh:4; url=http://www.coachseek.com", true, 303);
                  }
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
      <div id="video" class="modalDialog introduction--video-modal">
        <div>
          <a href="#close" title="Close" class="close" id="close" onclick="
          stopVideo()">Close <i class="fa fa-times fa-lg"></i></a>
         <div id="player"></div>
        </div>
      </div>
      <?php if( get_field('header-image') ): ?>
       <div class="landing--home-bg testimonial introduction--home" style="">
          <?php endif; ?>
          <div class="landing--home-bg-overlap"></div>
           <div class="row--full">
               <h1><?php the_field('title'); ?></h1>
           </div>
           <div class="introduction--video row--full">
             
              <div class="introduction--video-background">
                <div class="introduction--video-overlap">                
                </div>
                <a id="play-button" href="#video" onclick="playVideo()"><i class="fa fa-play-circle-o"></i></a>
              </div>
           </div>
       </div>

       
      <div class="tnz--home">
        <div class="row--full">
          <h5 style="font-size:30px;">Book a live demo</h5>
        </div>
          <form method="post" name="form1" action="">     
              <div class="row">
              <div class="col-6-12">
            
                <div class="row--full left ">
                  <input type="text" name="business" placeholder="Business name" required>
                </div>
                <div class="row--full name left">
                <div class="col-6-12">
                  <input type="text" name="firstname" placeholder="First name" required>
                </div>
                <div class="col-6-12">
                   <input type="text" name="lastname" placeholder="Last name" required></div>
                </div>

               
              </div>
              <div class="col-6-12">
                <div class="row--full right "><input type="email" name="email" placeholder="Email address" required></div>
                <div class="row--full right "><input type="tel" name="phone" placeholder="Phone number" required></div>
              </div>
            </div>
            <div class="row--full">
              <button id="submit" type="submit" name="submit">Let's Talk</button>
            </div>
          </form>
   

      </div>

        <div class="landing--home-desc">
             <h3><?php the_field('landing-home-desc'); ?></h3>
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
                    <div class="landing--home-circle">
                        <img src="<?php the_sub_field('image');?>" alt="">
                     </div>
                     <h5><?php the_sub_field('title');?></h5>
                     <p><?php the_sub_field('description');?></p>
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

        
           <div class="row--full">
               <a href="/features">See more</a>
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
    <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>

    <script> 

  // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '100%',
          width: '100%',
          videoId: 'fyhOgOPI9wk',
          
        });
      }

      // 4. The API will call this function when the video player is ready.
      function playVideo() {
        player.playVideo();
      }

 
      function stopVideo() {
        player.stopVideo();
      }
          

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