<?php
if ( ! function_exists( 'blog_setup' ) ) :

function blog_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'blog', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'blog' ),
        'social'  => __( 'Social Links Menu', 'blog' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // blog_setup

add_action( 'after_setup_theme', 'blog_setup' );


if ( ! function_exists( 'blog_init' ) ) :

function blog_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // blog_setup

add_action( 'init', 'blog_init' );


if ( ! function_exists( 'blog_custom_image_sizes_names' ) ) :

function blog_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'blog_custom_image_sizes_names' );
endif;// blog_custom_image_sizes_names



if ( ! function_exists( 'blog_widgets_init' ) ) :

function blog_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'blog_widgets_init' );
endif;// blog_widgets_init



if ( ! function_exists( 'blog_customize_register' ) ) :

function blog_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'blog_customize_register' );
endif;// blog_customize_register


if ( ! function_exists( 'blog_enqueue_scripts' ) ) :
    function blog_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', false, null, true);

    wp_deregister_script( 'blog-jquerymigrate' );
    wp_enqueue_script( 'blog-jquerymigrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.0.min.js', false, null, true);

    wp_deregister_script( 'blog-popper' );
    wp_enqueue_script( 'blog-popper', get_template_directory_uri() . '/js/popper.min.js', false, null, true);

    wp_deregister_script( 'blog-bootstrap' );
    wp_enqueue_script( 'blog-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'blog-owlcarousel' );
    wp_enqueue_script( 'blog-owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', false, null, true);

    wp_deregister_script( 'blog-aos' );
    wp_enqueue_script( 'blog-aos', get_template_directory_uri() . '/js/aos.js', false, null, true);

    wp_deregister_script( 'blog-imagesloadedpkgd' );
    wp_enqueue_script( 'blog-imagesloadedpkgd', get_template_directory_uri() . '/js/imagesloaded.pkgd.js', false, null, true);

    wp_deregister_script( 'blog-isotopepkgd' );
    wp_enqueue_script( 'blog-isotopepkgd', get_template_directory_uri() . '/js/isotope.pkgd.min.js', false, null, true);

    wp_deregister_script( 'blog-jqueryanimatenumber' );
    wp_enqueue_script( 'blog-jqueryanimatenumber', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', false, null, true);

    wp_deregister_script( 'blog-jquerystellar' );
    wp_enqueue_script( 'blog-jquerystellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', false, null, true);

    wp_deregister_script( 'blog-jarallax' );
    wp_enqueue_script( 'blog-jarallax', get_template_directory_uri() . '/js/jarallax.min.js', false, null, true);

    wp_deregister_script( 'blog-jarallaxelement' );
    wp_enqueue_script( 'blog-jarallaxelement', get_template_directory_uri() . '/js/jarallax-element.min.js', false, null, true);

    wp_deregister_script( 'blog-jquerywaypoints' );
    wp_enqueue_script( 'blog-jquerywaypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', false, null, true);

    wp_deregister_script( 'blog-jqueryfancybox' );
    wp_enqueue_script( 'blog-jqueryfancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', false, null, true);

    wp_deregister_script( 'blog-jquerylettering' );
    wp_enqueue_script( 'blog-jquerylettering', get_template_directory_uri() . '/js/jquery.lettering.js', false, null, true);

    wp_deregister_script( 'blog-tweenmax' );
    wp_enqueue_script( 'blog-tweenmax', get_template_directory_uri() . '/js/TweenMax.min.js', false, null, true);

    wp_deregister_script( 'blog-custom' );
    wp_enqueue_script( 'blog-custom', get_template_directory_uri() . '/js/custom.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'blog-bootstrap' );
    wp_enqueue_style( 'blog-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'blog-animate' );
    wp_enqueue_style( 'blog-animate', get_template_directory_uri() . '/css/animate.min.css', false, null, 'all');

    wp_deregister_style( 'blog-owlcarousel' );
    wp_enqueue_style( 'blog-owlcarousel', get_template_directory_uri() . '/css/owl.carousel.min.css', false, null, 'all');

    wp_deregister_style( 'blog-owlthemedefault' );
    wp_enqueue_style( 'blog-owlthemedefault', get_template_directory_uri() . '/css/owl.theme.default.min.css', false, null, 'all');

    wp_deregister_style( 'blog-style' );
    wp_enqueue_style( 'blog-style', get_template_directory_uri() . '/fonts/icomoon/style.css', false, null, 'all');

    wp_deregister_style( 'blog-style-1' );
    wp_enqueue_style( 'blog-style-1', get_template_directory_uri() . '/fonts/feather/style.css', false, null, 'all');

    wp_deregister_style( 'blog-flaticon' );
    wp_enqueue_style( 'blog-flaticon', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css', false, null, 'all');

    wp_deregister_style( 'blog-jqueryfancybox' );
    wp_enqueue_style( 'blog-jqueryfancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', false, null, 'all');

    wp_deregister_style( 'blog-aos' );
    wp_enqueue_style( 'blog-aos', get_template_directory_uri() . '/css/aos.css', false, null, 'all');

    wp_deregister_style( 'blog-style-2' );
    wp_enqueue_style( 'blog-style-2', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'blog-style-3' );
    wp_enqueue_style( 'blog-style-3', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false, null, 'all');

    wp_deregister_style( 'blog-style-4' );
    wp_enqueue_style( 'blog-style-4', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap', false, null, 'all');

    wp_deregister_style( 'blog-style-5' );
    wp_enqueue_style( 'blog-style-5', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'blog_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>