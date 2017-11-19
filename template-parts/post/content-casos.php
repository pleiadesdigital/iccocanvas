<?php /* Template part for displaying 'estudio de casos' */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('estudio-de-casos'); ?>>
	<?php
		if (is_sticky() && is_home()) :
			echo pleiadesmoon_get_svg(array('icon' => 'thumb-tack'));
		endif;
	?>
	<header class="entry-header">
		<h3>Casos de estudio</h3>
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</header><!-- .entry-header -->

	<?php if ('' !== get_the_post_thumbnail() && !is_single()) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('pleiadesmoon-featured-image'); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content(sprintf(
				__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'pleiadesmoon'),
				get_the_title()
			));

			wp_link_pages(array(
				'before'      => '<div class="page-links">' . __('Pages:', 'pleiadesmoon'),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			));
		?>
	</div><!-- .entry-content -->

	<?php if (is_single()) : ?>
		<?php //pleiadesmoon_entry_footer(); ?>
	<?php endif; ?>

</article><!-- #post-## -->
