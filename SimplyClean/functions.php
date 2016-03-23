<?php


if ( ! function_exists( 'SimplyClean_setup' ) ) :
function SimplyClean_setup(){
	/*
	 * Make theme available for translation.
	* Translations can be filed in the /languages/ directory.
	*/
	load_theme_textdomain( 'SimplyClean', get_template_directory() . '/languages' );
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * Let WordPress manage the document title.
	* By adding theme support, we declare that this theme does not use a
	* hard-coded <title> tag in the document head, and expect WordPress to
	* provide it for us.
	*/
	add_theme_support( 'title-tag' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	*
	* See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
	'primary' => __( 'Primary Menu',      'SimplyClean' ),
	'social'  => __( 'Social Links Menu', 'SimplyClean' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support( 'html5', array(
	'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
			) );
	
	/*
	 * Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array(
	'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
			) );
	
// 	$color_scheme  = twentyfifteen_get_color_scheme();
// 	$default_color = trim( $color_scheme[0], '#' );
	
// 	// Setup the WordPress core custom background feature.
// 	add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
// 	'default-color'      => $default_color,
// 	'default-attachment' => 'fixed',
// 	) ) );
}
endif;
add_action( 'after_setup_theme', 'SimplyClean_setup' );

/**
 * Register widget area.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function SimplyClean_widgets_init() {
	register_sidebar( array(
	'name'          => __( 'Sidebar', 'SimplyClean' ),
	'id'            => 'sidebar-1',
	'description'   => __( 'Add widgets here to appear in your sidebar.', 'SimplyClean' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'SimplyClean_widgets_init' );

function SimplyClean_scripts() {
	// Add custom fonts, used in the main stylesheet.
	//wp_enqueue_style( 'twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	//wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'SimplyClean-fontawesome', get_template_directory_uri() . '/frameworks/font-awesome/css/font-awesome.css' );

	// Load the Internet Explorer specific stylesheet.
	//wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
	//wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	//wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
	//wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );

	//wp_enqueue_script( 'twentyfifteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentyfifteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010' );
	}

// 	wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
// 	wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
// 	'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
// 	'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
//	) );
}
add_action( 'wp_enqueue_scripts', 'SimplyClean_scripts' );

if (!function_exists('SimplyClean_SocialSites_array')) {
		function SimplyClean_SocialSites_array(){
			$socialSites = array(
				'twitter' => 'SimplyClean_twitter_profile',
				'facebook' => 'SimplyClean_facebook_profile',
				'youtube' => 'SimplyClean_youtube_profile',
				'linkedin' => 'SimplyClean_twitter_profile',
				'pinterest' => 'SimplyClean_pinterest_profile',
				'tumbler' => 'SimplyClean_tumbler_profile',
				'instagram' => 'SimplyClean_instagram_profile',
				'google-plus' => 'SimplyClean_google-plus_profile'
				 );

			return apply_filters('SimplyClean_SocialSites_filters', $socialSites);
		}
}

//show social sites icon
if (!function_exists('SimplyClean_SocialSites_Show')) {
	function SimplyClean_SocialSites_Show($source){
		$social_icons = SimplyClean_SocialSites_array();

		foreach ($social_icons as $social_icons => $value) {
			if (strlen(get_theme_mod($social_icon)) > 0) {
				$active_social_sites[$social_icon] = $social_icon;
			}
		}

		if (!empty($active_social_sites)) {
			echo '<ul class="social-media-icons">';

			foreach ($active_social_sites as $key => $active_social_site) {
				$css_class = 'fa fa-'.$active_social_site;
				?>
				<li>
					<a class="<?php echo $active_social_site; ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( $key ) ); ?>">
						<i class="<?php echo esc_attr( $css_class ); ?>" title="<?php printf( __('%s icon', 'SimplyClean'), $active_social_site ); ?>"></i>
					</a>
				</li>
				<?php
			}

			echo '</ul>';
		}
	}
}

function SimplyClean_customize_register($wp_customize){
	$wp_customize->add_section("Social Sites",  array(
		'title' => __("Social Sites", );)
}
?>