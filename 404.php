<?php get_header(); ?>
    
    <!-- Main Begin -->
		<section class="main" id="post-404">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-9">
                        
    <h2><?php _e( 'Page Not Found', 'html5blank' ); ?></h2>
				<p>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</p>
				</div>
		<?php get_sidebar(); ?>
			</div>
            </div>
		</section>
    <!-- Main End -->	
    
<?php get_footer(); ?>