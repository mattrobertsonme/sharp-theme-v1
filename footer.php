	<!-- Call to Action Begin -->	
	<?php if ( get_theme_mod( 'cta_text' ) ) : ?>
		<section class="call-to-action">
    		<div class="container">
                    <p><?php echo get_theme_mod('cta_text'); ?>
    			<button><a href="<?php echo get_theme_mod('cta_link'); ?>"></a><?php echo get_theme_mod('cta_button'); ?></button></p>
                
    		</div>
    	</section>
    	<?php endif; ?>
    	<!-- Call to Action End -->
    	
    	<!-- Image Well Begin -->	
		<aside>
            <?php if ( get_theme_mod( 'well_1' ) ) : ?>
                <div class="post-media" style="background-image: url(<?php echo get_theme_mod( 'well_1' ); ?>)"></div>
                <div class="post-media" style="background-image: url(<?php echo get_theme_mod( 'well_2' ); ?>)"></div>
                <div class="post-media" style="background-image: url(<?php echo get_theme_mod( 'well_3' ); ?>)"></div>
                <div class="post-media" style="background-image: url(<?php echo get_theme_mod( 'well_4' ); ?>)"></div>
                <div class="post-media" style="background-image: url(<?php echo get_theme_mod( 'well_5' ); ?>)"></div>
                <div class="post-media" style="background-image: url(<?php echo get_theme_mod( 'well_6' ); ?>)"></div>
            <?php endif; ?>
		</aside>
        <!-- Image Well End -->
        
        <footer>
            <div class="footer-text">
               <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></p> 
            </div>
            
            <div class="footer-social">
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
        </footer>

        <script>
			$(function() {
		  $('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html, body').animate({
				  scrollTop: target.offset().top
				}, 1000);
				return false;
			  }
			}
		  });
		});
		</script>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	</body>
</html>
