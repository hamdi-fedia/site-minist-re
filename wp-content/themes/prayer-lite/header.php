<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Prayer Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}
?>
<a class="skip-link screen-reader-text" href="#gp_content_box">
<?php esc_html_e( 'Skip to content', 'prayer-lite' ); ?>
</a>
<?php
$prayer_lite_show_top_contact_bar 	  = get_theme_mod('prayer_lite_show_top_contact_bar', false );
$prayer_lite_show_social_sections     = get_theme_mod('prayer_lite_show_social_sections', false ); 
$prayer_lite_show_homeslider_portion  = get_theme_mod('prayer_lite_show_homeslider_portion', false );
$prayer_lite_show_fourpage_box_area   = get_theme_mod('prayer_lite_show_fourpage_box_area', false );
$prayer_lite_show_welcome_area	      = get_theme_mod('prayer_lite_show_welcome_area', false );
?>
<div id="sitelayout" <?php if( get_theme_mod( 'prayer_lite_site_layout_options' ) ) { echo 'class="boxlayout"'; } ?>>
<?php
if ( is_front_page() && !is_home() ) {
	if( !empty($prayer_lite_show_homeslider_portion)) {
	 	$inner_cls = '';
	}
	else {
		$inner_cls = 'siteinner';
	}
}
else {
$inner_cls = 'siteinner';
}
?>

<div class="site-header <?php echo esc_attr($inner_cls); ?> "> 
 
 <?php if( $prayer_lite_show_top_contact_bar != ''){ ?> 
  <div class="pp_topstrip">
       <div class="container">
            <div class="left">               
			
              <?php $prayer_lite_top_contact_no = get_theme_mod('prayer_lite_top_contact_no');
               if( !empty($prayer_lite_top_contact_no) ){ ?>              
                 <div class="infobox">
                     <i class="fas fa-phone-volume"></i>               
                     <span><?php echo esc_html($prayer_lite_top_contact_no); ?></span>   
                 </div>       
             <?php } ?> 
             
             <?php 
            $email = get_theme_mod('prayer_lite_top_email_options');
               if( !empty($email) ){ ?>                
                 <div class="infobox">
                     <i class="fas fa-envelope-open-text"></i>
                     <span>			      
                       <a href="<?php echo esc_url('mailto:'.sanitize_email($email)); ?>"><?php echo sanitize_email($email); ?></a>
                    </span> 
                </div>            
             <?php } ?>   
            
            </div>
            
            <div class="right">            
            <?php if( $prayer_lite_show_social_sections != ''){ ?>
              
                    <div class="hdr_social">                                                
					   <?php $prayer_lite_facebook_link = get_theme_mod('prayer_lite_facebook_link');
                        if( !empty($prayer_lite_facebook_link) ){ ?>
                        <a title="<?php esc_html_e('Facebook','prayer-lite'); ?>" class="fab fa-facebook-f" target="_blank" href="<?php echo esc_url($prayer_lite_facebook_link); ?>"></a>
                       <?php } ?>
                    
                       <?php $prayer_lite_twitter_link = get_theme_mod('prayer_lite_twitter_link');
                        if( !empty($prayer_lite_twitter_link) ){ ?>
                        <a title="<?php esc_html_e('Twitter','prayer-lite'); ?>" class="fab fa-twitter" target="_blank" href="<?php echo esc_url($prayer_lite_twitter_link); ?>"></a>
                       <?php } ?>
                
                      <?php $prayer_lite_googleplus_link = get_theme_mod('prayer_lite_googleplus_link');
                        if( !empty($prayer_lite_googleplus_link) ){ ?>
                        <a title="<?php esc_html_e('google-plus','prayer-lite'); ?>" class="fab fa-google-plus" target="_blank" href="<?php echo esc_url($prayer_lite_googleplus_link); ?>"></a>
                      <?php }?>
                
                      <?php $prayer_lite_linkedin_link = get_theme_mod('prayer_lite_linkedin_link');
                        if( !empty($prayer_lite_linkedin_link) ){ ?>
                        <a title="<?php esc_html_e('linkedin','prayer-lite'); ?>" class="fab fa-linkedin" target="_blank" href="<?php echo esc_url($prayer_lite_linkedin_link); ?>"></a>
                      <?php } ?> 
                      
                      <?php $prayer_lite_instagram_link = get_theme_mod('prayer_lite_instagram_link');
                        if( !empty($prayer_lite_instagram_link) ){ ?>
                        <a title="<?php esc_html_e('instagram','prayer-lite'); ?>" class="fab fa-instagram" target="_blank" href="<?php echo esc_url($prayer_lite_instagram_link); ?>"></a>
                      <?php } ?> 
                                       
                   </div><!--end .hdr_social-->                 
             <?php } ?>   
            
            </div>
            <div class="clear"></div>
        </div><!-- .container-->
  </div><!-- .pp_topstrip-->
  <?php } ?> 
    
  <div class="container ppmenubg">      
      <div class="logo">
           <?php prayer_lite_the_custom_logo(); ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p><?php echo $description; ?></p>               
            <?php endif; ?>
      </div><!-- logo -->
   
    <div class="rightnav_area">        
        
    <div id="topnavigator" role="banner">
		<button class="menu-toggle" aria-controls="main-navigation" aria-expanded="false" type="button">
			<span aria-hidden="true"><?php esc_html_e( 'Menu', 'prayer-lite' ); ?></span>
			<span class="dashicons" aria-hidden="true"></span>
		</button>

		<nav id="main-navigation" class="site-navigation primary-navigation" role="navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container' => 'ul',
				'menu_id' => 'primary',
				'menu_class' => 'primary-menu menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</div><!-- #topnavigator -->
         
         
      <div class="clear"></div> 
   </div>

     

  <div class="clear"></div>     
  </div><!-- .container --> 
  

  
