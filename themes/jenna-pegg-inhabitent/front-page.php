<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
   $args = array( 'post_type' => 'post', 'posts_per_page' => 3);
   $product_posts = get_posts( $args ); // returns an array of posts
?>

<!-- product loops -->
<!-- TODO get the terms for our products and do some clever stuff with images  -->
<section class="shop-stuff">
<h2>Shop Stuff</h2>
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
	?>Stuff
</a>

	</div>
<?php
endforeach;

?>
</section>




<!-- journal loop -->
<section class="front-page-journal">
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
<article class="journal-entry">
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
</span>
   <a href="<?php echo get_the_permalink(); ?>"><?php the_title();?> </a>
   <a class="read-more" href="<?php echo get_the_permalink(); ?>">Read More</a>
	</article>
<?php endforeach; wp_reset_postdata(); ?>
</section>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
