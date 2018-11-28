<?php
/**
 * The template for displaying the footer.
 *
 * @package jenna-pegg-inhabitent
 */

?>
			</div><!-- #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<!-- contact info -->
					<div class="contact">
						<h6>Contact Info</h6>
						<p><i class="fas fa-envelope"></i><a href="">info@inhabitent.com</a></p>
						<p><i class="fas fa-phone"></i>778-456-7891</p>
						<!-- social media icons -->
						<div class="social-media">
							<i class="fab fa-facebook-f"></i>
							<i class="fab fa-twitter"></i>
							<i class="fab fa-google-plus-square"></i>
						</div>
					</div>
					<!-- bussiness hours -->
					<div class="bussiness">
						<h6>Business Hours</h6>
						<p><span>Monday-Friday:</span> 9am to 5pm</p>
						<p><span>Saturday:</span> 10am to 2pm</p>
						<p><span>Sunday:</span> Closed</p>
					</div>
					<!-- logo -->
					<img src="<?php echo get_template_directory_uri() ?> /images/inhabitent-logo-text.svg" alt="">
				</div><!-- .site-info -->
				<p class="copyright">Copyright &copy; 2019 Inhabitent</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
