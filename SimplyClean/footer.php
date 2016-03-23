

<footer class="site-footer" role="contentinfo">
	<?php do_action( 'footer_top' ); ?>
    <div class="copyright">
        <span>
            &copy; Copyright <?=date('Y')?>, <?php echo get_bloginfo('name')?> | Designed by Siddharth Shanker Mishra
        </span>
    </div>
</footer>

<?php do_action( 'body_bottom' ); ?>

<?php wp_footer(); ?>

</div><!-- div outer-main-container ends -->

</body>
</html>