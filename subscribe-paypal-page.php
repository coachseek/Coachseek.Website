<?php
/*
Template Name: Subscribe Paypal Page Template
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
       
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/newstyles3.css">
        
  
      <script type="text/javascript">
      window.heap=window.heap||[],heap.load=function(t,e){window.heap.appid=t,window.heap.config=e;var a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=("https:"===document.location.protocol?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+t+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(t){return function(){heap.push([t].concat(Array.prototype.slice.call(arguments,0)))}},p=["clearEventProperties","identify","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
      heap.load("2818681617");

       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

     ga('create', 'UA-50345817-1', 'auto');
     ga('send', 'pageview');

      </script>

         
    </head>

    <body>
       <div class="container"> 
        <header style="z-index:3;">
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
                       <li><a href="/blog">Blog</a></li>
                       <li><a href="http://app.coachseek.com">Sign in</a></li>
                       <li><a class="landing--header-signin" href="https://app.coachseek.com/#/new-user-setup">Sign up</a></li>
                   </ul>
              
               </div>               
            </div>
    </header>

   
       <div class="landing--home-bg" style="height:429px; background: url('<?php echo get_stylesheet_directory_uri();?>/images/overlap-black.png') center center; background-size: cover; z-index:0!important;">
   
         <?php if( get_field('header-image') ): ?>
          <div class="landing--home-bg-overlap" style="background: url('<?php the_field('header-image'); ?>') center center no-repeat;position: absolute;width: 100%;height: 100%; opacity:0.5!important;z-index:2!important;background-size: cover;"></div>
          <?php endif; ?>

           <div class="row--full">
               <h1 style="letter-spacing: 0px;"><?php the_field('title'); ?></h1>
               <p class="subtitle" style="padding-top:25px;"><?php the_field('description'); ?></p>
           
           </div>
       </div>
       
       <div class="landing--home-desc" style="height:380px;text-align:center;">


          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="FUM72FM8FG9NS">
          <table style="margin:0 auto;">
          <tr><td><input type="hidden" name="on0" value="Payment Options">Payment Options</td></tr><tr><td><select name="os0">
              <option value="Solo Coach Plan (1 coach)">Solo Coach Plan (1 coach) : $20.00 USD - monthly</option>
              <option value="Team Coach Plan (Upto 5 coaches)">Team Coach Plan (Upto 5 coaches) : $35.00 USD - monthly</option>
              <option value="Pro Coach Plan (Upto 10 coaches)">Pro Coach Plan (Upto 10 coaches) : $60.00 USD - monthly</option>
              <option value="Annual Solo Coach Plan">Annual Solo Coach Plan : $200.00 USD - yearly</option>
              <option value="Annual Team Coach Plan">Annual Team Coach Plan : $350.00 USD - yearly</option>
              <option value="Annual Pro Coach Plan">Annual Pro Coach Plan : $600.00 USD - yearly</option>
          </select> </td></tr>
          </table>
          <input style="margin-top:20px;" type="hidden" name="currency_code" value="USD">
          <input style="margin-top:20px;"  type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img style="margin-top:20px;"  alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form>



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
        adroll_adv_id = "HXFFG67C6NB25CAPFBAH7D";
        adroll_pix_id = "OG6XM5DRCNEWTHQWORDY5P";
        (function () {
        var oldonload = window.onload;
        window.onload = function(){
          __adroll_loaded=true;
          var scr = document.createElement("script");
          var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
          scr.setAttribute('async', 'true');
          scr.type = "text/javascript";
          scr.src = host + "/j/roundtrip.js";
          ((document.getElementsByTagName('head') || [null])[0] ||
           document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
          if(oldonload){oldonload()}};
        }());
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
          <!-- Google Code for Clicked &#39;Try for Free&#39; Conversion Page
      In your html page, add the snippet and call
      goog_report_conversion when someone clicks on the
      chosen link or button. -->
      <script type="text/javascript">
        /* <![CDATA[ */
        goog_snippet_vars = function() {
          var w = window;
          w.google_conversion_id = 963132874;
          w.google_conversion_label = "vCN2CPrf_F4QyvugywM";
          w.google_remarketing_only = false;
        }
        // DO NOT CHANGE THE CODE BELOW.
        goog_report_conversion = function(url) {
          goog_snippet_vars();
          window.google_conversion_format = "3";
          window.google_is_call = true;
          var opt = new Object();
          opt.onload_callback = function() {
          if (typeof(url) != 'undefined') {
            window.location = url;
          }
        }
        var conv_handler = window['google_trackConversion'];
        if (typeof(conv_handler) == 'function') {
          conv_handler(opt);
        }
      }
      /* ]]> */
      </script>
      <script type="text/javascript"
        src="//www.googleadservices.com/pagead/conversion_async.js">
      </script>
      <?php wp_footer(); ?>
    </body>
</html>