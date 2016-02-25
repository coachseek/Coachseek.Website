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
      <div id="landing--home-video" class="modalDialog landing--home-video-modal">
        <div>
          <a href="#close-video" title="Close" class="close-video" id="close-video" >Close <i class="fa fa-times fa-lg"></i></a>
        <iframe src="https://player.vimeo.com/video/138563137?enablejsapi=1" id="landing--home-iframe" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>
       <div class="container bluehost">
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
     <div id="demo" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close"><i class="fa fa-times"></i></a>
                      <form id="footer-demo-request-form" method="post" name="footer-demo-request-form" action="">     
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
                             <input type="text" name="lastname" placeholder="Last name" required></div>
                          </div>

                         
                        </div>
                        <div class="row--full">
                          <div class="row--full right "><input type="email" name="email" placeholder="Email address" required></div>
                          <div class="row--full right "><input type="tel" name="phone" placeholder="Phone number" required></div>
                        </div>
                      </div>
                      <div class="row--full" style="text-align:center;">
                        <button id="landing-demo-request-submit" type="submit" name="submit">Let's Talk &nbsp;<span class="loading-submit"><i class="fa fa-spinner fa-pulse"></i></button>
                      </div>
                      <p class="landing-demo-post-error" style="color:red;text-align:center;">
                        Your submission could not be processed, Please try later again!
                      </p>
                      <p class="landing-demo-post-success" style="color:green;text-align:center;">
                        Your submission has been received, We will touch you soon!
                      </p>
                    </form>
   

                  </div>
                </div>

    <?php if( get_field('header-image') ): ?>
       <div class="landing--home-bg">
        <?php endif; ?>
          <div class="landing--home-bg-overlap"></div>
           <div class="row--full">
               <h1><?php the_field('title'); ?></h1>
               <h3><?php the_field('sub-title')?></h3>
               <p class="subtitle" style="padding-bottom:40px;"><?php the_field('description'); ?></p>
             <!--   <a class="landing--home-video" href="#landing--home-video" id="landing--home-play" onClick="ga('send', 'event', { eventCategory: 'DemoVideo', eventAction: 'click', eventLabel: 'main-top'});"><i class="fa fa-play-circle fa-lg"></i> Watch Demo Video</a> -->
                
               <a class="landing--home-tryfree-btn" href="https://app.coachseek.com/#/new-user-setup" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'main-top'});" >Try for free</a>
               <a href="#demo" class="landing--home-tryfree-btn white">Request a Demo</a>
               <p class="landing--home-tryfree-desc"><?php the_field('trial-description'); ?></p>
               <a href="/matgarnham" class="matt-loves-coachseek"><?php the_field('ps'); ?></a>
           </div>
       </div>
       

        <?php

        // check if the flexible content field has rows of data
        if( have_rows('features') ):

             // loop through the rows of data
            while ( have_rows('features') ) : the_row();

              if( get_row_layout() == 'features' ):

              ?>
              <div class="section fullpage--features">
      
                  <div class="fullpage--features-bg laptop">
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
                                <div class="fullpage--feature-slides-bg laptop" style="background: url('<?php the_sub_field('features-slides-image');?>') no-repeat right center;
                                background-size: 766px;"></div>
                                <img src="<?php the_sub_field('features-slides-image');?>" alt="">

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

       <div class="landing--home-tryfree">
         <div class="row--full">
            <h3>Try Coachseek free for 14 days</h3>
            <p>No Credit Card required</p>
            <a href="https://app.coachseek.com/#/new-user-setup"  onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'main-bottom'});">Try for free</a>
         </div>
         <div class="row--full">
            <div class="landing--home-tryfree-itworks-wrapper"><p class="landing--home-tryfree-itworks">It works across PC, tablets and mobile</p></div>
         
         </div>
         <div class="row--full">
            <div class="landing--home-supports">
              <img src="<?php echo get_stylesheet_directory_uri();?>/images/supports.png" alt="">
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
    <script src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>
    <script>
      // var iframe = document.getElementById('landing--home-iframe');

      // // $f == Froogaloop
      // var player = $f(iframe);

      // // bind events
      // var playButton = document.getElementById("landing--home-play");
      // playButton.addEventListener("click", function() {
      //   player.api("play");
      // });

      // var pauseButton = document.getElementById("close-video");
      // pauseButton.addEventListener("click", function() {
      //   player.api("pause");
      // });

      $('.loading-submit').hide();
      $('.landing-demo-post-success').hide();
      $('.landing-demo-post-error').hide();

      $('#landing-demo-request-submit').click(function(e) {
        e.preventDefault();
        $('.loading-submit').show();
        /* Act on the event */
         var data = {
          firstname: $("input[name='firstname']").val(),
          email: $("input[name='email']").val(),
          lastname: $("input[name='lastname']").val(),
          phone: $("input[name='phone']").val(),
          business: $("input[name='business']").val()
        };
        if($("#footer-demo-request-form").valid()){
          $.ajax({
              type: "POST",
              url: "<?php echo get_stylesheet_directory_uri();?>/landing-email.php",
              data: data,
              success: function(){
                  $('.loading-submit').hide();
                  $('.landing-demo-post-success').show();
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                  // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                  $('.landing-demo-post-error').show();
              }  
          });
        }else{
          $('.loading-submit').hide();
        }
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