<?php
  $portfolio = new WP_Query(array(
      "post_type" => "page",
      "name" => "portfolio"
  ));

  while($portfolio->have_posts()):
    $portfolio->the_post();

     the_content();
  endwhile;

  wp_reset_postdata();
?>