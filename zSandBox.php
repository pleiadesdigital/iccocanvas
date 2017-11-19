style="background-image: url(http://localhost/~ronyortiz/sites2017/iccocanvas/wp-content/themes/pleiadesmoon/assets/images/front-page/proyectos-front-page.jpg)"


style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/pages/page-proyecto.jpg)"


<?php

  the_post_navigation(array(
    'prev_text'             => __('prev case: %title'),
    'next_text'             => __('next case: %title'),
    'in_same_term'          => true,
    // 'taxonomy'             => __('post_tag'),
    'screen_reader_text'    => __('Continue Reading'),
  ));

?>
