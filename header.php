<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
	    <!-- Title -->
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' -'; } ?> <?php bloginfo('name'); ?></title>
        
        <!-- Favicons -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        
        <!-- Meta -->
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- Bootstrap Minified CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		
		<!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        
        <?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
    </head>
	
	<body <?php body_class(); ?> id="<?php echo get_theme_mod('sharp_theme_style'); ?>" style="background-image: url(<?php echo get_theme_mod('background_image'); ?>)">
        
        <?php if ( is_front_page() && is_home() ): ?>
        <!-- Hero Begin -->
		<div class="hero hero-full" style="background-image: url(<?php echo get_theme_mod( 'hero_image' ); ?>)">
			<div class="hero-header">
                <?php if ( get_theme_mod( 'social_facebook' ) ) : ?>
                    <a title="Facebook" href="<?php echo get_theme_mod( 'social_facebook' ); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <?php endif; ?>
                
                <?php if ( get_theme_mod( 'social_twitter' ) ) : ?>
                    <a title="Twitter" href="<?php echo get_theme_mod( 'social_twitter' ); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <?php endif; ?>
                
                <?php if ( get_theme_mod( 'social_youtube' ) ) : ?>
                    <a title="YouTube" href="<?php echo get_theme_mod( 'social_youtube' ); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                <?php endif; ?>
                
                <?php if ( get_theme_mod( 'social_instagram' ) ) : ?>
                    <a title="Instagram" ref="<?php echo get_theme_mod( 'social_instagram' ); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <?php endif; ?>
                
                <?php if ( get_theme_mod( 'social_linkedin' ) ) : ?>
                    <a title="LinkedIn" href="<?php echo get_theme_mod( 'social_linkedin' ); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <?php endif; ?>
			</div>
			
			<div class="hero-body">
			<?php if ( get_theme_mod( 'hero_text' ) ) : ?><p><?php echo get_theme_mod( 'hero_text' ); ?></p><?php endif; ?>
				<div class="logo"><?php bloginfo('name'); ?></div>
			</div>
			
			<div class="hero-footer">
				<div class="bounce">
				    <a href="#top"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
		<!-- Hero End -->
        
        <?php elseif (is_page('services') ): ?><?php else: ?><?php endif ?>
        
        <!-- Header Begin -->
		<header id="top">	
			<div class="logo">
                <!-- Logo Image -->
                <?php if ( get_theme_mod( 'your_theme_logo' ) ) : ?>
                <a href="<?php echo home_url(); ?>" class="header-logo-image">
                    <img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
                </a>
                
                <!-- Logo Text -->
                <?php else : ?>
                <a href="<?php echo home_url(); ?>" class="header-logo-text">
                    <?php bloginfo( 'name' ); ?>
                </a>
                
                <?php endif; ?>
            </div>
			
			<nav>
				<?php html5blank_nav(); ?>
			</nav>
		</header>
		<!-- Header End -->	