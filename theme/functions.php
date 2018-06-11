<?php
/**
 * Tech High Custom Theme
 * Sets up theme defaults and registers support for 
 * various WordPress features.
 */ 

// Register Custom Navigation Walker
require_once('class-wp-bootstrap-navwalker.php');

function techhigh_setup(){
  
  // Make theme available for translation.
  load_theme_textdomain( 'techhigh' );
  
  // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
  
  // Let WordPress manage the document title.
  add_theme_support( 'title-tag' );
  
  // Enable support for Post Thumbnails on posts and pages.
  add_theme_support( 'post-thumbnails' );
	add_image_size( 'techhigh-featured-image', 2000, 1200, true );
	add_image_size( 'techhigh-thumbnail-avatar', 100, 100, true );
  
  // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'    => __( 'Domain Menu', 'techhigh' ),
		'secondary' => __( 'Nav Menu', 'techhigh' ),
	));
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/**
	 * Some day this theme will support this stuff,
	 * but sadly, today is not that day...
	 * 
	 * @todo: Create support for this stuff
	//Enable support for Post Formats.
	add_theme_support( 'post-formats', array(
  	'aside',
  	'image',
  	'video',
  	'quote',
  	'link',
  	'gallery',
  	'audio',
	) );
	**/
	
	// Add theme support for HTML5 search form
	add_theme_support( 'html5', array( 'search-form' ) );
	
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

  // Add page excerpts for Wordpress
  add_post_type_support( 'page', 'excerpt' );
}
add_action( 'after_setup_theme', 'techhigh_setup' );

/**
 * Register custom fonts.
*/ 
function techhigh_fonts_url() {
  $fonts_url = '';
  
  $query_args = array(
    'family' => 'Old+Standard+TT:400,400i,700|Open+Sans:400,400i,700,700i'
    );
    
    $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css');
    
    return esc_url_raw( $fonts_url );
  }

  /**
   * Add preconnect for Google Fonts.
   */
  function techhigh_resource_hints( $urls, $relation_type ){
    if( wp_style_is( 'techhigh-fonts', 'queue') && 'preconnect' === $relation_type ) {
      $urls[] = array(
        'href' =>  'https://fonts.gstatic.com',
        'crossorigin'
        );
    }
    return $urls;
 }
add_filter( 'wp_resource_hints', 'techhigh_resource_hints', 10, 2 );

/**
 * Enqueue Theme scripts and styles.
 */
function techhigh_scripts(){
  /** 
  * Bootstrap 4.0.0 Stable. 
  */
  /** Javascript files **/
  // Popper Javascript (required by BS 4.0)
  wp_enqueue_script( 'popper-script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
    array( 'jquery' ), '1.12.9', true );
  
  // Bootstrap Javascript
  wp_enqueue_script( 'bootstrap-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', 
    array( 'jquery', 'popper-script' ), '4.0.0', true );
  
  // Font Face Observer Javascript
  wp_enqueue_script( 'fontfaceobserver-script', get_theme_file_uri( '/assets/js/fontfaceobserver.js' ),
    array( 'jquery' ), '1.11.0', true );
  
  // Techhigh javascript
	wp_enqueue_script( 'techhigh-script', get_theme_file_uri( '/assets/js/techhigh.js' ), 
    array( 'jquery', 'popper-script', 'bootstrap-script', 'fontfaceobserver-script' ), '2.0', true  );
  
  /** CSS files **/
  // Bootstrap stylesheet
	wp_enqueue_style( 'bootstrap-style', 
	  'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', 
	  array(), '4.0.0', 'all' );
	
  // Font Awesome styles
  wp_enqueue_style( 'fontawesome-style', 'https://use.fontawesome.com/releases/v5.0.12/css/all.css',
    array(),'5.0.12','all' );
  
  // Techhigh font styles
  wp_enqueue_style( 'techhigh-fonts', techhigh_fonts_url(), 
  array(), null );
  
  // Techhigh stylesheet
	wp_enqueue_style( 'techhigh-style', get_stylesheet_uri(), 
	array( 'bootstrap-style', 'fontawesome-style', 'techhigh-fonts'), '2.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'techhigh_scripts' );

/**
 * Add Search Link to the end of the primary nav
 */
add_filter( 'wp_nav_menu_items', 'techhigh_search_link', 10, 2 );
function techhigh_search_link ( $items, $args ) {
    if ( $args->theme_location == 'primary' ) {
        $items .= '<li class="nav-item nav-search-li">
                    <a class="nav-link search-link" href="#" data-toggle="modal" data-target="#searchModal">
                      <i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search
                    </a>
                  </li>';
    }
    return $items;
}

/**
 * Wordpress Page Feeds
 */
 
// add_action('init', 'customRSS');
// function customRSS(){
//         add_feed('student', 'customRSSFunc');
// }

// function customRSSFunc(){
//         get_template_part('rss', 'students');
// }

// function rssLanguage(){
//         update_option('rss_language', 'en');
// }

// add_action('admin_init', 'rssLanguage');

// function my_custom_rss() {

// 	if ( 'students' === get_query_var( 'post_type' ) ) {
// 		get_template_part( 'feed', 'students' );
// 	} else {
// 		get_template_part( 'feed', 'rss2' );
// 	}
// }


/**
 * Register sidebars and widgetized areas.
 */
function techhigh_widgets() {

	register_sidebar( array(
		'name'          => 'Front Page Agenda Calendar',
		'id'            => 'agenda_cal',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
  
  register_sidebar( array( 
    'name'  =>  'Footer JS Content',
    'id'    =>  'footer_js',
    'before_widget' => '',
		'after_widget'  => '',
  ) );
}
add_action( 'widgets_init', 'techhigh_widgets' );

/**
 * Removes category names from the archive title
 */
function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
  
    return $title;
}
 
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

/**
 * This works with the shortcode widget
 * to display posts using the shortcode-card.php 
 * template-part
 */
function be_dps_template_part( $output, $original_atts ) {
	ob_start();
	get_template_part( 'template-parts/shortcodes/shortcode', 'card' );
	$new_output = ob_get_clean();
	if( !empty( $new_output ) )
		$output = $new_output;
	return $output;
}
add_action( 'display_posts_shortcode_output', 'be_dps_template_part', 10, 2 );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>
