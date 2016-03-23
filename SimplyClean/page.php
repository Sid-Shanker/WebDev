<?php get_header()?>

<section id="main-container" class="main-container">
	<section class="main-content">
	<?php do_action( 'main_top' ); ?>
	<?php if (have_posts()):while(have_posts()):the_post(); ?>
	<article>
		<div class="post-container">		
        	<div class="post-header">
            	<!-- <h1><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h1> -->
            	<h1><?php the_title();?></h1>
                <small class="post-meta"><?php the_time('F jS, Y');?> by <?php the_author_posts_link(); ?></small>
            </div>
            <div class="post-content">
            	<?php the_content(); ?>
            	
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