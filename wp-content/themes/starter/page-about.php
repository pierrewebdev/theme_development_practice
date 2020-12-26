<?php 
  get_header();
?>

<body>

<main id="primary" class="site-main">


<?php 
while ( have_posts() ) : the_post();
  echo "<div class = \"about-page\">";
    echo "<div class = \"about-header\">";
     echo "<h1> ~ About Us ~ </h1>";
    echo "</div>";
    echo "<div class = \"about-content\">";
    the_content();
    echo "<div>";
  echo "</div>";
endwhile; // End of the loop.
?>

</main><!-- #main -->

<?php
get_footer();
?>