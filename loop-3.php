<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="post-header">
			<div class="category"><?php _e( '', 'html5blank' ); the_category(', ');?></div>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			
			<p class="date"><?php the_time('F j, Y'); ?></p>
			<p class="author"><?php _e( '', 'html5blank' ); ?> <?php the_author_posts_link(); ?></p>
			<p class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( '0 Comments', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></p>
		</div>

<div class="widget-media"<?php if ( has_post_thumbnail()) : ?>
        <?php if ( $thumbnail_id = get_post_thumbnail_id() ) {if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) ) printf( ' style="background-image: url(%s);"', $image_src[0] );  } ?>><?php endif; ?></div>



<?php endwhile; ?><?php else: ?>
<?php endif; ?>
