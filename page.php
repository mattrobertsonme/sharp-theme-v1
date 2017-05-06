<?php get_header(); ?>
    
	<section class="main">
        <div class="container">
		    <div class="row">
				<div class="col-xs-9">
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>						
						<div class="post-header">
							<div class="category"><?php _e( '', 'html5blank' ); the_category(', '); ?></div>
							<h1><?php the_title(); ?></h1>
                        </div>
						
						<div class="post-media" <?php if ( has_post_thumbnail()) : ?><?php if ( $thumbnail_id = get_post_thumbnail_id() ) {if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) ) printf( ' style="background-image: url(%s);"', $image_src[0] );  } ?>><?php endif; ?>>
						    
				        </div>
				    	
				        <div class="post-body">
						   <?php the_content(); ?>
				        </div>
				    </article>
					
					<?php endwhile; ?><?php else: ?><article><h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1></article><?php endif; ?>
				</div>	
				
				<?php get_sidebar(); ?>		
            </div>
        </div>
	</section>
    
<?php get_footer(); ?>