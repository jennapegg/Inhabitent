<?php
/**
 * The template for displaying product archive page.
 *
 * @package jenna-pegg-inhabitent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>

				<p><?php echo term_description(); ?></p>

			</header><!-- .page-header -->

			<section class="product-archive">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
						<?php endif; ?>

						<div class="product-info">
							<p class="product-name"><?php the_title(); ?></p>
							<div class="dots"></div>
							<p class="product-price"><?php 
							$price = '$' . CFS()->get( 'price' );

							echo $price; 
							?></p>
						</div>
						<?php if ( 'post' === get_post_type() ) : ?>
						<?php endif; ?>
					</header><!-- .entry-header -->

				</article><!-- #post-## -->
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
