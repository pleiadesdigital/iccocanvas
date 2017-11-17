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
					'orderby'						=> 'date',
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
						<h2>Quartz</h2>
						<span class="case-site">https://qz.com/</span>
						<p>Temas de economía mundial y negocios para ejecutivos. Foco en hacer atractiva la información, principalmente en móviles. Visualización de datos y creación/venta de herramientas de manejo de datos.
Modalidades controladas de extensión de los artículos. Atracción de anunciantes-marcas globales. Modalidades controladas de banners.
						</p>
					</li>

				</ul><!-- class="logo-boxes" -->

		<?php //endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>

		</div><!-- class="logos-partners-wrap" -->
	</section><!-- class="entry-content logos-partners" -->



</div><!-- #post-## -->



