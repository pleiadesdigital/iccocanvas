<?php /* The Main Header for Pleiades Moon */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
	<!-- HEAD -->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<!-- BODY -->
	<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'pleiadesmoon'); ?></a>
		<!-- HEADER -->
		<header id="masthead" class="site-header" role="banner">
			<?php get_template_part('template-parts/header/header', 'image'); ?>
			<?php if (has_nav_menu('top')) : ?>
				<div class="navigation-top">
					<div class="wrap">
						<?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
					</div><!-- .wrap -->
				</div><!-- .navigation-top -->
			<?php endif; ?>
		</header><!-- #masthead -->

		<div class="site-content-contain">
			<div id="content" class="site-content">
