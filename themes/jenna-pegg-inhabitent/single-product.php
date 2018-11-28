<?php
/**
 * The template for displaying all single products.
 *
 * @package jenna-pegg-inhabitent
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		<div class="single-product-meta">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<p class="single-product-price">
			<?php 
			echo '$';
			echo CFS()->get( 'price' ); 
		?>
			</p>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
		<div class="single-product-links">
			<p><i class="fab fa-facebook-f"></i><a href="#">Like</a></p>
			<p><i class="fab fa-twitter"></i><a href="#">Tweet</a></p>
			<p><i class="fab fa-pinterest"></i><a href="#">Pin</a></p>
		</div>
			</div> <!-- single-product-meta -->
	</div><!-- .entry-content -->
	</header><!-- .entry-header -->
	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
			<?php the_post_navigation(); ?>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>