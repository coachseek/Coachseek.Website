<?php
/** ---------------------------------------------------------
 * Section
 */

function mokaine_section_sc( $atts, $content = null ) {
	extract( shortcode_atts( array( 'background_color' => '', 'text_color' => '', 'title' => '', 'extra_class' => '' ), $atts ) );

	$output = $background_data = $text_color_class = $title_data = null;
	
	if ( $background_color ) {
		$background_data = ' style="background-color:' . $background_color . ';"';
	}

	if ( $text_color == 'light' ) {
		$text_color_class = " text-light";
	}
	
	if ( $title ) {
		$title_data = '<div class="section-title"><h3>' . $title . '</h3></div>';
	}
	
	$output = '
	<section class="row section' . $text_color_class . ' ' . $extra_class . '"' . $background_data . '>
		<div class="row-content buffer even clear-after">
			' . $title_data . do_shortcode( $content ) . '
		</div>
	</section>';
	
    return $output;

}

add_shortcode( 'section', 'mokaine_section_sc' );


/** ---------------------------------------------------------
 * Columns
 */

function mokaine_columns_sc( $atts, $content = null, $tag ) {
	extract( shortcode_atts( array( 'centered_text' => '', 'last' => '', 'extra_class' => '' ), $atts ) );

	$output = $class_centered_text = $class_last = null;

	/* Replace some shortcode tags */
	if ( strpos( $tag, 'onehalf' ) !== false ) {
	    $tag = str_replace( 'onehalf', ' half', $tag );
	}
	if ( strpos( $tag, 'onethird' ) !== false ) {
	    $tag = str_replace( 'onethird', ' third', $tag );
	}
	if ( strpos( $tag, 'onefourth' ) !== false ) {
	    $tag = str_replace( 'onefourth', ' fourth', $tag );
	}
	if ( strpos( $tag, 'onesixth' ) !== false ) {
	    $tag = str_replace( 'onesixth', ' sixth', $tag );
	}
	if ( strpos( $tag, 'onewhole' ) !== false ) {
	    $tag = str_replace( 'onewhole', ' full', $tag );
	}

	if( $centered_text == 'true' ) {
		$class_centered_text = ' centertxt';
	}

	if( $last == 'true' ) {
		$class_last = ' last';
	}
	
	$output = '
	<div class="column ' . $tag . $class_last . $class_centered_text . ' ' . $extra_class . '">
	' . do_shortcode( $content ) . '
	</div>';
	
	return $output;

}

add_shortcode( 'onehalf', 'mokaine_columns_sc' );
add_shortcode( 'onethird', 'mokaine_columns_sc' );
add_shortcode( 'twothirds', 'mokaine_columns_sc' );
add_shortcode( 'onefourth', 'mokaine_columns_sc' );
add_shortcode( 'threefourths', 'mokaine_columns_sc' );
add_shortcode( 'onesixth', 'mokaine_columns_sc' );
add_shortcode( 'fivesixths', 'mokaine_columns_sc' );
add_shortcode( 'onewhole', 'mokaine_columns_sc' );

/** ---------------------------------------------------------
 * Button
 */

function mokaine_button_sc( $atts ) {
	extract( shortcode_atts( array( 'text' => '', 'url' => '', 'color' => '', 'style' => '', 'open_new_tab' => '', 'extra_class' => '' ), $atts) );

	$output = $target_data = $style_class = null;

	if ( $text ) {
		
		if ( $open_new_tab == 'true' ) {
			$target_data = ' target="_blank"';
		}

		if ( $style == 'transparent' ) {
			$style_class = ' transparent';
		}
		
		$output = '<a class="button ' . $color . $style_class . ' ' . $extra_class . '" href="' . $url . '"' . $target_data . '>' . $text . '</a>';
		
	}	

	return $output;

}

add_shortcode( 'button', 'mokaine_button_sc' );

