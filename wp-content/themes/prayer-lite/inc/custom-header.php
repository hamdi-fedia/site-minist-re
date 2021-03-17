<?php
/**
 * @package Prayer Lite
 * Setup the WordPress core custom header feature.
 *
 * @uses prayer_lite_header_style()

 */
function prayer_lite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'prayer_lite_custom_header_args', array(		
		'default-text-color'     => '202020',
		'width'                  => 1400,
		'height'                 => 250,
		'wp-head-callback'       => 'prayer_lite_header_style',		
	) ) );
}
add_action( 'after_setup_theme', 'prayer_lite_custom_header_setup' );

if ( ! function_exists( 'prayer_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see prayer_lite_custom_header_setup().
 */
function prayer_lite_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.ppmenubg{
			background: url(<?php echo esc_url( get_header_image() ); ?>) no-repeat;
			background-position: center top;
		}
		.logo h1 a { color:#<?php echo esc_html(get_header_textcolor()); ?>;}
	<?php endif; ?>	
	</style>
    
    <?php
	// If the header text option is untouched, let's bail.
	if ( display_header_text() ) {
		return;
	}

	// If the header text has been hidden.
	?>
    <style type="text/css">		
		.logo h1,
		.logo p{
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
    </style>
    
	<?php         
} 
endif; // prayer_lite_header_style 