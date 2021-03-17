<?php
/**
 * Prayer Lite About Theme
 *
 * @package Prayer Lite
 */

//about theme info
add_action( 'admin_menu', 'prayer_lite_abouttheme' );
function prayer_lite_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'prayer-lite'), __('About Theme Info', 'prayer-lite'), 'edit_theme_options', 'prayer_lite_guide', 'prayer_lite_mostrar_guide');   
} 

//Info of the theme
function prayer_lite_mostrar_guide() { 	
?>
<div class="wrap-GT">
	<div class="gt-left">
   		   <div class="heading-gt">
			  <h3><?php esc_html_e('About Theme Info', 'prayer-lite'); ?></h3>
		   </div>
          <p><?php esc_html_e('Prayer Lite is an impressive charity WordPress theme with a clean, modern and creative design. It is an attractive and fully responsive theme specially designed for churches, charity organizations and other kinds of religious websites. This multi-functional and highly adaptive theme can also be used for non-profit organizations, political organizations, foundations, social causes, ministry, donation, fundraiser, event and other related organization.', 'prayer-lite'); ?></p>
<div class="heading-gt"> <?php esc_html_e('Theme Features', 'prayer-lite'); ?></div>
 

<div class="col-2">
  <h4><?php esc_html_e('Theme Customizer', 'prayer-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'prayer-lite'); ?></div>
</div>

<div class="col-2">
  <h4><?php esc_html_e('Responsive Ready', 'prayer-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'prayer-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('Cross Browser Compatible', 'prayer-lite'); ?></h4>
<div class="description"><?php esc_html_e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'prayer-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('E-commerce', 'prayer-lite'); ?></h4>
<div class="description"><?php esc_html_e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'prayer-lite'); ?></div>
</div>
<hr />  
</div><!-- .gt-left -->
	
<div class="gt-right">    
     <a href="http://www.gracethemesdemo.com/prayer/" target="_blank"><?php esc_html_e('Live Demo', 'prayer-lite'); ?></a> | 
    <a href="http://www.gracethemesdemo.com/documentation/prayer/#homepage-lite" target="_blank"><?php esc_html_e('Documentation', 'prayer-lite'); ?></a>    
</div><!-- .gt-right-->
<div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>