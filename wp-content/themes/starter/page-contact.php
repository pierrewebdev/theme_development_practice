<?php 
  get_header();
?>

<body>

<main id="primary" class="site-main">


<?php 
while ( have_posts() ) :
  echo "<div class = \"contact-page\">";
    the_post();
    the_content();
  echo "</div>";
endwhile; // End of the loop.
?>

</main><!-- #main -->

<?php
get_footer();
?>