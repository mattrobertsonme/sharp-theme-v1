<?php get_header(); ?>
    
    <!-- Featured Begin -->
		<section id="featured" class="featured">
			<div class="container">				
				<div class="row">
                    <?php query_posts( array( 'post_type'  => 'post', 'posts_per_page' => 4, 'order' => ASC, 'post__in' => get_option('sticky_posts') ) ); ?>
				    <?php get_template_part('loop', '2'); ?>
                    <?php wp_reset_query(); ?>
				</div>
			</div>
		</section>
		
		<div class="section-divider-2"></div>		
		<!-- Featured End -->	
		
		<!-- Main Begin -->
		<section class="main">
			<div class="container">
				<div class="row">
					<div class="col-xs-9">	
					
					<div class="col-xs-12">		
						<article class="taxonomy-title">							
							<h1 class=""><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>	
						</article>
					</div>
                    
                    <?php get_template_part('loop'); ?>
					
					<div class="col-xs-12">
                        <?php get_template_part('pagination'); ?>
					</div>
					</div>
					
					<?php get_sidebar(); ?>
				</div>
			</div>
		</section>
    <!-- Main End -->	
    
<?php get_footer(); ?>
