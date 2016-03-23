<nav class="further-reading">
	
	<div class="previous">
	<?php $p_text = get_adjacent_post(false,'',true);
	 if($p_text){ ?>
		<span>Previous Post</span>
		<a href="<?php get_permalink( $p_text ); ?>"><?php get_the_title( $p_text ); ?></a>
	 <?php } else{?>
			<span>No Older Posts</span> <a href="<?php echo esc_url( home_url( '/' ) );?>">Return
			to Blog</a>
	<?php }?>		
	</div>
	<div class="next">
	<?php $n_text = get_adjacent_post(false,'',false);
	 if($p_text){ ?>
		<span>Next Post</span>
		<a href="<?php get_permalink( $n_text ); ?>"><?php get_the_title( $n_text ); ?></a>
	 <?php } else{?>
			<span>No Newer Posts</span> <a href="<?php echo esc_url( home_url( '/' ) );?>">Return
			to Blog</a>
	<?php }?>
	</div>
</nav>