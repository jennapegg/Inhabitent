<?php
/**
 * The template for displaying all single posts.
 *
 * @package jenna-pegg-inhabitent
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>	
			<?php the_post_navigation(); ?>
			<div class="single-journal-share">
				<p><i class="fab fa-facebook-f"></i><a href="#">Like</a></p>
				<p><i class="fab fa-twitter"></i><a href="#">Tweet</a></p>
				<p><i class="fab fa-pinterest"></i><a href="#">Pin</a></p>
			</div>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
