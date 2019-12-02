<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package University
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section id="blog-section">
				<div class="container">
					<div class="row">
						<?php while(have_posts()) {
							the_post(); ?>
							<div class="col-12 col-md-4">
								<div class="card card-content shadow-lg mt-5 p-5">
									<div class="post-item">
										<h2 class="text-center"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
										<div class="meta-box">
											<p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
										</div>
										<div class="generic-content">
											<?php the_excerpt(); ?>
											<p><a class="btn btn-primary text-white" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="mt-5" style="margin: 0 auto;"><?php echo paginate_links(); ?></div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
