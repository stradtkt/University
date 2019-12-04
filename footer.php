<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package University
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4">
					<p>&copy; Webkit Development Systems, 2019</p>
				</div>
				<div class="col-12 col-md-2">
					<h4>Learn</h4>
					<?php
						wp_nav_menu(array(
							'theme_location' => 'footerLocationOne',
							'menu_id' => 'footerLocationOne',
							'menu_class' => 'nav-list min-list'
						))
					?>
				</div>
				<div class="col-12 col-md-2">
					<h4>Explore</h4>
					<?php
						wp_nav_menu(array(
							'theme_location' => 'footerLocationTwo',
							'menu_id' => 'footerLocationTwo',
							'menu_class' => 'nav-list min-list'
						))
					?>
				</div>
				<div class="col-12 col-md-4">
					<div class="footer-links">
						<h3 class="text-center headline headline--small"><?php bloginfo('name'); ?></h3>
						<p class="text-center"><?php bloginfo('description'); ?></p>
						<nav>
							<ul class="min-list social-icons-list group">
								<li><a href="https://facebook.com" class="social-color-facebook"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com" class="social-color-twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="https://youtube.com" class="social-color-youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
								<li><a href="https://linkedin.com" class="social-color-linkedin"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="https://instagram.com" class="social-color-instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
