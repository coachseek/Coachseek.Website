<?php
/*
Template Name: Website Pimp Page Template
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
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
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
      <div id="fullpage">
      <?php
        // check if the flexible content field has rows of data
        if( have_rows('website-pimp-home') ):
             // loop through the rows of data
            while ( have_rows('website-pimp-home') ) : the_row();
                if( get_row_layout() == 'website-pimp-home' ):
                ?>
                <div class="section fullpage--home website-pimp--home" style="background: url('<?php echo get_stylesheet_directory_uri();?>/images/playing-tennis-1.jpeg') no-repeat center top; background-size:cover;">
                  <div class="fullpage--section-overlay"></div>
                  <div class="container">
          
                    <div class="row">
                      <h2><?php echo the_sub_field('home-title');?></h2>
                       <img src="<?php echo get_stylesheet_directory_uri();?>/images/computers.png" alt="">
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
        if( have_rows('website-pimp-optional-banner') ):

             // loop through the rows of data
            while ( have_rows('website-pimp-optional-banner') ) : the_row();

                if( get_row_layout() == 'website-pimp-optional-banner' ):
                  ?>

                <div class="section fullpage-optional-banner">
                  <div class="row">  
                    <h3><?php echo the_sub_field('website-pimp-banner-title'); ?></h3>
                    <div class="fullpage-optional-description"> 
                      <p><?php echo the_sub_field('website-pimp-banner-description'); ?></p>
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
        if( have_rows('website-pimp-pricing') ):

             // loop through the rows of data
            while ( have_rows('website-pimp-pricing') ) : the_row();

                if( get_row_layout() == 'usd' ):
        ?>
        <div class="section fullpage--testimonial-pricing website-pimp-pricing">
          <div class="pricing--home-list">
          <h2>Pricing plan to suit any coaching business, club or school</h2>
          <h4>Send us a message below or on <a href="mailto:hello@coachseek.com">hello@coachseek.com</a></h4>
           <div class="row">
              <div class="col-4-12">  
                <div class="pricing--home-list-price">
                  <h5>Bronze</h5>
                  <h2>$1495&nbsp;<span>&nbsp;USD</span></h2>
                  <h3>*&nbsp;$45&nbsp;usd<span>/month</span><br>Hosting/Support</h3>
                </div>
                <div class="pricing--home-list-coach">
                  <ul>
                  <?php

                  // check if the repeater field has rows of data
                  if( have_rows('pricing-bronze') ):

                    // loop through the rows of data
                      while ( have_rows('pricing-bronze') ) : the_row();

                          // display a sub field value
                    ?>
                     <li><?php echo  the_sub_field('pricing-bronze-list'); ?></li>
                    <?php
                         
                      endwhile;

                  else :

                      // no rows found

                  endif;

                  ?>
                   
                  </ul>
                   <a id="website-pimp-bronze-btn" style="border-radius:8px;"  href="#" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">I want this one!</a>
                </div>
              </div> 
              <div class="col-4-12">
                <div class="pricing--home-list-price">
                  <h5>Silver&nbsp; <span>Popular!</span></h5>
                  <h2>$1995&nbsp;<span>&nbsp;USD</span></h2>
                  <h3>*&nbsp;$45&nbsp;usd<span>/month</span><br>Hosting/Support</h3>
                </div>
                <div class="pricing--home-list-coach">
                  <ul>
                   <?php

                  // check if the repeater field has rows of data
                  if( have_rows('pricing-silver') ):

                    // loop through the rows of data
                      while ( have_rows('pricing-silver') ) : the_row();

                          // display a sub field value
                    ?>
                     <li><?php echo  the_sub_field('pricing-silver-list'); ?></li>
                    <?php
                         
                      endwhile;

                  else :

                      // no rows found

                  endif;

                  ?>
                  </ul>
                  <a id="website-pimp-silver-btn" style="border-radius:8px;"  href="#" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">I want this one!</a>
                </div>
              </div>
               <div class="col-4-12">
                <div class="pricing--home-list-price">
                  <h5>Gold</h5>
                  <h2>POA</h2>
                  <h3>*&nbsp;$45&nbsp;usd<span>/month</span><br>Hosting/Support</h3>
                </div>
                <div class="pricing--home-list-coach">
                  <ul>
                  <?php

                  // check if the repeater field has rows of data
                  if( have_rows('pricing-gold') ):

                    // loop through the rows of data
                      while ( have_rows('pricing-gold') ) : the_row();

                          // display a sub field value
                    ?>
                     <li><?php echo  the_sub_field('pricing-gold-list'); ?></li>
                    <?php
                         
                      endwhile;

                  else :

                      // no rows found

                  endif;

                  ?>
                  </ul>
                  <a style="border-radius:8px;" id="website-pimp-gold-btn" href="#" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">I want this one!</a>
                </div>
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
               
        <div class="section fullpage--footer">
          <div class="row">
            <h3><?php echo the_field('footer-title'); ?></h3>
          </div>
            <form method="post" name="website-pimp-demo-request" id="website-pimp-demo-request-form" action="">     
              <div class="row">
                <div class="row--full">
                  <div class="row--full name left">
                    <div class="col-6-12">
                    <input type="text" name="name" placeholder="Name" required>
                    </div>
                    <div class="col-6-12">
                      <input type="tel" name="phone" placeholder="Phone" required>
                    </div>
                  </div>
                  <div class="row--full">
                    <div class="row--full right "><input type="email" name="email" placeholder="Email address" required></div>
                    </div>
                    <div class="row--full">
                    <div class="row--full right ">
                      <select style="width: 100%;" name="websitepackage" id="websitepackage">
                        <option value="bronze">Bronze Package</option>
                        <option value="silver">Silver Package</option>
                        <option value="gold">Gold Package</option>
                      </select>
                    </div>
                    </div>
                    <div class="row--full">
                      <div class="row--full right " >
                      <textarea name="message" id="" cols="30" rows="10" style="width:100%;">What do you need?
                      </textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row--full" style="text-align:center;">
                    <button id="website-pimp-demo-request-submit" type="submit" name="submit">Let's Talk &nbsp;<span class="loading-submit"><i class="fa fa-spinner fa-pulse"></i></button>
                  </div>
                  <p class="website-pimp-demo-post-error" style="color:red;text-align:center;">
                    Your submission could not be processed, Please try later again!
                  </p>
                  <p class="website-pimp-demo-post-success" style="color:green;text-align:center;">
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/script.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/adwords_script.js"></script>
    <script>
      $('select').select2({ minimumResultsForSearch: Infinity});
      $('.loading-submit').hide();
      $('.website-pimp-demo-post-success').hide();
      $('.website-pimp-demo-post-error').hide();
      $('#website-pimp-demo-request-submit').click(function(e) {
        e.preventDefault();
        $('.loading-submit').show();
        /* Act on the event */
         var data = {
          websitepackage: $("select#websitepackage option:selected").val(),
          email: $("input[name='email']").val(),
          name: $("input[name='name']").val(),
          phone: $("input[name='phone']").val(),
          leavemessage: $("textarea[name='message']").val()
        };
        if($("#website-pimp-demo-request-form").valid()){
          $.ajax({
              type: "POST",
              url: "<?php echo get_stylesheet_directory_uri();?>/website-pimp-email.php",
              data: data,
              success: function(){
                  $('.loading-submit').hide();
                  $('.website-pimp-demo-post-success').show();
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                  alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                  $('.website-pimp-demo-post-error').show();
              }  
          });
        }else{
          $('.loading-submit').hide();
        }
      });
      $("#website-pimp-home-btn").click(function(e) {
        e.preventDefault();
          $('html, body').animate({
              scrollTop: $("#website-pimp-demo-request-form").offset().top
          }, 2000);
      });
      $("#website-pimp-bronze-btn").click(function(e) {
        e.preventDefault();
          $('html, body').animate({
              scrollTop: $("#website-pimp-demo-request-form").offset().top
          }, 2000);
      });
      $("#website-pimp-silver-btn").click(function(e) {
        e.preventDefault();
          $('html, body').animate({
              scrollTop: $("#website-pimp-demo-request-form").offset().top
          }, 2000);
      });
      $("#website-pimp-gold-btn").click(function(e) {
        e.preventDefault();
          $('html, body').animate({
              scrollTop: $("#website-pimp-demo-request-form").offset().top
          }, 2000);
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