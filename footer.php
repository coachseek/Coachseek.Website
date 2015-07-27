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
                   </ul>
               </div>
               <div class="col-3-12">
                   <ul>
                       <li><h4>product</h4></li>
                       <li><a href="/features">Features</a></li>
                       <li><a href="/pricing">Pricing</a></li>
                       <li><a href="/faq">FAQ's</a></li>
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

</body>

</html>