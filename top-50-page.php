<?php
/*
Template Name: Top 50 Page Template
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
       
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/styles.css?ver=<?php $theme_version = wp_get_theme(); echo $theme_version->Version; ?>" type="text/css" media="screen" />

         
    </head>

    <body>
      <div id="landing--home-video" class="modalDialog landing--home-video-modal">
        <div>
          <a href="#close-video" title="Close" class="close-video" id="close-video" >Close <i class="fa fa-times fa-lg"></i></a>
        <iframe src="https://player.vimeo.com/video/138563137?enablejsapi=1" id="landing--home-iframe" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>
       <div class="container">
            <?php 
              if(isset($_POST['submit'])){
                  $to = "ian@coachseek.com,ianpbishop@gmail.com,denym8@gmail.com,samyin1990@gmail.com,Apwong8@gmail.com"; // this is your Email address
                  $from = $_POST['email']; // this is the sender's Email address
                  $firstname = $_POST['firstname'];
                  $lastname = $_POST['lastname'];
                  $phone = $_POST['phone'];
                  $subject = "Demo Request from landing page";
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
      <?php if( get_field('header-image') ): ?>
       <div class="mainfea--home-bg" style="height:initial;background: url('<?php the_field('header-image'); ?>') center center no-repeat; background-size: cover;">
          <?php endif; ?>
          <!-- <div class="landing-home-bg-overlap"></div> -->
           <div class="row--full">
               <h1 style="padding-top:50px;color:white;"><?php the_field('title'); ?></h1>
               <p style="font-size:18px;"><?php the_field('description'); ?></p>
             
           </div>
       </div>

       <div class="top50--home-lg">
        <?php if( have_rows('back') ): 
          while ( have_rows('back') ) : the_row();
                if( get_row_layout() == 'back' ):
        ?>

          <div class="row">
          <a href="/top-50-influential-sports-coaches-for-2015" style="
              color: #00A478;
              float: left;
              padding: 50px;
          "><?php echo the_sub_field('button-name');?></a>
           </div>

           <?php endif;

            endwhile;

          else :

              // no layouts found

          endif;

          ?>
          <div class="row"style="padding: 100px 10px 100px 10px;">
              <h3 style="text-align:center;"><?php the_field('sub-title'); ?></h3>
              <p style="font-size:16px; text-align:center;"><?php the_field('sub-description'); ?></p>
          </div>

        <?php
         // check if the flexible content field has rows of data
          if( have_rows('top-50-lg') ):
              ?>
              <div class="row">
              <?php
            // loop through the rows of data
              while ( have_rows('top-50-lg') ) : the_row();

              // check current row layout
                  if( get_row_layout() == 'column' ):
                     
                    // check if the nested repeater field has rows of data
                    if( have_rows('column') ):             

                    // loop through the rows of data
                    while ( have_rows('column') ) : the_row();
                      $image = get_sub_field('column-img');
                      $title = get_sub_field('column-title');
                      $sport = get_sub_field('column-sport');
                      $description = get_sub_field('column-description');
                      ?>

                      <div class="col-6-12">
                      
                        <div class="top50--home-img-lg" style="background:url('<?php echo $image['url']; ?>') no-repeat center center; 
                background-size: cover;">
                        </div>                      
                        <h2><?php echo $title; ?></h2>
                        <p class="top--home-lg-sport"><?php echo $sport; ?></p>
                        <p><?php echo $description; ?></p>
                      <?php
                      // check if the repeater field has rows of data
                      if( have_rows('icon') ):

                        // loop through the rows of data
                          while ( have_rows('icon') ) : the_row();

                              // display a sub field value

                                if( get_row_layout() == 'facebook' ):
                                 ?>
                                      <a href="<?php echo the_sub_field('icon-link'); ?>" target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a>
                                  <?php         

                                elseif( get_row_layout() == 'linkedin' ):
                                  ?>
                                      <a href="<?php echo the_sub_field('icon-link'); ?>" target="_blank"><i class="fa fa-linkedin-square fa-lg"></i></a>
                                  <?php

                                elseif( get_row_layout() == 'twitter' ):

                                  ?>
                                       <a href="<?php echo the_sub_field('icon-link'); ?>" target="_blank"><i class="fa fa-twitter-square fa-lg"></i></a>
                                  <?php
                                elseif( get_row_layout() == 'website' ):

                                  ?>
                                       <a href="<?php echo the_sub_field('icon-website'); ?>" target="_blank"><i class="fa fa-globe fa-lg"></i></a>
                                  <?php

                                elseif( get_row_layout() == 'mail' ):

                                  ?>
                                       <a href="mailto:<?php echo the_sub_field('icon-mail'); ?>" target="_blank"><i class="fa fa-envelope-square fa-lg"></i></a>
                                  <?php


                                endif;

                          endwhile;


                      else :

                          // no rows found

                      endif;
                    ?>
                    </div>
                    <?php

                    endwhile;

                    endif;
             
                  endif;

              endwhile;
              ?>
              </div>
              <?php

          else :

              // no layouts found

          endif;

          ?>
       </div>
       <div class="top50--home-sm">


       <?php
        // check if the repeater field has rows of data
        if( have_rows('top-50-sm') ):

          // loop through the rows of data
            while ( have_rows('top-50-sm') ) : the_row();
            $image = get_sub_field('row-left-img');
            $title = get_sub_field('row-right-title');
            $sport = get_sub_field('row-right-sport');
            $description = get_sub_field('row-right-description');
          ?>

         <div class="row">
           <div class="col-3-12">
             <div class="top50--home-sm-img" style="background:url('<?php echo $image['url']; ?>') no-repeat center center; 
                background-size: cover;"></div>
           </div>
           <div class="col-9-12">
             <h2><?php echo $title; ?></h2>
             <p class="top50--home-sm-sport"><?php echo $sport; ?></p>
             <p><?php echo $description; ?></p>
                    <?php
                      // check if the repeater field has rows of data
                      if( have_rows('row-right-icon') ):

                        // loop through the rows of data
                          while ( have_rows('row-right-icon') ) : the_row();

                              // display a sub field value

                                if( get_row_layout() == 'facebook' ):
                                 ?>
                                      <a href="<?php echo the_sub_field('icon-link'); ?>" target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a>
                                  <?php         

                                elseif( get_row_layout() == 'linkedin' ):
                                  ?>
                                      <a href="<?php echo the_sub_field('icon-link'); ?>" target="_blank"><i class="fa fa-linkedin-square fa-lg"></i></a>
                                  <?php

                                elseif( get_row_layout() == 'twitter' ):

                                  ?>
                                       <a href="<?php echo the_sub_field('icon-link'); ?>" target="_blank"><i class="fa fa-twitter-square fa-lg"></i></a>
                                  <?php
                                elseif( get_row_layout() == 'website' ):

                                  ?>
                                       <a href="<?php echo the_sub_field('icon-website'); ?>" target="_blank"><i class="fa fa-globe fa-lg"></i></a>
                                  <?php


                                elseif( get_row_layout() == 'mail' ):

                                  ?>
                                       <a href="mailto:<?php echo the_sub_field('icon-mail'); ?>" target="_blank"><i class="fa fa-envelope-square fa-lg"></i></a>
                                  <?php


                                endif;

                          endwhile;


                      else :

                          // no rows found

                      endif;
                    ?>

           </div>
         </div>

        <?php
                    endwhile;

        else :

            // no rows found

        endif;

        ?>


       
      <?php if( have_rows('back') ): 
            while ( have_rows('back') ) : the_row();
                if( get_row_layout() == 'next' ):
        ?>

          <div class="row">
          <a href="/top-50-influential-sports-coaches-for-2015-part-2" style="
              color: #00A478;
              float: right;
          "><?php echo the_sub_field('button-name');?></a>
           </div>

           <?php endif;

            endwhile;

          else :

              // no layouts found

          endif;
        ?>
   

       </div>


      <?php if( get_field('quote-image') ): ?>
       <div class="landing--home-quote" style="height:initial;background: url('<?php the_field('quote-image'); ?>') center center no-repeat; background-size: cover;">
       <?php endif; ?>
           <div class="landing--home-overlap"></div>
           <div class="row--full" style="text-align:center;padding-right:15%;padding-left:15%;">
               <h3 style="font-weight:bold;width:100%;padding-top:20px;color:white;"><?php the_field('quote-description'); ?></h3>
               <p style="width:100%;padding-bottom:100px;line-height: 1.5;"><?php the_field('quote-name'); ?></p>
                <h3 style="font-weight:bold;width:100%;padding-top:20px;color:white;font-size:24px;"><?php the_field('quote-sub-title'); ?></h3>
               <p style="width:100%;padding-bottom:100px;line-height: 1.5;"><?php the_field('quote-sub-description'); ?></p>
           </div>
       </div>

       <div class="top50--newsletter">
       <h1><?php the_field('newsletter-title'); ?></h1>
       <p><?php the_field('newsletter-description'); ?></p>
         
       <?php echo do_shortcode('[mc4wp_form id="2313"]');?>
       </div>

       <div class="top50--sharing">
          <div class="row">
            <?php wp_reset_query(); ?>
            <?php if( function_exists('zilla_likes') ) zilla_likes(); ?>
            <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
            <?php

                  comments_template();

            ?>
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