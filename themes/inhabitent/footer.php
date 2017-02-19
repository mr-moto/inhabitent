<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="container footer-content">
					<div class="contact-info">
						<h3>Contact Info</h3>
						<p><i class="fa fa-envelope"></i><a href="#">info@inhabitent.com</a></p>
						<p><i class="fa fa-phone"></i><a href="#">778-456-7891</a></p>
						<div>
							<span><a href="http://www.facebook.com"><i class="fa fa-facebook-square"></i></a></span>
							<span><a href="http://www.twitter.com"><i class="fa fa-twitter-square"></i></a></span>
							<span><a href="http://www.googleplus.com"><i class="fa fa-google-plus-square"></i></a></span>
						</div>	
					</div>
					<div class="business-hours">
						<h3>Business Hours</h3>
						<div>
							<p> <span class="bold">Monday-Friday:</span> 9am to 5pm</p>
							<p> <span class="bold">Saturday:</span> 10am to 2pm</p>
							<p> <span class="bold">Sunday:</span> Closed</p>
						</div>
					</div>
					<div class="footer-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="logo" />
					</div>
				</div>
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
