		</div><!-- main -->

	</main><!-- site-main -->	

	<?php
	global $mokaine;

	$footer = $mokaine['enable-footer'];
	$footer_layout = $mokaine['footer-layout'];
	$footer_b_l = isset( $mokaine['footer-bottom-left'] ) ? $mokaine['footer-bottom-left'] : null;
	$footer_b_r = isset( $mokaine['footer-bottom-right'] ) ? $mokaine['footer-bottom-right'] : null;
	$analytics = isset( $mokaine['google-analytics'] ) ? $mokaine['google-analytics'] : null;
	$customjs = isset( $mokaine['custom-js'] ) ? $mokaine['custom-js'] : null;
	?>

	<?php if ( $footer ) : ?>

	
           <footer>
           <div class="row">
               <div class="col-3-12">
                   <ul>
                       <li><h4>company</h4></li>
                       <li><a href="/team">Team</a></li>
                       <li><a href="/blog">Blog</a></li>
                       <li><a href="/careers">Careers</a></li>
                       <li><a href="/website-terms">Terms &</a> <a href="/privacy-policy"> Privacy</a></li>
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

	<?php endif; ?>

<?php
if ( $analytics ) {
	echo $analytics;
}

if ( $customjs ) {
	echo '<script>jQuery(document).ready(function($) {' . $customjs . ' });</script>';
}
?>

<?php wp_footer(); ?>
    
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

</body>

</html>