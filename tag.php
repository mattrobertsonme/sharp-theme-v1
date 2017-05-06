<?php get_header(); ?>
    
	<!-- Main Begin -->
    <section class="main">
        <div class="container">
		    <div class="row">
                <div class="col-xs-9">
                    <div class="col-xs-12">		
					    <article class="taxonomy-title">							
							<h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>
						</article>
					</div>
					
			        <?php get_template_part('loop'); ?><?php get_template_part('pagination'); ?>
                </div>
                
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <!-- Main Ends -->
    
<?php get_footer(); ?>
