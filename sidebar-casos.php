<?php /* The sidebar containing the main widget area */ ?>

<?php
	// if (!is_active_sidebar('sidebar-4')) {
	// 	return;
	// }
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar('sidebar-4'); ?>
  <?php
    $args = array(
      'post_type'         => 'post',
      'category_name'     => 'estudio-de-casos',
      'order'             => 'ASC',
    );
    $query = new WP_Query($args);
  ?>

  <section class="widget">
    <h4 class="widget-title">Otros Casos de Estudio</h4>
    <ul class="casos">
    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </li>
    <?php endwhile; endif; ?>

    </ul>

  </section>




</aside><!-- id="secondary" class="widget-area" -->