/** ---------------------------------------------------------
 * Icon
 */

function mokaine_icon_sc( $atts ) {
	extract( shortcode_atts( array( 'color' => '', 'type' => '', 'extra_class' => '' ), $atts ) );

	$output = $color_class = null;

	if ( $type ) {

		if ( $color && $color != 'none' ) {
			$color_class = $color;
		} 
		
		$output = '<i class="' . $type . ' ' . $color_class . ' ' . $extra_class . '"></i>';

	}
	
	return $output;

}

add_shortcode( 'icon', 'mokaine_icon_sc' );

/** ---------------------------------------------------------
 * CTA
 */

function mokaine_cta_sc( $atts, $content = null ) {
	extract( shortcode_atts( array( 'button_text' => '', 'button_url' => '', 'button_color' => '', 'button_style' => '', 'open_new_tab' => '', 'animation' => '' ), $atts) );
	
	$output = $animation_class = $button_data = $target_data = $button_style_class = null;

	if ( $animation == 'true' ) {
		$animation_class = ' onscreen-animation';
	}
	
	if ( $button_text ) {
		
		if ( $open_new_tab == 'true' ) {
			$target_data = ' target="_blank"';
		}

		if ( $button_style == 'transparent' ) {
			$button_style_class = ' transparent';
		}
		
		$button_data = '<a class="button ' . $button_color . $button_style_class . '" href="' . $button_url . '"' . $target_data . '>' . $button_text . '</a>';
		
	}
	
	$output = '
	<div class="call-to-action' . $animation_class . '">
		<p>' . do_shortcode( $content ) . '</p>
		' . $button_data . '
	</div>';

	return $output;

}

add_shortcode( 'cta', 'mokaine_cta_sc' );

/** ---------------------------------------------------------
 * Slogan
 */

function mokaine_slogan_sc( $atts, $content = null ) {
	extract( shortcode_atts( array( 'title' => '', 'animation' => '' ), $atts ) );
	
	$output = $title_data = $content_data = $animation_class = null;

	if ( $title ) {
		$title_data = '<h2>' . $title . '</h2>';
	}

	if ( $content ) {
		$content_data = '<p>' . $content . '</p>';
	}

	if ( $animation == 'true' ) {
		$animation_class = ' onscreen-animation';
	}
	
	$output = '<div class="slogan' . $animation_class . '">' . $title_data . $content_data . '</div>';
	
	return $output;

}

add_shortcode( 'slogan', 'mokaine_slogan_sc' );

/** ---------------------------------------------------------
 * Skills Rings
 */

function mokaine_skills_rings_sc( $atts ) {
	extract( shortcode_atts( array( 'percent' => '', 'label' => '', 'color' => '', 'animation_time' => '' ), $atts ) );

	$output = null;

	$animation_data = ' data-animate="2000"';
	if ( $animation_time ) {
		$animation_data = ' data-animate="' . $animation_time . '"';
	}

	$color_data = '';
	if ( $color ) {
		$color_data = ' data-bar-color="' . $color . '"';
	}	
		
	$output = '
	<div class="chart" data-percent="' . $percent . '"' . $color_data . $animation_data . '>
		<div class="chart-content">
			<div class="percent"></div>
			<div class="chart-title">' . $label . '</div>
		</div>
	</div>';
	
	return $output;

}

add_shortcode( 'skills_ring', 'mokaine_skills_rings_sc' );

/** ---------------------------------------------------------
 * Milestone
 */