</div><!--.site-header --> 
 
<?php 
if ( is_front_page() && !is_home() ) {
if($prayer_lite_show_homeslider_portion != '') {
	for($i=1; $i<=3; $i++) {
	  if( get_theme_mod('prayer_lite_homeslider_page'.$i,false)) {
		$slider_Arr[] = absint( get_theme_mod('prayer_lite_homeslider_page'.$i,true));
	  }
	}
?> 
<div class="slider_wrapper">  
              
<?php if(!empty($slider_Arr)){ ?>
<div id="slider" class="nivoSlider">
<?php 
$i=1;
$slidequery = new WP_Query( array( 'post_type' => 'page', 'post__in' => $slider_Arr, 'orderby' => 'post__in' ) );
while( $slidequery->have_posts() ) : $slidequery->the_post();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
?>
<?php if(!empty($image)){ ?>
<img src="<?php echo esc_url( $image ); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php }else{ ?>
<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider-default.jpg" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php } ?>
<?php $i++; endwhile; ?>
</div>   

<?php 
$j=1;
$slidequery->rewind_posts();
while( $slidequery->have_posts() ) : $slidequery->the_post(); ?>                 
    <div id="slidecaption<?php echo esc_attr( $j ); ?>" class="nivo-html-caption">         
    	<h2><?php the_title(); ?></h2>
    	<?php the_excerpt(); ?>
		<?php
        $prayer_lite_homeslider_readmore_text = get_theme_mod('prayer_lite_homeslider_readmore_text');
        if( !empty($prayer_lite_homeslider_readmore_text) ){ ?>
            <a class="slide_morebtn" href="<?php the_permalink(); ?>"><?php echo esc_html($prayer_lite_homeslider_readmore_text); ?></a>
        <?php } ?>                  
    </div>   
<?php $j++; 
endwhile;
wp_reset_postdata(); ?>   
<?php } ?>
 <div class="slidebottom"></div> 
 </div><!-- .slider_wrapper -->    
<?php } } ?>

   
        
<?php if ( is_front_page() && ! is_home() ) { ?>
<section id="pagearea">
  <div class="container"> 
  <?php if( $prayer_lite_show_welcome_area != ''){ ?>         
        <div class="pagebox_left">
        <?php 
            if( get_theme_mod('prayer_lite_page_for_welcome_area',false)) {     
            $queryvar = new WP_Query('page_id='.absint(get_theme_mod('prayer_lite_page_for_welcome_area',true)) );			
                while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>  		
                   <?php if(has_post_thumbnail() ) { ?>
                        <div class="welcome_imgbox"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>        
                   <?php } ?>           
                  <h3><?php the_title(); ?></h3>   
                 <?php the_content(); ?>
                 <a class="learnmore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','prayer-lite'); ?></a>      	                                    
                <?php endwhile;
                 wp_reset_postdata(); ?>                                    
          <?php } ?>  
        </div><!-- .pagebox_left -->  
   <?php } ?>



	<?php if( $prayer_lite_show_fourpage_box_area != ''){ ?>  
          <div class="pagebox_right">            
               <?php 
                for($n=1; $n<=4; $n++) {    
                if( get_theme_mod('prayer_lite_fourpage_box'.$n,false)) {      
                    $queryvar = new WP_Query('page_id='.absint(get_theme_mod('prayer_lite_fourpage_box'.$n,true)) );		
                    while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>     
                    <div class="fourcolbx <?php if($n % 2 == 0) { echo "last_column"; } ?>">                                       
                        <?php if(has_post_thumbnail() ) { ?>
                        <div class="thumbbx"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>        
                        <?php } ?>
                        <div class="pagecontent">              	
                          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                                           
                        </div>                      
                    </div>
                    <?php endwhile;
                    wp_reset_postdata();                                  
                } } ?>                                 
            <div class="clear"></div>  
           </div><!-- .pagebox_right -->            
        <?php } ?>
      <div class="clear"></div>
    </div><!-- .container -->
</section><!-- #pagearea -->
<?php } ?>