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

	<!-- VIDEO JUANITA LEÓN -->
	<section class="entry-content video-content">
		<div class="video-content-wrap">
			<?php
			$args = array(
				'post_type'					=> 'post',
				'category_name'			=> 'video-aprendizajes',
				'orderby'						=> 'date',
				'posts_per_page'		=> 2,
			);
			$query = new WP_Query($args);
			if($query->have_posts()) : while($query->have_posts()): $query->the_post(); ?>
			<!-- VIDEO META -->
			<div class="video-meta">
				<h2 class="entry-subtitle"><?php echo get_post_meta($post->ID, 'project_subtitle', true); ?></h2>
				<?php the_content(); ?>
			</div>
			<!-- VIDEO -->
			<div class="the-video">
				<?php echo get_post_meta($post->ID, 'feat-video', true); ?>
			</div><!-- class="the-video" -->

		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
		</div><!-- class="entry-content-wrap" -->
	</section><!-- class="entry-content more-content1" -->

	<!-- FUCK UP NIGHTS -->

	<section class="entry-content fun-content">

		<!-- CONTEXT -->
		<div class="fun-context">
			<div class="fun-context-wrap">
			<?php
			$args = array(
				'post_type'				=> 'post',
				'category_name'		=> 'fun-context',
				'orderby'					=> 'date',
				'posts_per_page'	=> 1,
				'post_status'			=> 'publish',
			);
			$query = new WP_Query($args);
			if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
			?>
			<!-- Title & Subtitle -->
			<?php the_title('<h2>', '</h2>'); ?>
			<h3><?php echo get_post_meta($post->ID, 'project_subtitle', true); ?></h3>

			<!-- FUN Content -->
			<div class="columntxt">
				<?php the_content(); ?>
			</div><!-- class="columntxt" -->

			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>

			</div><!-- class="funights-context-wrap" -->
		</div><!-- class="fun-context" -->

		<!-- EVENTS -->

		<div class="fun-events">
			<div class="fun-events-wrap">
			<?php
			$args = array(
				'post_type'				=> 'post',
				'category_name'		=> 'fun-events',
				'orderby'					=> 'date',
				'posts_per_page'	=> 2,
				'post_status'			=> 'publish',
			);
			$query = new WP_Query($args);
			if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
			?>

			<div class="event-row">
				<?php the_title('<h2>', '</h2>'); ?>
				<?php the_excerpt(); ?>
				<?php the_content(); ?>
				<div class="event-video"><?php echo get_post_meta($post->ID, 'feat-video', true); ?></div><!-- class="event-video" -->
			</div><!-- class="event-row" -->

			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>

			</div><!-- class="fun-events-wrap"> -->
		</div><!-- class="fun-events" -->

	</section><!-- class="entry-content funights-content1" -->

</div><!-- #post-## -->


