function mokaine_milestone_sc( $atts ) {
	extract( shortcode_atts( array( 'icon_color' => '', 'icon_type' => '', 'count_from' => '', 'count_to' => '', 'animation_time' => '', 'refresh_interval' => '', 'label' => '' ), $atts ) );
	
	$output = $icon_type_data = $label_data = null;

	if ( $icon_type ) {
		$icon_type_data = '<div class="small-icon ' . $icon_color . '"><i class="icon ' . $icon_type . '"></i></div>';
	}

	if ( $label ) {
		$label_data = '<div class="count-subject">' . $label . '</div>';
	}

	$count_from_data = 0;
	if ( $count_from ) {
		$count_from_data = $count_from; 
	}	

	$animation_time_data = 1500;
	if ( $animation_time ) {
		$animation_time_data = $animation_time; 
	}	

	$refresh_interval_data = 25;
	if ( $refresh_interval ) {
		$refresh_interval_data = $refresh_interval; 
	}		

	if ( $count_to ) {

		$output = '
		<div class="count-item">
			' . $icon_type_data . '
			<div class="count-number" data-from="' . $count_from_data . '" data-to="' . $count_to . '" data-speed="' . $animation_time_data . '" data-refresh-interval="' . $refresh_interval_data . '"></div>
			' . $label_data . '
		</div>';

	}
	
	return $output;

}

add_shortcode( 'milestone', 'mokaine_milestone_sc' );

/** ---------------------------------------------------------
 * Services
 */

function mokaine_service_sc( $atts, $content = null ) {
	extract( shortcode_atts( array( 'icon_size' => '', 'icon_color' => '', 'icon_type' => '', 'title' => '' ), $atts ) );

	$output = $icon_color_class = $title_data = $content_data = null;

	$icon_size_class = 'small-icon';
	$content_size_class = 'xs';
	if ( $icon_size == 'big' ) {
		$icon_size_class = 'big-icon';
		$content_size_class = 's';
	}

	if ( $icon_color && $icon_color != 'none' ) {
		$icon_color_class = $icon_color;
	}

	if ( $title ) {
		$title_data = '<h4>' . $title . '</h4>';
	}

	if ( $content ) {
		$content_data = '<p class="text-' . $content_size_class . '">' . do_shortcode( $content ) . '</p>';
	}

	if ( $icon_type ) {

		$output = '
		<div class="' . $icon_size_class . ' ' . $icon_color_class . '"><i class="icon ' . $icon_type . '"></i></div>
		<div class="' . $icon_size_class . '-text clear-after">' . $title_data . $content_data . '</div>';

	}

	return $output;

}

add_shortcode( 'service', 'mokaine_service_sc' );

/** ---------------------------------------------------------
 * Team Member
 */

