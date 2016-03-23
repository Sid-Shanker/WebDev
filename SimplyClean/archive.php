<?php get_header()?>

<section id="main-container" class="main-container">
	<section class="main-content">
	<header class="post-header">
		<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
	</header><!-- .page-header -->
	<hr />
	<?php do_action( 'main_top' ); ?>
	<?php if (have_posts()):while(have_posts()):the_post(); ?>
	<?php do_action( 'archive_post_before' ); ?>
	<article>
		<div class="post-container">		
        	<div class="post-header">        		
				<h1><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h1>
            	<small class="post-meta"><?php the_time('F jS, Y');?> by <?php the_author_posts_link(); ?></small>
            	<!-- only check -->
            </div>
            <div class="post-content">
            	<?php //the_content(); ?>
            	<?php the_excerpt(); ?>
            	<p><?php echo '<a class="more-link" href="' . get_permalink() . '" title="' . __( 'Read More ', 'topcat-lite' ) . get_the_title() . '" >Read More...&nbsp;&nbsp;</a>'; ?></p>
            </div>
        </div>
    </article>
    <?php do_action( 'archive_post_after' ); ?>
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