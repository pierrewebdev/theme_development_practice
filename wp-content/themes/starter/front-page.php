<?php 
  get_header();
?>

<body>

<main id="primary" class="site-main">

<div class = "front-page-img">
    <?php 
        get_template_part("./template-parts/content", "cta");
    ?>
</div>

<?php 
while ( have_posts() ) :
  echo "<div class = \"front-page-content\">";
    the_post();
    the_content();
  echo "</div>";
endwhile; // End of the loop.
?>

<div class = "portfolio">
    <?php 
        get_template_part("./template-parts/content", "portfolio");
    ?>
</div>

<div class = "banner">
  <h4>Ready to build with us ?</h4>
   <button> Let's Build <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
</div>

</main><!-- #main -->

<?php
get_footer();
?>