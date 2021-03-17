<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Prayer Lite
 */

get_header(); ?>

<div class="container">
    <div id="gp_content_box">
        <div class="default_content_alignbx">
            <header class="page-header">
                <h1 class="entry-title"><?php esc_html_e( '404 Not Found', 'prayer-lite' ); ?></h1>                
            </header><!-- .page-header -->
            <div class="page-content">
                <p><?php esc_html_e( 'Looks like you have taken a wrong turn.....Dont worry... it happens to the best of us.', 'prayer-lite' ); ?></p>  
            </div><!-- .page-content -->
        </div><!-- default_content_alignbx-->   
        <?php get_sidebar();?>       
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>