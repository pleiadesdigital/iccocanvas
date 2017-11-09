<?php /* Template part for displaying page content in PROYECTO */ ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('page-proyecto'); ?>>
	<header class="entry-header">
		<div class="entry-header-wrap">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			<h2 class="entry-subtitle"><?php echo get_post_meta($post->ID, 'project_subtitle', true); ?></h2>
		</div><!-- class="entry-header-wrap" -->
	</header><!-- .entry-header -->

	<!-- MAIN CONTENT -->
	<section class="entry-content main-content">
		<div class="entry-content-wrap">
			<div class="columntxt">
				<?php the_content(); ?>
			</div>
		</div><!-- class="entry-content-wrap" -->
	</section><!-- .entry-content .main-content -->

	<div class="image-solid"></div>


	<!-- MORE CONTENT 1 -->
	<?php
		$args = array(
			'post_type'					=> 'post',
			'category_name'			=> 'proyecto',
			'orderby'						=> 'date',
			'posts_per_page'		=> 2,
		);
		$query = new WP_Query($args);
	?>
	<?php if($query->have_posts()) : while($query->have_posts()): $query->the_post(); ?>

	<section class="entry-content more-content">
		<div class="more-content-wrap">

				<?php the_content(); ?>

		</div><!-- class="entry-content-wrap" -->
	</section><!-- class="entry-content more-content1" -->

	<?php endwhile; endif; ?>
	<?php wp_reset_postdata(); ?>

</div><!-- #post-## -->



