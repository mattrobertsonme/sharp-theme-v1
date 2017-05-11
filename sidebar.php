<div class="col-xs-12 col-md-3 sidebar">    
    <div class="row">
	    <div class="col-xs-12">
            <div class="widget">
                <div class="widget-header">About Me</div>
                
                <div class="widget-media" style="background-image: url(<?php echo get_theme_mod( 'about_image' ); ?>)"></div>
                
                <div class="widget-body">
                    <h3><?php bloginfo( 'name' ); ?></h3>
                    <p><?php echo get_theme_mod('textarea_field_id'); ?></p>	
				</div>
			</div>            
            
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
            
            <div class="widget">
                <div class="widget-header">Follow Me</div>
                
                <div class="widget-body">
                    <?php if ( get_theme_mod( 'social_facebook' ) ) : ?>
                        <a href="<?php echo get_theme_mod( 'social_facebook' ); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <?php endif; ?>
                   
                    <?php if ( get_theme_mod( 'social_twitter' ) ) : ?>
                        <a href="<?php echo get_theme_mod( 'social_twitter' ); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <?php endif; ?>
                    
                    <?php if ( get_theme_mod( 'social_youtube' ) ) : ?>
                        <a href="<?php echo get_theme_mod( 'social_youtube' ); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    <?php endif; ?>
                    
                    <?php if ( get_theme_mod( 'social_instagram' ) ) : ?>
                        <a href="<?php echo get_theme_mod( 'social_instagram' ); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <?php endif; ?>
                    
                    <?php if ( get_theme_mod( 'social_linkedin' ) ) : ?>
                        <a href="<?php echo get_theme_mod( 'social_linkedin' ); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="widget">
                <div class="widget-header">Popular Posts</div>
                <?php query_posts( array('posts_per_page'=> 3,'post__in' => get_option( 'sticky_posts' ), 'ignore_sticky_posts' => 1) ); ?>
				<?php get_template_part('loop', '3'); ?>
                <?php wp_reset_query(); ?>
            </div>
	    </div>
        
        <!--<div class="col-xs-12">
            <div class="widget">
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
            </div>
        </div>-->
    </div>
</div>
