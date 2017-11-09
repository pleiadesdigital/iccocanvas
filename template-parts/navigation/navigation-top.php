<?php /* Displays top navigation */ ?>

<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Top Menu', 'pleiadesmoon'); ?>">
  <!-- Menu Toggle (responsive) -->
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
    <?php echo pleiadesmoon_get_svg(array('icon' => 'bars')); echo pleiadesmoon_get_svg(array('icon' => 'close')); _e('Menu', 'pleiadesmoon'); ?>
  </button>
	<?php //wp_nav_menu(array('theme_location' => 'top', 'menu_id' => 'top-menu')); ?>
  <!-- arrow para ir al contenido -->
	<?php
	if ((pleiadesmoon_is_frontpage() || (is_home() && is_front_page())) && has_custom_header()) {
		wp_nav_menu(array('theme_location' => 'frontpage', 'menu_id' => 'top-menu')); ?>
			<a href="#content" class="menu-scroll-down"><?php echo pleiadesmoon_get_svg(array('icon' => 'arrow-right')); ?><span class="screen-reader-text"><?php _e('Scroll down to content', 'pleiadesmoon'); ?></span></a>
	<?php }
	else {
		wp_nav_menu(array('theme_location' => 'top', 'menu_id' => 'top-menu'));
	}
	?>
</nav><!-- #site-navigation -->
