<?php 
  get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Theme</title>
</head>
<body>

<main id="primary" class="site-main">

<div class = "front-page-img">
    <p>Use a Template Part Here</p>
</div>

<?php
while ( have_posts() ) :
    the_post();
    the_content();

endwhile; // End of the loop.
?>

</main><!-- #main -->

</body>
</html>

<?php
get_footer();
?>