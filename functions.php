<?php if ( ! function_exists( 'theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook.
 */
function theme_setup() {
	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

	// Enqueue editor styles.
	add_editor_style( 'editor-style.css' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array('style','script', ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );
}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'theme_setup' );

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

   add_action( 'widgets_init', 'my_register_sidebars' );
   function my_register_sidebars() {
     register_sidebar(
      array(
        'id'            => 'right',
        'name'          => 'The right sidebar',
        'description'   => 'This sidebar will appear on the right',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
      )
    );
     /* Repeat register_sidebar() code for additional sidebars. */
   }
?>