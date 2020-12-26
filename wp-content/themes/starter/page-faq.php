<?php 
  get_header();
?>

<body>

<main id="primary" class="site-main">


<?php 
while ( have_posts() ) :
  echo "<div class = \"faq-page\">";
  echo "<h1> Frequently Asked Questions</h1>";
    the_post();
    the_content();
  echo "</div>";
endwhile; // End of the loop.
?>

</main><!-- #main -->

<?php
get_footer();
?>

h1.entry-title.main_title{
  font-size: 40px;
  font-family: Georgia;
}