<?php
/* template for displaying single post
 * 
 * @package SimplyClean
 */

get_header();?>

<section id="main-container" class="main-container">
	<section class="main-content">
	<?php do_action( 'main_top' ); ?>
	<article>
		<div class="post-container">		
        	<div class="post-header">
            	<h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'topcat-lite' ); ?></h1>
                
            </div>
            <div class="post-content">
            	<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'SimplyClean' ); ?></p>
            </div>
        </div>
    </article>
	
	
	</section>
	
	<?php do_action( 'main_bottom' ); ?>
	<aside>
		<?php get_sidebar();?>
	</aside>
	
</section><!-- Section main-container ends -->

 <?php //get_sidebar( 'primary' ); ?>
<div class="clear"></div>

<?php get_footer()?>