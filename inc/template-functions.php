<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package CAP_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cap_theme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'cap_theme_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function cap_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'cap_theme_pingback_header' );


// custom post for news
add_action('init', 'news_events');
function news_events() {
  $labels = array(
    'name' => _x('News and events', 'post type general name'),
    'singular_name' => _x('News and events', 'post type singular name'),
    'add_new' => _x('Add New', 'rep'),
    'add_new_item' => __('Add News and events'),
    'edit_item' => __('Edit News and events'),
    'new_item' => __('New News and events'),
    'view_item' => __('View News and events'),
    'search_items' => __('Search News and events'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => 'dashicons-format-status',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'page-attributes')
    );
  register_post_type( 'news_events' , $args );
}

// constant links
DEFINE('THEMEPATH', get_stylesheet_directory().'/');
DEFINE('IMAGEPATH', get_stylesheet_directory_uri().'/images/');
DEFINE('JAVASCRIPTPATH', get_stylesheet_directory_uri().'/js/');
DEFINE('TEMPLATEPATH', get_stylesheet_directory_uri().'/template-parts/');
