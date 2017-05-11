<?php get_header(); ?>
    
    <section class="main">
        <div class="container">
		    <div class="row">
				<div class="col-xs-12 col-md-9">
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>						
						<div class="post-header">
							<div class="category"><?php _e( '', 'html5blank' ); the_category(', '); ?></div>
							<h1><?php the_title(); ?></h1>
							
							<p class="date"><?php the_time('F j, Y'); ?></p>
							<p class="author"><?php _e( '', 'html5blank' ); ?> <?php the_author_posts_link(); ?></p>
					        <p class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></p>
				        </div>
						
						<div class="post-media" <?php if ( has_post_thumbnail()) : ?><?php if ( $thumbnail_id = get_post_thumbnail_id() ) {if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) ) printf( ' style="background-image: url(%s);"', $image_src[0] );  } ?>><?php endif; ?>
						    
				        </div>
				    	
				        <div class="post-body">				            
				            <?php $format = get_post_format(); get_template_part( 'formats/format', $format ); // Open format.php or format-video.php?>
				            
						   <?php the_content(); ?>
				        </div>
                        
                        <?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); ?>
                        <?php comments_template(); ?>
				    </article>
					
					<?php endwhile; ?><?php else: ?><article><h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1></article><?php endif; ?>
				</div>	
				
				<?php get_sidebar(); ?>		
            </div>
        </div>
	</section>
    
<?php get_footer(); ?>
