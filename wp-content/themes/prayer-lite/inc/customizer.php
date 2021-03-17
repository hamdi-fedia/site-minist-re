<?php    
/**
 *prayer-lite Theme Customizer
 *
 * @package Prayer Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function prayer_lite_customize_register( $wp_customize ) {	
	
	function prayer_lite_sanitize_dropdown_pages( $page_id, $setting ) {
	  // Ensure $input is an absolute integer.
	  $page_id = absint( $page_id );
	
	  // If $page_id is an ID of a published page, return it; otherwise, return the default.
	  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	function prayer_lite_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}  
		
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	 //Panel for section & control
	$wp_customize->add_panel( 'prayer_lite_panel_section', array(
		'priority' => null,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Options Panel', 'prayer-lite' ),		
	) );
	
	//Site Layout Options
	$wp_customize->add_section('prayer_lite_layout_option',array(
		'title' => __('Site Layout Options','prayer-lite'),			
		'priority' => 1,
		'panel' => 	'prayer_lite_panel_section',          
	));		
	
	$wp_customize->add_setting('prayer_lite_site_layout_options',array(
		'sanitize_callback' => 'prayer_lite_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'prayer_lite_site_layout_options', array(
    	'section'   => 'prayer_lite_layout_option',    	 
		'label' => __('Check to Show Box Layout','prayer-lite'),
		'description' => __('If you want to show box layout please check the Box Layout Option.','prayer-lite'),
    	'type'      => 'checkbox'
     )); //Site Layout Options 
	
	$wp_customize->add_setting('prayer_lite_site_color_codes',array(
		'default' => '#e96300',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'prayer_lite_site_color_codes',array(
			'label' => __('Color Options','prayer-lite'),			
			'description' => __('More color options available in PRO Version','prayer-lite'),
			'section' => 'colors',
			'settings' => 'prayer_lite_site_color_codes'
		))
	);	
			
	
	//Top Contact bar
	$wp_customize->add_section('prayer_lite_top_contact_options',array(
		'title' => __('Header Top Contact info','prayer-lite'),				
		'priority' => null,
		'panel' => 	'prayer_lite_panel_section',
	));	
	
	$wp_customize->add_setting('prayer_lite_top_contact_no',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('prayer_lite_top_contact_no',array(	
		'type' => 'text',
		'label' => __('enter phone number here','prayer-lite'),
		'section' => 'prayer_lite_top_contact_options',
		'setting' => 'prayer_lite_top_contact_no'
	));	
	
	
	$wp_customize->add_setting('prayer_lite_top_email_options',array(
		'sanitize_callback' => 'sanitize_email'
	));
	
	$wp_customize->add_control('prayer_lite_top_email_options',array(
		'type' => 'email',
		'label' => __('enter email id here.','prayer-lite'),
		'section' => 'prayer_lite_top_contact_options'
	));	
	
	
	$wp_customize->add_setting('prayer_lite_show_top_contact_bar',array(
		'default' => false,
		'sanitize_callback' => 'prayer_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'prayer_lite_show_top_contact_bar', array(
	   'settings' => 'prayer_lite_show_top_contact_bar',
	   'section'   => 'prayer_lite_top_contact_options',
	   'label'     => __('Check To show This Section','prayer-lite'),
	   'type'      => 'checkbox'
	 ));//Show Top Contact bar
	
	
	// Header Slider Section		
	$wp_customize->add_section( 'prayer_lite_homepage_slider_portion', array(
		'title' => __('Homepage Slider Sections', 'prayer-lite'),
		'priority' => null,
		'description' => __('Default image size for slider is 1400 x 800 pixel.','prayer-lite'), 
		'panel' => 	'prayer_lite_panel_section',           			
    ));
	
	$wp_customize->add_setting('prayer_lite_homeslider_page1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'prayer_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('prayer_lite_homeslider_page1',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slider 1:','prayer-lite'),
		'section' => 'prayer_lite_homepage_slider_portion'
	));	
	
	$wp_customize->add_setting('prayer_lite_homeslider_page2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'prayer_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('prayer_lite_homeslider_page2',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slider 2:','prayer-lite'),
		'section' => 'prayer_lite_homepage_slider_portion'
	));	
	
	$wp_customize->add_setting('prayer_lite_homeslider_page3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'prayer_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('prayer_lite_homeslider_page3',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slider 3:','prayer-lite'),
		'section' => 'prayer_lite_homepage_slider_portion'
	));	// Slider Section Options	
	
	$wp_customize->add_setting('prayer_lite_homeslider_readmore_text',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('prayer_lite_homeslider_readmore_text',array(	
		'type' => 'text',
		'label' => __('enter slider Read more button name here','prayer-lite'),
		'section' => 'prayer_lite_homepage_slider_portion',
		'setting' => 'prayer_lite_homeslider_readmore_text'
	)); // Slider Read More Button Text
	
	$wp_customize->add_setting('prayer_lite_show_homeslider_portion',array(
		'default' => false,
		'sanitize_callback' => 'prayer_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'prayer_lite_show_homeslider_portion', array(
	    'settings' => 'prayer_lite_show_homeslider_portion',
	    'section'   => 'prayer_lite_homepage_slider_portion',
	     'label'     => __('Check To Show This Section','prayer-lite'),
	   'type'      => 'checkbox'
	 ));//Show Home Slider Portion	
	 
	 
	 //Right Four Box Services Area
	$wp_customize->add_section('prayer_lite_fourbx_services_area', array(
		'title' => __('Four Box Services Area','prayer-lite'),
		'description' => __('Select pages from the dropdown for services area','prayer-lite'),
		'priority' => null,
		'panel' => 	'prayer_lite_panel_section',          
	));	
	
	$wp_customize->add_setting('prayer_lite_fourpage_box1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'prayer_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'prayer_lite_fourpage_box1',array(
		'type' => 'dropdown-pages',			
		'section' => 'prayer_lite_fourbx_services_area',
	));		
	
	$wp_customize->add_setting('prayer_lite_fourpage_box2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'prayer_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'prayer_lite_fourpage_box2',array(
		'type' => 'dropdown-pages',			
		'section' => 'prayer_lite_fourbx_services_area',
	));
	
	$wp_customize->add_setting('prayer_lite_fourpage_box3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'prayer_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'prayer_lite_fourpage_box3',array(
		'type' => 'dropdown-pages',			
		'section' => 'prayer_lite_fourbx_services_area',
	));
	
	$wp_customize->add_setting('prayer_lite_fourpage_box4',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'prayer_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'prayer_lite_fourpage_box4',array(
		'type' => 'dropdown-pages',			
		'section' => 'prayer_lite_fourbx_services_area',
	));	
	
	$wp_customize->add_setting('prayer_lite_show_fourpage_box_area',array(
		'default' => false,
		'sanitize_callback' => 'prayer_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'prayer_lite_show_fourpage_box_area', array(
	   'settings' => 'prayer_lite_show_fourpage_box_area',
	   'section'   => 'prayer_lite_fourbx_services_area',
	   'label'     => __('Check To Show This Section','prayer-lite'),
	   'type'      => 'checkbox'
	 ));//Show four box Services Area
	 
	 
	 //Welcome Section 
	$wp_customize->add_section('prayer_lite_welcome_sections', array(
		'title' => __('Welcome Section','prayer-lite'),
		'description' => __('Select Pages from the dropdown for welcome section','prayer-lite'),
		'priority' => null,
		'panel' => 	'prayer_lite_panel_section',          
	));		
	
	$wp_customize->add_setting('prayer_lite_page_for_welcome_area',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'prayer_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'prayer_lite_page_for_welcome_area',array(
		'type' => 'dropdown-pages',			
		'section' => 'prayer_lite_welcome_sections',
	));	
	
	
	$wp_customize->add_setting('prayer_lite_show_welcome_area',array(
		'default' => false,
		'sanitize_callback' => 'prayer_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'prayer_lite_show_welcome_area', array(
	    'settings' => 'prayer_lite_show_welcome_area',
	    'section'   => 'prayer_lite_welcome_sections',
	    'label'     => __('Check To Show This Section','prayer-lite'),
	    'type'      => 'checkbox'
	));//Show Welcome Area
	 
	//Sidebar Settings
	$wp_customize->add_section('prayer_lite_sidebar_options', array(
		'title' => __('Sidebar Options','prayer-lite'),		
		'priority' => null,
		'panel' => 	'prayer_lite_panel_section',          
	));	
	
	$wp_customize->add_setting('prayer_lite_hidesidebar_from_homepage',array(
		'default' => false,
		'sanitize_callback' => 'prayer_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'prayer_lite_hidesidebar_from_homepage', array(
	   'settings' => 'prayer_lite_hidesidebar_from_homepage',
	   'section'   => 'prayer_lite_sidebar_options',
	   'label'     => __('Check to hide sidebar from latest post page','prayer-lite'),
	   'type'      => 'checkbox'
	 ));// Hide sidebar from latest post page
	 
	 
	 $wp_customize->add_setting('prayer_lite_hidesidebar_singlepost',array(
		'default' => false,
		'sanitize_callback' => 'prayer_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'prayer_lite_hidesidebar_singlepost', array(
	   'settings' => 'prayer_lite_hidesidebar_singlepost',
	   'section'   => 'prayer_lite_sidebar_options',
	   'label'     => __('Check to hide sidebar from single post','prayer-lite'),
	   'type'      => 'checkbox'
	 ));// hide sidebar single post	 

	 
	//Header and Footer Social icons
	$wp_customize->add_section('prayer_lite_social_sections',array(
		'title' => __('Header and Footer social icons','prayer-lite'),
		'description' => __( 'Add social icons link here to display icons in header and footer.', 'prayer-lite' ),			
		'priority' => null,
		'panel' => 	'prayer_lite_panel_section', 
	));
	
	$wp_customize->add_setting('prayer_lite_facebook_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'	
	));
	
	$wp_customize->add_control('prayer_lite_facebook_link',array(
		'label' => __('Add facebook link here','prayer-lite'),
		'section' => 'prayer_lite_social_sections',
		'setting' => 'prayer_lite_facebook_link',
		'type' => 'url'
	));	
	
	$wp_customize->add_setting('prayer_lite_twitter_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('prayer_lite_twitter_link',array(
		'label' => __('Add twitter link here','prayer-lite'),
		'section' => 'prayer_lite_social_sections',
		'setting' => 'prayer_lite_twitter_link',
		'type' => 'url'
	));
	
	$wp_customize->add_setting('prayer_lite_googleplus_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('prayer_lite_googleplus_link',array(
		'label' => __('Add google plus link here','prayer-lite'),
		'section' => 'prayer_lite_social_sections',
		'setting' => 'prayer_lite_googleplus_link',
		'type' => 'url'
	));
	
	$wp_customize->add_setting('prayer_lite_linkedin_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('prayer_lite_linkedin_link',array(
		'label' => __('Add linkedin link here','prayer-lite'),
		'section' => 'prayer_lite_social_sections',
		'setting' => 'prayer_lite_linkedin_link',
		'type' => 'url'
	));
	
	$wp_customize->add_setting('prayer_lite_instagram_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('prayer_lite_instagram_link',array(
		'label' => __('Add instagram link here','prayer-lite'),
		'section' => 'prayer_lite_social_sections',
		'setting' => 'prayer_lite_instagram_link',
		'type' => 'url'
	));
	
	$wp_customize->add_setting('prayer_lite_show_social_sections',array(
		'default' => false,
		'sanitize_callback' => 'prayer_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'prayer_lite_show_social_sections', array(
	   'settings' => 'prayer_lite_show_social_sections',
	   'section'   => 'prayer_lite_social_sections',
	   'label'     => __('Check To show This Section','prayer-lite'),
	   'type'      => 'checkbox'
	 ));//Show Header and Footer Social icons area
		 
}
add_action( 'customize_register', 'prayer_lite_customize_register' );

function prayer_lite_custom_css(){ 
?>
	<style type="text/css"> 					
        a, .recentpost_mystyle h2 a:hover,
        #sidebar ul li a:hover,						
        .recentpost_mystyle h3 a:hover, 
		.site-navigation .menu a:hover,
		.site-navigation .menu a:focus,
		.site-navigation ul li a:hover, 
		.site-navigation ul li.current_page_item a, 
		.site-navigation ul li.current_page_item ul li a:hover,
		.site-navigation ul li.current-menu-parent a, 
		.site-navigation ul li:hover,
		.site-navigation .menu ul a:hover,
		.site-navigation .menu ul a:focus,
		.site-navigation ul li.current_page_item ul.sub-menu li a:hover, 
		.site-navigation ul li.current-menu-parent ul.sub-menu li a:hover,
		.site-navigation ul li.current-menu-parent ul.sub-menu li ul.sub-menu li a:hover,
		.site-navigation ul li.current-menu-parent ul.sub-menu li.current_page_item a,
		.nivo-caption .slide_morebtn:hover,      						
        .postmeta a:hover,			
        .button:hover,
		.site-footer ul li::before,
		.ftr_social_icons a:hover,			
		.blog_postmeta a:hover,
		.wel2column h4 a:hover,
		.site-footer ul li a:hover, 
		.site-footer ul li.current_page_item a		
            { color:<?php echo get_theme_mod('prayer_lite_site_color_codes','#e96300'); ?>;}					 
            
        .pagination ul li .current, .pagination ul li a:hover, 
        #commentform input#submit:hover,		
        .nivo-controlNav a.active,
		.sd-search input, .sd-top-bar-nav .sd-search input,			
		a.blogreadmore,
		.pp_topstrip,
		.fourcolbx:hover,
		.learnmore,
		.toggled .menu-toggle,
		.copyrigh-wrapper:before,
		.infobox a.get_an_enquiry:hover,
		.welcome_contentwrap .btnstyle1,													
        #sidebar .search-form input.search-submit,				
        .wpcf7 input[type='submit'],				
        nav.pagination .page-numbers.current,		
		.blogpostmorebtn:hover,		
		.navigation_bar:after,		
        .toggle a	
            { background-color:<?php echo get_theme_mod('prayer_lite_site_color_codes','#e96300'); ?>;}
			
		
		.tagcloud a:hover,
		.nivo-caption .slide_morebtn:hover,		
		.hdr_social a:hover,
		.site-footer h5::before,
		.site-footer h5::after,		
		.welcome_contentwrap p,
		h3.widget-title::after,		
		blockquote	        
            { border-color:<?php echo get_theme_mod('prayer_lite_site_color_codes','#e96300'); ?>;}			
	
			
         	
    </style> 
<?php                                                       
}
         
add_action('wp_head','prayer_lite_custom_css');	 

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function prayer_lite_customize_preview_js() {
	wp_enqueue_script( 'prayer_lite_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '19062019', true );
}
add_action( 'customize_preview_init', 'prayer_lite_customize_preview_js' );