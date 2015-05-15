<?php remove_shortcode( 'team_member' ); ?>
<?php remove_shortcode( 'mokaine_team_member_sc' ); 
add_action( 'after_setup_theme', 'coachseek_childtheme_setup' );

///* Enqueue scripts and styles */
//function coachseek_scripts() {
//	wp_enqueue_style( 'coachseek-style', get_stylesheet_uri() );
//}
//
//add_action( 'wp_enqueue_scripts', 'coachseek_scripts' );


function coachseek_childtheme_setup() {
   remove_shortcode( 'team_member' );
   add_shortcode( 'team_member', 'team_member_sc' );
}

function team_member_sc( $atts ) {
	extract( shortcode_atts( array( 'image_url' => '', 'name' => '', 'role' => '', 'social' => '' ), $atts ) );

	$output = null;

	if ( $name ) {

		$output = '<figure class="about-us new">';

		if ( $image_url ) {
			
			/*$output .= '<img src="' . aq_resize( $image_url, 640, 640, true, true, true ) . '" alt="' . $name . '">';*/
			$output .= '<img src="' . $image_url . '" alt="' . $name . '">';
			
		} else {

			$output .= '<img src="' . get_template_directory_uri() . '/mokaine/includes/img/team-member-default.jpg" alt="' . $name . '">';

		}

		$output .= '<figcaption>';
		$output .= '<h4>' . $name . '</h4>';
		
		if ( $role ) {

			$output .= '<p>' . $role . '</p>';

		}

		/* Social links */
		if ( $social ) {

			$social_arr = explode( ',', $social );
			
			$output .= '<div><ul class="meta-social inline">';	

			for ( $i = 0; $i < count( $social_arr ); $i = $i + 2 ) {

				/* Open in a new page if the link points to another domain */
				$target = null;
	     	    $url_host = parse_url( $social_arr[ $i + 1 ], PHP_URL_HOST );
			    $base_url_host = parse_url( get_template_directory_uri(), PHP_URL_HOST );
			    if( $url_host != $base_url_host || empty( $url_host ) ) {
			    	$target = 'target="_blank"';
			    }
	         		
				$social_name = strtolower( str_replace( ' ', '-', trim( $social_arr[ $i ] ) ) );
				$social_url = trim( $social_arr[ $i + 1 ] );
				$output .= '<li><a ' . $target . ' href="' . $social_url . '" class="' . $social_name . '-share border-box"><i class="icon-' . $social_name . ' icon-lg"></i></a></li>';  
	        }

			$output .= '</ul></div>';

		}

		$output .= '</figcaption>';
		$output .= '</figure>';

	}
	
	return str_replace( '\r\n', '', $output );

}

//define('THEMEROOT',get_stylesheet_directory_uri());


/*function my_ag_divider( $atts, $content = null ) {
    extract(shortcode_atts(array(
    ), $atts));
	$out = '<div class="divider"><h2><span>'.do_shortcode($content).'</span></h2></div>';
    return $out;
}*/

add_filter( 'textarea_code', 'shortcode_unautop');

add_filter('textarea_code', 'do_shortcode');

echo apply_filters( 'the_content', $options['textarea_input']); 


/*$subtitle = get_post_meta('portfolio-' . $page->ID, 'Slide_subtitle',  true);



echo do_shortcode($subtitle);*/
add_filter( 'auto_update_theme', '__return_true' );
add_filter( 'auto_update_plugin', '__return_true' );
?>