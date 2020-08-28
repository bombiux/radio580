<?php
function this_setup() {
	add_theme_support('post-thumbnails');
	add_image_size('fb', 899, 472, true);
}
add_action('after_setup_theme', 'this_setup');

function this_menus() {
	register_nav_menus(array(
		'menu-principal' => __('Menu Principal', 'this')
	));
}
add_action('init', 'this_menus');

function this_scripts_styles() {
	global $wp_query;

	// styles
	// wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.css', array(), '1.0.10');
	wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '0.0.6');
	wp_enqueue_style('dashicons');
	wp_enqueue_style('gFonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:600,900&display=swap', array(), '1.0.0');
	wp_enqueue_style('style', get_stylesheet_uri(), array('reset', 'dashicons', 'gFonts'), '1.0.5');

	// scripts
	wp_enqueue_script('howler', get_template_directory_uri() . '/js/howler.core.js', array('jquery'), '2.1.3', true);
	// wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/slicknav.js', array('jquery'), '1.0.10', true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('howler'), '1.0.5', true);
}

add_action('wp_enqueue_scripts', 'this_scripts_styles');

add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

// Display search icon in menus and toggle search form 
function add_search_form($items, $args) {
if( $args->theme_location == 'menu-principal' )
	   $items .= '<li class="search">
					<a class="search_icon">
						<span class="spicewpsearch_icon"></span>
					</a>
					<div style="display:none;" class="spicewpsearchform">'. get_search_form(false) .'</div>
				</li>';
       return $items;
}

function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 150);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = $excerpt .'... <span>Ver más</span>';
	return $excerpt;
}

function this_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
 
	// it is always better to use WP_Query but not here
	query_posts( $args );
 
	if( have_posts() ) :
 
		// run the loop
		while( have_posts() ): the_post();
 
			// look into your theme code how the posts are inserted, but you can use your own HTML of course
			// do you remember? - my example is adapted for Twenty Seventeen theme
			get_template_part( 'template-parts/content', get_post_format() );
			// for the test purposes comment the line above and uncomment the below one
			// the_title();
 
 
		endwhile;
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
 
 
 
add_action('wp_ajax_loadmore', 'this_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'this_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

function filter_ptags_on_images($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
 }
 add_filter('the_content', 'filter_ptags_on_images');