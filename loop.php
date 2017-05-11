<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="col-xs-12 col-md-6">
	<article  class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <div class="post-header">
			<div class="category"><?php _e( '', 'html5blank' ); the_category(', ');?></div>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			
			<p class="date"><?php the_time('F j, Y'); ?></p>
			<p class="author"><?php _e( '', 'html5blank' ); ?> <?php the_author_posts_link(); ?></p>
			<p class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></p>
		</div>
		
		<?php if ( has_post_thumbnail()) : ?>
        <div class="post-media" <?php if ( $thumbnail_id = get_post_thumbnail_id() ) {if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) ) printf( ' style="background-image: url(%s);"', $image_src[0] );  } ?>></div><?php endif; ?>

		<div class="post-body">
		    <?php html5wp_excerpt('html5wp_index'); ?>
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
