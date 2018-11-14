<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// TODO change the wp logon screen so that it's the inhabitent logo, update the url that the logo points to be the sites homepage url

// custom login for theme
function my_custom_login_logo() {
	echo '<style type="text/css">                                                                   
		h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-text-dark.svg) !important; 
		height: 120px !important; width: 410px; !important; background-size: cover;}                            
	</style>';
}
add_action('login_head', 'my_custom_login_logo');

// margin-left: -40px;

function the_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );

//custom hero image for about page 

function inhabitent_dynamic_css(){
  if(!is_page_template('about.php')){
    return;
  }

  $image = CFS()->get('about_header_image');

  if(!$image){
    $hero_css = ".page-template-about .entry-header {
      background: grey;
      color: white;
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center; 
    }";
  } else {
    $hero_css = ".page-template-about .entry-header {
      background: grey;
      background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
      url({$image});
      color: white;
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center; 
      background-size: cover;
    }";
  }

  wp_add_inline_style('tent-style',  $hero_css);
}

add_action('wp_enqueue_scripts', 'inhabitent_dynamic_css');