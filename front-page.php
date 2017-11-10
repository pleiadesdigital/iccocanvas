<?php /* The front page template file */ ?>
<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div <?php post_class('pleiadesmoon-front-page'); ?> >
			<!-- testing the up button -->
			<button id="myBtn" title="Ir arriba"><?php echo pleiadesmoon_get_svg(array('icon' => 'arrow-right')); ?></button>

			<!-- EL PROYECTO -->
			<section id="project" class="fpsection">
			  <div class="fpwrap project-wrap">
			  	<?php
						$args = array(
							'post_type'			=> 'page',
							'pagename'			=> 'proyecto',
							'post_status'		=> 'publish',
						);
						$query = new WP_Query($args);
			  	?>
					<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
						<!-- IMAGE -->
						<div class="project-img-container">
							<figure class="project-img"></figure>
						</div><!-- class="project-img" -->
						<!-- TEXT -->
						<div class="project-text">
							<article class="project-text-items">
								<span class="intro-text">El Proyecto</span>
								<h1 class="section-title"><?php echo get_post_meta($post->ID, 'project_subtitle', true); ?></h1>
								<p class="section-desc"><?php echo get_the_excerpt(); ?></p>
								<div class="readmore-container">
									<a href="<?php the_permalink(); ?>" class="readmore-btn">Más información</a>
								</div>
							</article><!-- class="project-text-items" -->
						</div><!-- class="project-text" -->
					<?php endwhile; endif; ?>
			  </div><!-- class="project-wrap-wrap" -->
			  <?php wp_reset_postdata(); ?>
			</section><!-- id="project" -->

			<!-- LOS MEDIOS -->
			<section id="media" class="fpsection">
				<?php
					$args = array(
						'post_type'				=> 'page',
						'pagename' 				=> 'los-medios',
						'post_status'			=> 'publish'
					);
					$query = new WP_Query($args);
					if ($query->have_posts()): while ($query->have_posts()) : $query->the_post();
				?>
				<div class="fpimage background-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
				  <div class="fpwrap media-wrap">
				  	<div class="project-text">
					    <span class="intro-text"><?php echo get_the_title(); ?></span>
					    <h1 class="section-title"><?php echo get_post_meta($post->ID, 'project_subtitle', true); ?></h1>
					    <p class="section-desc"><?php echo get_the_excerpt(); ?></p>
				  		<!-- BUTTON -->
		  	  		<div class="readmore-container">
		  					<a href="<?php the_permalink(); ?>" class="readmore-btn">Más información</a>
		  	  		</div>
	  	  		</div><!-- class="project-text" -->
				  </div><!-- class="fpwrap media-wrap" -->
				</div><!-- class="fpimage" -->

				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>

			</section><!-- class="indie-media" -->

			<!-- APRENDIZAJES -->
			<section id="learnings" class="fpsection">
			  <div class="fpwrap learnings-wrap">
		  	<?php
		  		$args = array(
		  			'post_type'					=> 'page',
		  			'pagename'					=> 'aprendizajes',
		  			'post_status'				=> 'publish',
		  		);
		  		$query = new WP_Query($args);
		  	?>
			  	<!-- IMAGE -->
			  	<div class="learnings-img-container">
			  		<figure class="learnings-img"></figure>
			  	</div><!-- class="project-img" -->
			  	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
			  	<!-- TEXT -->
			  	<div class="learnings-text">
			  		<article class="learnings-text-items">
				  		<span class="intro-text">Aprendizajes</span>
				  		<h1 class="section-title"><?php echo get_post_meta($post->ID, 'project_subtitle', true); ?></h1>
				  		<p class="section-desc"><?php echo get_the_excerpt(); ?></p>
				  		<!-- BUTTON -->
					  	<div class="readmore-container">
								<a href="<?php the_permalink(); ?>" class="readmore-btn">Más información</a>
				  		</div>
			  		</article><!-- class="project-text-items" -->
			  	</div><!-- class="learnings-text" -->
			  <?php endwhile; endif; ?>
			  </div><!-- class="indie-media-wrap" -->
			  <?php wp_reset_postdata(); ?>
			</section><!-- class="indie-media" -->

			<!-- MODELO CANVAS    -->
			<section id="canvas" class="fpsection">
			  <div class="fpwrap canvas-wrap">
	  	  	<!-- CONTENT -->
	  	  	<div class="canvas-text">
	  	  		<article class="canvas-text-items">
	  		  		<span class="intro-text">Canvas</span>
	  		  		<h1 class="section-title">Modelo de negocio que describe la lógica de cómo una organización crea, entrega, y captura valor</h1>
	  		  		<p class="section-desc">Teneo, inquit, finem illi videri nihil dolere. Tria genera bonorum; Tu quidem reddes; Quaesita enim virtus est, non quae relinqueret naturam, sed quae tueretur. Negabat igitur ullam esse artem, quae ipsa a se proficisceretur; Consequens enim est et post oritur, ut dixi. Igitur neque stultorum quisquam beatus neque sapientium non beatus.</p>
	  		  		<!-- VIDEO -->
	  		  		<div class="canvas-vid">
	  		  			<iframe width="711" height="400" src="https://www.youtube.com/embed/QoAOzMTLP5s?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	  		  		</div><!-- class="canvas-vid" -->
	  		  		<div class="readmore-container">
	  						<a href="#" class="readmore-btn">Más información</a>
	  		  		</div>
	  	  		</article><!-- class="project-text-items" -->
	  	  	</div><!-- class="project-text" -->

			  </div><!-- class="indie-media-wrap" -->
			</section><!-- class="indie-media" -->

		</div><!-- #post-## post_class('pleiadesmoon-panel ')-->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
