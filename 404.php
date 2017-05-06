<?php get_header(); ?>

	<section id="post-404">
    <h2><?php _e( 'Page Not Found', 'html5blank' ); ?></h2>
				<p>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</p>
		</section>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
