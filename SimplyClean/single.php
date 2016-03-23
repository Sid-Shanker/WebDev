<?php
/* template for displaying single post
 * 
 * @package chaka
 */

get_header();?>

<section id="main-container" class="main-container">
	<section class="main-content">
	<?php do_action( 'main_top' ); ?>
	<?php while(have_posts()):the_post(); ?>
	
	<?php get_template_part( 'content', 'single' ); ?>
	
	<?php
		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	?>
	
	<?php endwhile; // end of the loop. ?>
	
	</section>
	
	<?php do_action( 'main_bottom' ); ?>
	<aside>
		<?php get_sidebar();?>
	</aside>
	
</section><!-- Section main-container ends -->

 <?php //get_sidebar( 'primary' ); ?>
<div class="clear"></div>

<?php get_footer()?>