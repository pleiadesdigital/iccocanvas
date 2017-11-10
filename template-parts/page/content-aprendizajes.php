<?php /* Template part for displaying page content in APRENDIZAJES */ ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('page-aprendizajes'); ?>>
	<header class="entry-header">
		<div class="entry-header-wrap">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			<h2 class="entry-subtitle"><?php echo get_post_meta($post->ID, 'project_subtitle', true); ?></h2>
		</div><!-- class="entry-header-wrap" -->
	</header><!-- .entry-header -->

	<!-- MAIN CONTENT -->
	<section class="entry-content main-content">
		<div class="imgfilter">
			<div class="entry-content-wrap">
				<div class="columntxt">
					<?php the_content(); ?>
				</div><!-- class="columntxt" -->
			</div><!-- class="entry-content-wrap" -->
		</div><!-- class="imgfilter" -->
	</section><!-- .entry-content .main-content -->

	<!-- MORE CONTENT 1 -->
	<?php
		$args = array(
			'post_type'					=> 'post',
			'category_name'			=> 'aprendizajes',
			'orderby'						=> 'date',
			'posts_per_page'		=> 2,
		);
		$query = new WP_Query($args);
	?>
	<?php if($query->have_posts()) : while($query->have_posts()): $query->the_post(); ?>

	<section class="entry-content video-content">
		<div class="video-content-wrap">
			<!-- VIDEO META -->
			<div class="video-meta">
				<h2 class="entry-subtitle"><?php echo get_post_meta($post->ID, 'project_subtitle', true); ?></h2>
				<?php the_excerpt(); ?>
			</div>
			<!-- VIDEO -->
			<div class="the-video">
				<?php the_content(); ?>
			</div><!-- class="the-video" -->
		</div><!-- class="entry-content-wrap" -->
	</section><!-- class="entry-content more-content1" -->

	<?php endwhile; endif; ?>
	<?php wp_reset_postdata(); ?>

</div><!-- #post-## -->



