<?php get_header()?>

<section id="main-container" class="main-container">
	<section class="main-content">
	<?php do_action( 'main_top' ); ?>
	<div class="search-hd"><h1><?php printf( __( 'Search Results for: %s', 'SimplyClean' ), '<span>' . get_search_query() . '</span>' ); ?></h1></div>
	<?php if (have_posts()):while(have_posts()):the_post(); ?>
	<article>
		<div class="post-container">		
        	<div class="post-header">
            	<h1><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h1>
                <small class="post-meta"><?php the_time('F jS, Y');?> by <?php the_author_posts_link(); ?></small>
            </div>
            <div class="post-content">
            	<?php //the_content(); ?>
            	<?php the_excerpt(); ?>
            	<p><?php echo '<a class="more-link" href="' . get_permalink() . '" title="' . __( 'Read More ', 'topcat-lite' ) . get_the_title() . '" >Read More...&nbsp;&nbsp;</a>'; ?></p>
            </div>
        </div>
    </article>
    <?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</section>
	
	<?php do_action( 'main_bottom' ); ?>
	<!-- <aside>  -->
		<?php //get_sidebar( 'primary' );?>
	<!-- </aside>  -->
	<?php get_sidebar(  );?>
	
</section><!-- Section main-container ends -->

 <?php //get_sidebar( 'primary' ); ?>
<div class="clear"></div>
<?php get_footer()?>