function mokaine_team_member_sc( $atts ) {
	extract( shortcode_atts( array( 'image_url' => '', 'name' => '', 'role' => '', 'social' => '' ), $atts ) );

	$output = null;

	if ( $name ) {

		$output = '<figure class="about-us">';

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

add_shortcode( 'team_member', 'mokaine_team_member_sc' );

/** ---------------------------------------------------------
 * Map
 */

function mokaine_map_sc( $atts ) {
	extract( shortcode_atts( array( 'latitude' => '', 'longitude' => '', 'zoom' => '', 'style' => '', 'height' => '', 'marker' => '', 'tooltip' => '', 'extra_class' => '' ), $atts ) );
	
	/* Load Google Maps scripts */
	wp_enqueue_script( array( 'google-map', 'beetle-map' ) );

	$output = null;

	if ( $latitude && $longitude ) {

		$zoom_data = 3;
		if ( $zoom ) {
			$zoom_data = $zoom; 
		}

		$style_data = 'default';
		if ( $style ) {
			$style_data = $style; 
		}

		$height_data = 22.222;
		if ( $height ) {
			$height_data = $height; 
		}

		$output .= '
		<section class="row section">
			<div class="map ' . $extra_class . '" data-maplat="' . $latitude . '" data-maplon="' . $longitude . '" data-mapzoom="' . $zoom_data . '" data-color="' . $style_data . '" data-height="' . $height_data . '" data-img="' . $marker . '" data-info="' . $tooltip . '"></div>
		</section>';
	
	}
	
	return $output;

}

add_shortcode( 'map', 'mokaine_map_sc' );

/** ---------------------------------------------------------
 * Timeline
 */

function mokaine_timeline_sc( $atts, $content = null ) {

	$output = null;

	$output = '<div class="timeline-wrapper">' . do_shortcode( $content );

	$timeline_args = array(
		'post_type' => 'mokaine_timeline',
		'posts_per_page' => -1,
		'orderby' => 'menu_order'
	);

	$wp_query = new WP_Query( $timeline_args );

	$output .= '<div class="timeline column six last">';

	if ( $wp_query->have_posts() ) :

		while ( $wp_query->have_posts() ):

			$wp_query->the_post();

			/* Check if there are experiences */
			$experiences = get_post_meta( get_the_ID(), '_mokaine_single_experience', true );

			if ( $experiences ) :

				$output .= '
				<div class="year clear-after">
					<div class="time">' . get_the_title() . '</div>';

				/* Output experiences */
				foreach ( $experiences as $experience ) :

					/* Set vars */
					$experience_title = get_meta( $experience, '_mokaine_experience_title' );
					$experience_role = get_meta( $experience, '_mokaine_experience_role' );
					$experience_details = get_meta( $experience, '_mokaine_experience_details' );
					$experience_image_id = get_meta( $experience, '_mokaine_experience_select_image_id' );
					$experience_image = wp_get_attachment_image_src( $experience_image_id, 'experience-image' );
					$experience_image_url = $experience_image[0];
					$experience_image_class = ( $experience_image ) ? ' exp-img' : null;

					$output .= '
					<div class="experience' . $experience_image_class . '">
						<span class="circle"></span>';

					if ( $experience_image ) {

						$output .= '<div class="experience-img"><img src="' . $experience_image_url . '" alt=""></div>';

					}

					$output .= '
						<div class="experience-info clear-after">
							<h5>' . $experience_title . '</h5>
							<div class="role">' . $experience_role . '</div>
							<p>' . $experience_details . '</p>
						</div>
					</div>';

				endforeach;

				$output .= '</div>';				

			endif;
			/* End if - There are experiences */

		endwhile;

	else :

		$output .= '<div>' . __( 'Ready to publish your timeline? <a href="'. admin_url( 'edit.php?post_type=mokaine_timeline' ) .'">Get started here</a>.', MOKAINE_THEME_NAME ) . '</div>'; // no posts found

	endif;

	$output .= '</div></div>';

	return $output;

	wp_reset_query();

}

add_shortcode( 'timeline', 'mokaine_timeline_sc' );

	/* Half page label (useful for Timeline shortcodes and Side Mockup) */
	function mokaine_half_aside_sc( $atts, $content = null ) {
		extract( shortcode_atts( array( 'title' => '' ), $atts ) );
		
		$output = null;
		$output .= '
		<div class="side-label column six">
			<h2>' . $title . '</h2>
			<p>' . do_shortcode( $content ) . '</p>
		</div>';
		
		return $output;

	}	

	/* Half page label (Timeline) */
	add_shortcode( 'timeline_aside', 'mokaine_half_aside_sc' );	

/** ---------------------------------------------------------
 * Mockup Slider
 */

/* Full Width Mockup */
function mokaine_mockup_sc( $atts, $content = null ) {
	extract( shortcode_atts( array( 'device' => '', 'color' => '', 'arrows_color' => '', 'autoplay' => '', 'rewind_speed' => '' ), $atts ) );

	$output = $autoplay_data = null;

	$device_class = ' iphone-slider';
	if ( $device ) {
		$device_class = ' ' . $device . '-slider';
	}

	$color_class = ' black';
	if ( $color ) {
		$color_class = ' ' . $color;
	}	

	$arrows_color_class = ' dark-controls';
	if ( $arrows_color == 'white') {
		$arrows_color_class = ' white-controls';
	}

	if ( $autoplay ) {
		$autoplay_data = ' data-autoplay="' . $autoplay . '"';
	}

	if ( $rewind_speed ) {
		$rewind_data = ' data-rewind="' . $rewind_speed . '"';
	} else {
		$rewind_data = ' data-rewind="1000"';
	}	
	
	$output = null;
	$output .= '
	<div class="mockup-wrapper' . $device_class . $color_class . $arrows_color_class . '"' . $autoplay_data . $rewind_data . '>
		' . do_shortcode( $content ) . '
	</div>';
	
	return $output;

}

add_shortcode( 'mockup', 'mokaine_mockup_sc' );


/* Half Mockup */
function mokaine_half_mockup_sc( $atts, $content = null ) {
	extract( shortcode_atts( array( 'device' => '', 'color' => '', 'layout' => '', 'autoplay' => '' ), $atts ) );
	
	$output = $autoplay_data = null;

	$device_class = ' iphone-slider';
	if ( $device ) {
		$device_class = ' ' . $device . '-slider';
	}

	$color_class = ' black';
	if ( $color ) {
		$color_class = ' ' . $color;
	}	

	$layout_class = ' left';
	if ( $layout == 'right' ) {
		$layout_class = ' right';
	}	

	if ( $autoplay ) {
		$autoplay_data = ' data-autoplay="' . $autoplay . '"';
	}

	$output = null;
	$output .= '
	<div class="mockup-wrapper side-mockup' . $layout_class . '-mockup' . $device_class . $color_class . '"' . $autoplay_data . '>
		' . do_shortcode( $content ) . '
	</div>';
	
	return $output;

}

add_shortcode( 'mockup_half', 'mokaine_half_mockup_sc' );


	/* Mockup Screens */
	function mokaine_mockup_screens_sc( $atts ) {
		extract( shortcode_atts( array( 'url'  =>  '' ), $atts ) );
		
		$output = null;

		if ( $url ) {

			$url_arr = explode( ',', $url );

			$output = '<div class="slider">';
			$output .= '<figure>';

			foreach ( $url_arr as $url_link ) {

				$output .=  '<div><img src="' . $url_link . '" alt=""></div>'; 

			}

			$output .= '</figure>';
			$output .= '</div>';

		} else {

			$output .= '<div class="slider">' . __( 'Please, make sure to select some screens to make the mockup appear!', MOKAINE_THEME_NAME ) . '</div>';

		}

		return str_replace( '\r\n', '', $output );		

	}

	add_shortcode( 'mockup_screens', 'mokaine_mockup_screens_sc' );

	/* Half page label (Side Mockup) */
	add_shortcode( 'mockup_aside', 'mokaine_half_aside_sc' );

/** ---------------------------------------------------------
 * Testimonial
 */

function mokaine_testimonial_sc( $atts, $content = null ) {
	extract( shortcode_atts( array( 'autoplay' => '', 'transition' => '', 'pagination' => '', 'centered_text' => '' ), $atts ) );

	$output = $autoplay_data = $pagination_data = $transition_data = $class_centered_text = null;

	if ( $autoplay ) {
		$autoplay_data = ' data-autoplay="' . $autoplay . '"';
	}

	if ( $pagination ) {
		$pagination_data = ' data-pagination="' . $pagination . '"';
	}

	if ( $transition ) {
		$transition_data = ' data-transition="' . $transition . '"';
	}

	if( $centered_text == 'true' ) {
		$class_centered_text = ' centertxt';
	}

	$output = '
	<div class="testimonial-slider ' . $class_centered_text . '"' . $autoplay_data . $pagination_data . $transition_data . '>
	' . do_shortcode( $content ) . '
	</div>';
	
	
	return $output;

}

add_shortcode( 'testimonial', 'mokaine_testimonial_sc' );

	/* Quote */
	function mokaine_quote_sc( $atts, $content = null ) {
		extract( shortcode_atts( array( 'author' => '', 'image_url' => '' ), $atts ) );

		$output = $author_data = null;

		if ( $author ) {
			$author_data = '<div class="author">' . $author . '</div>';
		}		
		
		/* Check if image exists */
		if ( $image_url ) {
			$output = '
			<div class="quote">
				<div class="column two">
					<figure class="testimonial-img">
						<img src="' . aq_resize( $image_url, 320, 320, true, true, true ) . '" alt="' . $author . '">
					</figure>
				</div>
				<div class="column ten last">';
		} else {
			$output = '
			<div class="quote">
				<div class="column twelve last">';
		} 

		$output .= '
				<p>' . $content . '</p>' . $author_data . '
			</div>
		</div>';
		
		
		return $output;

	}

	add_shortcode( 'quote', 'mokaine_quote_sc' );


/** ---------------------------------------------------------
 * Custom Carousel
 */

function mokaine_custom_carousel_sc( $atts, $content = null ) {
	extract( shortcode_atts( array( 'autoplay' => '', 'transition' => '', 'pagination' => '' ), $atts ) );

	$output = $autoplay_data = $pagination_data = $transition_data = null;

	if ( $autoplay ) {
		$autoplay_data = ' data-autoplay="' . $autoplay . '"';
	}

	if ( $pagination ) {
		$pagination_data = ' data-pagination="' . $pagination . '"';
	}

	if ( $transition ) {
		$transition_data = ' data-transition="' . $transition . '"';
	}
		
	$output = '
	<div class="custom-carousel"' . $autoplay_data . $pagination_data . $transition_data . '>
		' . do_shortcode( $content ) . '
	</div>';
	
	return $output;

}

add_shortcode( 'custom_carousel', 'mokaine_custom_carousel_sc' );

	/* Carousel Item */
	function mokaine_carousel_item_sc( $atts, $content = null ) {
			
		$output = null;

		$output = '
		<div class="carousel-item">
			' . do_shortcode( $content ) . '
		</div>';
		
		return $output;

	}

	add_shortcode( 'carousel_item', 'mokaine_carousel_item_sc' );

/** ---------------------------------------------------------
 * Social
 */

function mokaine_social_sc( $atts ) {
	extract( shortcode_atts( array( 'title' => '', 'links' => '' ), $atts ) );

	$output = $title_data = null;

	if ( $title ) {
		$title_data = '<h4 class="widget-title">' . $title . '</h4>';
	}

	if ( $links ) {

		$social_arr = explode( ',', $links );

		$output = '<div class="widget">';
		$output .= $title_data;
		$output .= '<ul class="meta-social inline">';	

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
			
	return str_replace( '\r\n', '', $output );

}

add_shortcode( 'social', 'mokaine_social_sc' );

/** ---------------------------------------------------------
 * Text Widget
 */

function mokaine_text_widget_sc( $atts, $content = null ) {
	extract( shortcode_atts( array( 'title' => '' ), $atts ) );

	$output = $title_data = null;

	if ( $title ) {
		$title_data = '<h4 class="widget-title">' . $title . '</h4>';
	}

	$output = '<aside class="widget">' . $title_data . '<p>' . do_shortcode( $content ) . '</p></aside>';	
			
	return $output;

}

add_shortcode( 'text_widget', 'mokaine_text_widget_sc' );

/** ---------------------------------------------------------
 * Dribbble
 */

function mokaine_dribbble_sc( $atts ) {
	extract( shortcode_atts( array( 'username' => '', 'items' => '', 'columns' => '', 'button_text' => '', 'button_url' => '', 'button_color' => '', 'button_style' => '', 'open_new_tab' => '' ), $atts ) );
	
	$output = $button_data = $target_data = $button_style_class = null;

	if ( $username ) {

		if ( $columns == 4 ) {
			$columns_class = ' dribbble-four-cols';
			$columns_data = 4;		
		} else {
			$columns_class = ' dribbble-three-cols';	
			$columns_data = 3;			
		}

		if ( $items ) {
			$items_data = $items;		
		} else {
			$items_data = $columns_data;			
		}			

		if ( $button_text ) {
			
			if ( $open_new_tab == 'true' ) {
				$target_data = ' target="_blank"';
			}

			if ( $button_style == 'transparent' ) {
				$button_style_class = ' transparent';
			}
			
			$button_data = '<div class="more-btn"><a class="button ' . $button_color . $button_style_class . '" href="' . $button_url . '"' . $target_data . '>' . $button_text . '</a></div>';
			
		}	
		
		$output = '<div class="dribbble-items preload' . $columns_class . '" data-username="' . $username . '" data-elements="' . $items_data . '"></div>' . $button_data;

	}

	return $output;

}

add_shortcode( 'dribbble', 'mokaine_dribbble_sc' );

/** ---------------------------------------------------------
 * Blog
 */

function mokaine_blog_sc( $atts ) {
	extract( shortcode_atts( array( 'category' => '', 'articles' => '', 'style' => '', 'button_text' => '', 'button_url' => '', 'button_color' => '', 'button_style' => '', 'open_new_tab' => '' ), $atts ) );

	global $mokaine, $more;

	$blog_content = $sizer = $button_data = $target_data = $button_style_class = null;

	/* Handle big post */
	$big_post_option = $mokaine['enable-first-post-big'];

	/* Set dynamic posts_per_page and offset values */
	$latest_post = get_posts('numberposts=1');
	$latest_id = $latest_post[0]->ID;

	if ( $articles ) {
		if ( has_post_thumbnail( $latest_id ) && $big_post_option && $style == 'masonry' ) {
			$articles_data = $articles -1;
		} else {
			$articles_data = $articles;
		}		
	} else {
		$articles_data = 4;			
	}

	if( $category == 'all' || $category == '' ) {
		$category = null;
	}	

	if ( $style != 'masonry' ) {

		$style_class = 'list-style';
		$buffer = 'buffer-left buffer-right buffer-bottom clear-after';	

	} else {

		$style_class = 'masonry-style grid-items preload';
		$buffer = 'buffer clear-after';
		$sizer = '<div class="shuffle-sizer three"></div>';

	}

    $blog_sc_args = array(
        'post_type' => 'post',
        'posts_per_page' => $articles_data,
        'category_name' => $category
    );

    query_posts( $blog_sc_args );


    if ( $button_text ) {
    	
    	if ( $open_new_tab == 'true' ) {
    		$target_data = ' target="_blank"';
    	}

    	if ( $button_style == 'transparent' ) {
    		$button_style_class = ' transparent';
    	}
    	
    	$button_data = '<div class="more-btn"><a class="button ' . $button_color . $button_style_class . '" href="' . $button_url . '"' . $target_data . '>' . $button_text . '</a></div>';
    	
    }   

	ob_start(); 

	?>

	<div class="blog-section <?php echo $style_class; ?> clear-after">

		<?php

	    if ( have_posts() ) :

	        while ( have_posts() ) : the_post();

	            $more = 0;

	            if ( $style != 'masonry' ) {

					get_template_part( 'listed', 'article' );

				} else {

					get_template_part( 'listed', 'article-masonry' );

				}

	        endwhile;

	        echo $sizer;

	    else :

	        get_template_part( 'content', 'none' );

	    endif;

	    ?>

    </div>


    <?php

    wp_reset_query();

    $blog_content = ob_get_contents();
    $blog_content .= $button_data;

    ob_end_clean();
    
    return $blog_content;

}

add_shortcode( 'blog', 'mokaine_blog_sc' );

/** ---------------------------------------------------------
 * Portfolio
 */

function mokaine_portfolio_sc( $atts ) {
	extract( shortcode_atts( array( 'id' => '', 'columns' => '', 'items' => '', 'lightbox' => '', 'button_text' => '', 'button_url' => '', 'button_color' => '', 'button_style' => '', 'open_new_tab' => '' ), $atts ) );

	$portfolio_content = $button_data = $target_data = $button_style_class = null;

	global $grid_class, $sc_lightbox;

	if ( $columns ) {
		$columns_data = $columns;		
	} else {
		$columns_data = 3;			
	}

	if ( $items ) {
		$items_data = $items;		
	} else {
		$items_data = $columns_data;			
	}		

	if ( $lightbox == 'true' ) {
		$lightbox_data = ' lightbox';		
	} else {
		$lightbox_data = null;			
	}

	$sc_lightbox = $lightbox;	

	switch ( $columns_data ) {
	    case '4' :
	        $grid_class = 'three';
	        break;
	    case '3' :
	        $grid_class = 'four';
	        break;
	    case '2' :
	        $grid_class = 'six';
	        break;
	}

	$sizer = '<div class="shuffle-sizer ' . $grid_class . '"></div>';

    $portfolio_sc_args = array(
        'post_type' => 'portfolio-' . $id,
        'posts_per_page' => $items_data
    );

    $wp_query = new WP_Query( $portfolio_sc_args );

    
    if ( $button_text ) {
    	
    	if ( $open_new_tab == 'true' ) {
    		$target_data = ' target="_blank"';
    	}

    	if ( $button_style == 'transparent' ) {
    		$button_style_class = ' transparent';
    	}
    	
    	$button_data = '<div class="more-btn"><a class="button ' . $button_color . $button_style_class . '" href="' . $button_url . '"' . $target_data . '>' . $button_text . '</a></div>';
    	
    }     

	ob_start(); 

	?>

	<div class="portfolio-section clear-after">

		<div class="grid-items preload<?php echo $lightbox_data; ?>">

			<?php

		    if ( $wp_query->have_posts() ) :

		        while ( $wp_query->have_posts() ) : $wp_query->the_post();

					get_template_part( 'listed', 'item' );

		        endwhile;

		        echo $sizer;

		    else :

		        get_template_part( 'content', 'none' );

		    endif;

		    ?>

		</div>

    </div>


    <?php

    wp_reset_postdata();

    $portfolio_content = ob_get_contents();
    $portfolio_content .= $button_data;

    ob_end_clean();
    
    return $portfolio_content;

}

add_shortcode( 'portfolio', 'mokaine_portfolio_sc' );

/** ---------------------------------------------------------
 * Current year
 */

function mokaine_year_sc() {

	$year = date('Y');

	return $year;

}

add_shortcode( 'current_year', 'mokaine_year_sc' );


/** ---------------------------------------------------------
 * Remove empty <p> tags in shortcodes https://gist.github.com/bitfade/4555047
 * http://themeforest.net/forums/thread/how-to-add-shortcodes-in-wp-themes-without-being-rejected/98804?page=4#996848
 */
 
function the_content_filter( $content ) {

	/* Array of shortcodes requiring the fix */
	$block = join( '|', array( 'section', 'onehalf', 'onethird', 'twothirds', 'onefourth', 'threefourths', 'onesixth', 'fivesixth', 'onewhole', 'cta', 'skills_ring','service', 'map', 'timeline', 'timeline_aside', 'mockup', 'mockup_half', 'mockup_screens', 'mockup_aside', 'testimonial', 'quote', 'custom_carousel', 'carousel_item', 'text_widget', 'blog', 'portfolio', 'dribbble' ) );
 
	/* Opening tag */
	$rep = preg_replace( "/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/", "[$2$3]" , $content );
		
	/* Closing tag */
	$rep = preg_replace( "/(<p>)?\[\/($block)](<\/p>|<br \/>)?/", "[/$2]", $rep );
 
	return $rep;
 
}

add_filter( 'the_content', 'the_content_filter' );