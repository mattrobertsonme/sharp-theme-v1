<?php get_header(); ?>
    
	<!-- Main Begin -->
    <section class="main">
        <div class="container">
		    <div class="row">
                <div class="col-xs-9">
                    <div class="col-xs-12">		
					    <article class="taxonomy-title">							
							<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
						</article>
					</div>
					
			        <?php get_template_part('loop'); ?><?php get_template_part('pagination'); ?>
               
                <?php wp_reset_query(); ?>
                </div>
                
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <!-- Main Ends -->
    
<?php get_footer(); ?>

