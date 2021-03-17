<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Prayer Lite
 */

get_header(); ?>

<div class="container">
     <div id="gp_content_box">
        <div class="default_content_alignbx">
            <div class="my_blogpost_layout">
				<?php if ( have_posts() ) : ?>
                    <header>
                        <h1 class="entry-title"><?php /* translators: %s: search term */ 
						printf( esc_html__( 'Search Results for: %s', 'prayer-lite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    </header>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'search' ); ?>
                    <?php endwhile; ?>
                    <?php the_posts_pagination(); ?>
                <?php else : ?>
                    <?php get_template_part( 'no-results' ); ?>
                <?php endif; ?>                  
            </div><!-- my_blogpost_layout -->
        </div> <!-- .default_content_alignbx-->        
       <?php get_sidebar();?>       
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- container -->

<?php get_footer(); ?>