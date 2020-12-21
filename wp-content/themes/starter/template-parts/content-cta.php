<?php
  $cta = new WP_Query(array(
      "post_type" => "page",
      "name" => "cta"
  ));

  while($cta->have_posts()):
    $cta->the_post();

     the_content();
  endwhile;

  wp_reset_postdata();
?>