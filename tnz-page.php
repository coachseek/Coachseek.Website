<?php
/*
Template Name: Tnz Page Template
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
        <header class="tnz-header">
              <?php 
              if(isset($_POST['submit'])){
                   $to = "coachseeknz@gmail.com,samyin1990@gmail.com"; // this is your Email address
                  $from = $_POST['email']; // this is the sender's Email address
                  $firstname = $_POST['firstname'];
                  $lastname = $_POST['lastname'];
                  $phone = $_POST['phone'];
                  $subject = "Demo Request from TNZ page";
                  $subject2 = "Copy of your Demo request submission";
                  $message = $firstname . " ".$lastname . " Request a demo," . "\n\n" . "Business name is: ". $_POST['business']."\n\n". "phone number is : ".$phone ."\n\n". " email address is : ". $from;
                  $message2 = "Here is a copy of your request " . $firstname . "\n\n" . $message;
                  $headers = "From:" . $from;
                  $headers2 = "From:" . $to;
                  mail($to,$subject,$message,$headers);
                  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                  echo "<p class='feedback' style='text-align:center; color:black; font-size:14px;'>Your Demo request has been sent, see you soon!</p>";
                  ?>
                  <style type="text/css">

                    div.tnz-header-row{
                      display:none !important;
                    }</style>
                  <?php
                  // You can also use header('Location: thank_you.php'); to redirect to another page.
                  header( "Refresh:4; url=http://www.coachseek.com/tnz", true, 303);
                  }
              ?>
            <div class="row--full tnz-header-row">
                  <p style="font-size:13px;text-align:center; font-family:lato-regular;">Exclusive offer for TNZ Registered Coaches - get 25% discount on Coachseek!  <a href="#" class="matt-loves-coachseek-top" style="text-decoration:underline;">See why Mat loves Coachseek ></a></p>     
            </div>
      </header>
      <?php if( get_field('header-image') ): ?>
       <div class="landing--home-bg tnz" style="">
          <?php endif; ?>
          <div class="landing--home-bg-overlap"></div>
           <div class="row--full">
               <h1><?php the_field('tnz-title'); ?> </h1>
                <ul class="tnz-list">
                  <?php

                  // check if the repeater field has rows of data
                  if( have_rows('tnz-list') ):

                    // loop through the rows of data
                      while ( have_rows('tnz-list') ) : the_row();

                          // display a sub field value
                         ?>
                           <li><p> <?php the_sub_field('tnz-list-description');?></p></li>


                        <?php

                      endwhile;

                  else :

                      // no rows found

                  endif;

                  ?>

                </ul>
               
           </div>
       </div>


      
      <div class="tnz--home">
        <div class="row--full">
          <h5><?php the_field('tnz-demo-title'); ?></h5>
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


       <div class="landing--home-desc tnz-desc">
             <h3><?php the_field('tnz-getstarted-title'); ?></h3>
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

       </div>

      <?php if( get_field('quote-image') ): ?>
       <div class="landing--home-quote tnz-quote" style="background: url('<?php the_field('quote-image'); ?>') center center no-repeat; background-size: cover;">
       <?php endif; ?>
           <div class="landing--home-overlap"></div>
           <div class="row--full">
               <p><?php the_field('quote-title'); ?></p>
               <p><?php the_field('quote-name'); ?></p>
  
           </div>
       </div>


        <div class="testimonial--home tnz-testimonial">
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
     
       </div>
    

       <div class="pricing--home-list tnz-pricing">
        <div class="row">
          <h3><?php the_field('tnz-pricing-title'); ?></h3>
        </div>
         <div class="row">

          <?php
            // check if the flexible content field has rows of data
            if( have_rows('price-page-plan') ):
             // loop through the rows of data
            while ( have_rows('price-page-plan') ) : the_row(); 
            if( get_row_layout() == 'popular' ):

            ?>
            <div class="col-4-12">
             <div class="pricing--home-list-popular">Popular</div>  
              <div class="pricing--home-list-price">
                <h5><?php the_sub_field('plan-name');?></h5>
                <h2>$<?php the_sub_field('price-number');?> <span>/mo</span></h2>
                <h5><span>for TNZ registered</span></h5>
                <p>Usually $<?php the_sub_field('old-price-number');?>/mo</p>
              </div>
              <div class="pricing--home-list-coach">
                <p><?php the_sub_field('coach-number');?></p>
                <a class="request-demo" href="#" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Let's Talk</a>
              </div>
            </div>
 
           <?php elseif( get_row_layout() == 'normal' ): ?>       
              <div class="col-4-12">  
               
                  <div class="pricing--home-list-price">
                    <h5><?php the_sub_field('plan-name');?></h5>
                    <h2>$<?php the_sub_field('price-number');?> <span>/mo</span></h2>
                    <h5><span>for TNZ registered</span></h5>
                    <p>Usually $<?php the_sub_field('old-price-number');?>/mo</p>
                  </div>
                  <div class="pricing--home-list-coach">
                    <p><?php the_sub_field('coach-number');?></p>
                    <a class="request-demo" href="#" onClick="ga('send', 'event', { eventCategory: 'FreeTrial', eventAction: 'click', eventLabel: 'Pricing'});">Let's Talk</a>
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

  


      <div class="landing--home-tryfree tnz-tryfree">
         <div class="row--full">
            <h3><?php the_field('tnz-tryfree-title'); ?></h3>
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

       <div class="tnz-partner">
         <div class="row--full">
           <p>A Coachseek and Tennis New Zealand partner program</p>
         </div>
         <div class="row--full">
           <img src="<?php echo get_stylesheet_directory_uri();?>/images/tnz-coachseek.png" alt="">
           <img src="<?php echo get_stylesheet_directory_uri();?>/images/tnz-partner.png" alt="">
           
         </div>
       </div>
    
    </div>
    <script src="<?php echo get_stylesheet_directory_uri();?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/script.js"></script>
    <script type="text/javascript">
      $(".request-demo").click(function() {
          $('html,body').animate({
              scrollTop: $(".tnz-list").offset().top},
              1500);
      });
      $("a.matt-loves-coachseek-top").click(function() {
         $('html,body').animate({
              scrollTop: $(".testimonial--home").offset().top},
              1500);
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

    </body>
</html>