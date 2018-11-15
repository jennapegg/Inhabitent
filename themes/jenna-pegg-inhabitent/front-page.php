<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="home-hero">
		<img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg' ?>" alt="Inhabitent full logo">
		</section>

			<?php
   $args = array( 'post_type' => 'post', 'posts_per_page' => 3);
   $product_posts = get_posts( $args ); // returns an array of posts
?>

<!-- product loops -->
<!-- TODO get the terms for our products and do some clever stuff with images  -->
<section class="shop-stuff">
<h2>Shop Stuff</h2>
<div class="frontpage-shop">
<?php 
$terms = get_terms(array(
	'taxonomy' => 'product_type',
	'hide_empty' => 0,
));

foreach ($terms as $term):?>
	<div class="frontpage-term">
	<img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug . '.svg'; ?>" 
	alt="<?php echo $term->name ?>">
	<p><?php 
	echo $term->description;
	?></p>

<a href="<?php echo get_term_link($term); ?>">
	<?php
	echo $term->name;
	?> Stuff
</a>

	</div>

<?php
endforeach;

?>
	</div>
</section>




<!-- journal loop -->
<section class="front-page-journal">
<h2>Inhabitent Journal</h2>
<div class="journal-section">
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
<article class="journal-entrie">
   <?php 
   if(has_post_thumbnail()){
	   the_post_thumbnail('large');
   }
   ?>
<span class="entry-data">
   <?php
   red_starter_posted_on();
   echo ' / ';
   comments_number('0 Comments', '1 Comment', '2 Comments', '% Comments');
   ?>
      <div class="journal-mini-meta">
</span>
   <a class="journal-permalink" href="<?php echo get_the_permalink(); ?>"><?php the_title();?> </a>
   <a class="read-entry" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
   </div>
	</article>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</section>

<section class="adventure">
<h2>Latest Adventures</h2>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
