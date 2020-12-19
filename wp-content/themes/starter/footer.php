<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>
    <div class = "footer-content">
	  <div>
		  <h3>Contact Us:</h3>
		  <p>NYC Web Design <br/>
		  102 Board Fish Road <br/>
		  Buffalo NYC <br/>
		  Phone: 5555-5555-5555</p>
	  </div>
	  <div>
		  <h3>About Us:</h3>
		  <p style = "width:400px;">We are an New York city website design company serving the NYC city area and other businesses upstate. We pride ourselves on providing a personalized level of service and working to find solutions for your business’ needs. Our goal is to help your customers find you in as efficient a manner as possible. Contact us today to schedule an appointment to discuss your new website.</p>
	  </div>
	</div>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a style = "color:black; text-decoration:none;" href="<?php echo esc_url( __( "https://github.com/pierrewebdev" ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				  echo "Pierre Web Development Copyright 2020";
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				  echo "Awesome Practice Theme";
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
