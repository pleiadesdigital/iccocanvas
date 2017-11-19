<?php /* Template part for displaying page content in APRENDIZAJES */ ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('page-medios'); ?>>
	<header class="entry-header">
		<div class="entry-header-wrap">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			<h2 class="entry-subtitle"><?php echo get_post_meta($post->ID, 'project_subtitle', true); ?></h2>
		</div><!-- class="entry-header-wrap" -->
	</header><!-- .entry-header -->

	<!-- MAIN CONTENT -->
	<section class="entry-content main-content">
		<div class="entry-content-wrap">
			<h2 class="main-content-title"><?php echo get_post_meta($post->ID, 'main-content-title', true); ?></h2>
			<div class="columntxt">
				<?php the_content(); ?>
			</div>
		</div><!-- class="entry-content-wrap" -->
	</section><!-- .entry-content .main-content -->

	<!-- IMAGE SOLID -->
	<div class="image-solid"></div>

	<!-- ESTUDIO DE CASOS -->
	<section class="entry-content estudio-de-casos">
		<div class="estudio-de-casos-wrap">
			<h2 class="entry-title">Estudio de Casos</h2>
			<h3 class="entry-subtitle">Una serie de estrategias seguidas por distintos medios digitales a nivel global</h3>
			<ul class="case-boxes">
			<?php
				$args = array(
					'post_type'					=> 'post',
					'category_name'			=> 'estudio-de-casos',
					'order'						=> 'ASC',
				);
				$query = new WP_Query($args);
				if($query->have_posts()) : while($query->have_posts()): $query->the_post(); ?>
				<li>
					<a class="box-content" href="<?php the_permalink(); ?>">
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
					</a>

					<a href="<?php echo get_post_meta($post->ID, 'box-website', true) ?>" class="box-title" target="_blank">
						<span class="case-web"><?php echo get_post_meta($post->ID, 'box-website', true) ?></span>
					</a><!-- class="box-title" -->
				</li>
				<?php endwhile; endif; ?>
			</ul><!-- class="case-boxes" -->
		<?php wp_reset_postdata(); ?>
		</div><!-- class="estudio-de-casos-wrap" -->
	</section><!-- class="entry-content estudio-de-casos" -->

	<!-- Logos de empresas -->
	<section class="entry-content logos-partners">
		<div class="logos-partners-wrap">
			<h2 class="entry-title">Socios Estratégicos</h2>
			<h3 class="entry-subtitle">Todo este proyecto se hace posible con la ayuda y participación de las siguientes organizaciones y empresas</h3>
			<ul class="logo-boxes">
			<?php
				$args = array(
					'post_type'					=> 'post',
					'category_name'			=> 'logos-partners',
					'orderby'						=> 'date',
					// 'posts_per_page'		=> 2,
				);
				$query = new WP_Query($args);
				// if($query->have_posts()) : while($query->have_posts()): $query->the_post(); ?>

				<?php //the_content(); ?>

					<li>
						<a href="http://memetic.media/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/media/logos/memeticmedia.png"></a>
					</li>
					<li>
						<a href="https://www.facebook.com/contagioradio/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/media/logos/contagioradio.png"></a>
					</li>
					<li>
						<a href="https://elfaro.net/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/media/logos/elfaro.jpg"></a>
					</li>
					<li>
						<a href="https://www.facebook.com/EnLatitud25/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/media/logos/enlatitud5.png"></a>
					</li>
					<li>
						<a href="https://lapublica.org.bo/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/media/logos/lapublica.png"></a>
					</li>
					<li>
						<a href="http://lasillavacia.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/media/logos/lasillavacia.png"></a>
					</li>
					<li>
						<a href="https://www.facebook.com/picatv/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/media/logos/picatv.jpg"></a>
					</li>

				</ul><!-- class="logo-boxes" -->

		<?php //endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>

		</div><!-- class="logos-partners-wrap" -->
	</section><!-- class="entry-content logos-partners" -->



</div><!-- #post-## -->



