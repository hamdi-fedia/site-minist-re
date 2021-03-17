<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Prayer Lite
 */
 
$prayer_lite_show_social_sections        =  get_theme_mod('prayer_lite_show_social_sections', false); 
?>

<div class="site-footer">
           <div class="container fixfooter">           
             <?php if( $prayer_lite_show_social_sections != ''){ ?>                         	
               
                    <div class="ftr_social_icons">                                                
					   <?php $prayer_lite_facebook_link = get_theme_mod('prayer_lite_facebook_link');
                        if( !empty($prayer_lite_facebook_link) ){ ?>
                        <a title="<?php esc_html_e('Facebook','prayer-lite'); ?>" class="fab fa-facebook-f" target="_blank" href="<?php echo esc_url($prayer_lite_facebook_link); ?>">
						<span><?php esc_html_e('Facebook','prayer-lite'); ?></span></a>
                       <?php } ?>
                    
                       <?php $prayer_lite_twitter_link = get_theme_mod('prayer_lite_twitter_link');
                        if( !empty($prayer_lite_twitter_link) ){ ?>
                        <a title="<?php esc_html_e('Twitter','prayer-lite'); ?>" class="fab fa-twitter odd" target="_blank" href="<?php echo esc_url($prayer_lite_twitter_link); ?>">
                        <span><?php esc_html_e('Twitter','prayer-lite'); ?></span></a>
                       <?php } ?>
                
                      <?php $prayer_lite_googleplus_link = get_theme_mod('prayer_lite_googleplus_link');
                        if( !empty($prayer_lite_googleplus_link) ){ ?>
                        <a title="<?php esc_html_e('Google Plus','prayer-lite'); ?>" class="fab fa-google-plus" target="_blank" href="<?php echo esc_url($prayer_lite_googleplus_link); ?>">
                        <span><?php esc_html_e('Google Plus','prayer-lite'); ?></span>
                        </a>
                      <?php }?>
                      
                      <?php $prayer_lite_linkedin_link = get_theme_mod('prayer_lite_linkedin_link');
                        if( !empty($prayer_lite_linkedin_link) ){ ?>
                        <a title="<?php esc_html_e('Linkedin','prayer-lite'); ?>" class="fab fa-linkedin odd" target="_blank" href="<?php echo esc_url($prayer_lite_linkedin_link); ?>">
                        <span><?php esc_html_e('Linkedin','prayer-lite'); ?></span></a>
                      <?php } ?> 
                      
                     <?php $prayer_lite_instagram_link = get_theme_mod('prayer_lite_instagram_link');
                        if( !empty($prayer_lite_instagram_link) ){ ?>
                        <a title="<?php esc_html_e('Instagram','prayer-lite'); ?>" class="fab fa-instagram" target="_blank" href="<?php echo esc_url($prayer_lite_instagram_link); ?>">
                        <span><?php esc_html_e('Instagram','prayer-lite'); ?></span></a>
                      <?php } ?>
                                        
                   </div><!--end .footer_social-->
               
             <?php } ?>   
           
                    
          <?php if ( is_active_sidebar( 'footer-widget-column-1' ) ) : ?>
                <div class="widget-column-1">  
                    <?php dynamic_sidebar( 'footer-widget-column-1' ); ?>
                </div>
           <?php endif; ?>
          
          <?php if ( is_active_sidebar( 'footer-widget-column-2' ) ) : ?>
                <div class="widget-column-2">  
                    <?php dynamic_sidebar( 'footer-widget-column-2' ); ?>
                </div>
           <?php endif; ?>
           
           <?php if ( is_active_sidebar( 'footer-widget-column-3' ) ) : ?>
                <div class="widget-column-3">  
                    <?php dynamic_sidebar( 'footer-widget-column-3' ); ?>
                </div>
           <?php endif; ?> 
           
           <?php if ( is_active_sidebar( 'footer-widget-column-4' ) ) : ?>
                <div class="widget-column-4">  
                    <?php dynamic_sidebar( 'footer-widget-column-4' ); ?>
                </div>
           <?php endif; ?>          
           
           <div class="clear"></div>
      </div><!--end .container-->            

        <div class="copyrigh-wrapper"> 
            <div class="container">
                <div class="powerby">
				   <?php bloginfo('name'); ?> - <?php esc_html_e('Theme by Grace Themes','prayer-lite'); ?>  
                </div>                               
             </div><!--end .container-->             
        </div><!--end .copyrigh-wrapper-->  
                             
     </div><!--end #site-footer-->
</div><!--#end sitelayout-->
<?php wp_footer(); ?>
</body>
</html>