<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="col-xs-4">
	<article class="post post-image-background" id="post-<?php the_ID(); ?>" <?php post_class(); ?>
    <?php if ( has_post_thumbnail()) : ?>
        <?php if ( $thumbnail_id = get_post_thumbnail_id() ) {if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) ) printf( ' style="background-image: url(%s);"', $image_src[0] );  } ?>><?php endif; ?>
        
        <div class="post-header">
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        </div>
		
		

	</article>
	</div>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
