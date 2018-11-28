<?php
/**
 * The template for displaying all pages.
 *
 * @package jenna-pegg-inhabitent
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

	<!-- adventures -->
<section class="front-page-adventure">
<h2>Latest Adventures</h2>

	<div class="adventure">
		<div class="canoe">
			<h3><a href="#">Getting Back to Nature in a Canoe</a></h3>
			<p class="read-adventure"><a href="#">Read More</a></p>
		</div><!-- end canoe -->
		<div class="beach-night">
			<h3><a href="#">A Night with Friends at the Beach</a></h3>
			<p class="read-adventure"><a href="#">Read More</a></p>
		</div><!-- end beach-night -->
		<div class="mountain-view">
			   <h3><a href="#">Taking in the View at Big Mountain</a></h3>
			   <p class="read-adventure"><a href="#">Read More</a></p>
		</div><!-- end mountain-view -->
		<div class="star-gazing">
			<h3><a href="#">Star-Gazing at the Night Sky</a></h3>
			<p class="read-adventure"><a href="#">Read More</a></p>
		</div><!-- end star-gazing -->
	</div>
	<p class="more-adventures"><a href="#">More Adventures</a></p>
</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
