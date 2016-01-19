<?php
/*
Template Name: webinar Page Template
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
     <div id="webinar--home-video" class="modalDialog landing--home-video-modal">
        <div style="margin-top: 7%; width: 80%; height: 70%;">
          <a href="#close-video" title="Close" class="close-video" id="close-video" >Close <i class="fa fa-times fa-lg"></i></a>
        <iframe src="<?php the_field('webinar-home-video'); ?>" id="landing--home-iframe" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>
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

       <div class="landing--home-bg webinar" style="background: url('<?php the_field('webinar-home-background'); ?>') 0 0px no-repeat; background-size: cover;">
          <div class="landing--home-bg-overlap"></div>
           <div class="row--full">
              <div class="col-6-12">  
                <h1><?php the_field('webinar-home-title'); ?></h1>
                <p style="font-size: 22px;width:100%;"><?php the_field('webinar-home-description'); ?></p>  
              </div>
              <div class="col-6-12">
                <form method="post" name="webinar" id="webinar-form" action=""  >     
                  <div class="row--full">
                      <div class="row--full">
                        <input type="text" name="firstname" placeholder="First Name" required>
                      </div> 
                      <div class="row--full">
                        <input type="text" name="email" placeholder="Email Address" required>
                      </div>
                        <div class="row--full">
                        <input type="text" name="business" placeholder="Business Name" required>
                      </div>
                      <button id="webinar-submit" type="submit" name="submit">Watch Webinar</button><span class="loading-submit"><i class="fa fa-spinner fa-pulse"></i></span>
                      <p class="webinar-post-error"> Your submission could not be processed, Please try later again!</p>
                  </div>
              </form>
              </div>
           </div>
       </div>

      <div class="landing--home-desc webinar">
        <h3><?php the_field('webinar-feature-title'); ?> </h3>
        <p><?php the_field('webinar-feature-description'); ?> </p>
        <div class="row">
          <div class="col-6-12">
            <img src="<?php the_field('webinar-feature-image'); ?> " alt="">
          </div>
          <div class="col-6-12">
            <ul>
            <?php
                // check if the repeater field has rows of data
                if( have_rows('webinar-feature-list') ):

                  // loop through the rows of data
                    while ( have_rows('webinar-feature-list') ) : the_row();

                        // display a sub field value
                      ?>
                        <li><?php the_sub_field('webinar-feature-description'); ?> </li>
                      <?php

                    endwhile;

                else :

                    // no rows found

                endif;

              ?>
            </ul>
            <a href="" class="webinar-feature-register">Register now</a>
          </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>

    <script src="<?php echo get_stylesheet_directory_uri();?>/js/script.js"></script>
    <script src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.webinar-post-error').hide();
      $('.loading-submit').hide();
      var iframe = document.getElementById('landing--home-iframe');

      // $f == Froogaloop
      var player = $f(iframe);

      // bind events
      // var playButton = document.getElementById("webinar-submit");
      // playButton.addEventListener("click", function() {
      //   player.api("play");
      // });

      var pauseButton = document.getElementById("close-video");
      pauseButton.addEventListener("click", function() {
        player.api("pause");
      });
      $("a.webinar-feature-register").click(function(e) {
        e.preventDefault();
          $('html, body').animate({
              scrollTop: $("#webinar-form").offset().top
          }, 1000);
      });

      $('#webinar-submit').click(function(e) {
        e.preventDefault();
        $('.loading-submit').show();
        /* Act on the event */
         var data = {
          firstname: $("input[name='firstname']").val(),
          email: $("input[name='email']").val(),
          phone: $("input[name='phone']").val(),
          sport: $("input[name='sport']").val(),
          business: $("input[name='business']").val()
        };
        if($("#webinar-form").valid()){
          $.ajax({
              type: "POST",
              url: "<?php echo get_stylesheet_directory_uri();?>/email.php",
              data: data,
              success: function(){
                  $('#webinar--home-video').css('opacity', '1');
                  $('#webinar--home-video').css('pointer-events', 'auto');
                  player.api("play");
                  $('.loading-submit').hide();
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                  // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                  $('.webinar-post-error').show();
              }  
          });
        }else{
          $('.loading-submit').hide();
           player.api("pause");
        }
      });
      $('#close-video').click(function(){
          $('#webinar--home-video').css('opacity', '0');
          $('#webinar--home-video').css('pointer-events', 'none');
          player.api("pause");
      });
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