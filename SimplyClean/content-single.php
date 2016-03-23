<?php
/**
 * @package SimplyClean
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-container">		
        <div class="post-header">
            <h1><?php the_title();?></h1>
               <small class="post-meta"><?php the_time('F jS, Y');?> by <?php the_author_posts_link(); ?></small>
        </div>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
        <div class="post-down-meta">
           <p class="post-categories"><span>Published in </span><?php the_category( ', ' ); ?></p>
<!--                <nav class="further-reading"> -->
<!--                    <div class="previous"> -->
<!--                        <span>No Older Posts</span> -->
<!--                        <a href="http://siddharthshanker.com">Return to Blog</a> -->
<!--                    </div> -->
<!--                    <div class="next"> -->
<!--                        <span>No Newer Posts</span> -->
<!--                        <a href="http://siddharthshanker.com">Return to Blog</a> -->
<!--                    </div> -->
<!--                </nav> -->
           <?php get_template_part('content','nav');?>
       </div>
    </div>
</article>