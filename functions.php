<?php
/**
 * Mahmudul functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mahmudul
 */

//Carbon Fields Load
require_once "inc/carbon.php";

if ( !defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    if ( site_url() != "http://localhost:8080/wp/portfolio" ) {
        define( '_S_VERSION', '1.0.0' );
    } else {
        define( '_S_VERSION', time() );
    }
}

if ( !function_exists( 'mahmudul_setup' ) ) :
    function mahmudul_setup() {
        load_theme_textdomain( 'mahmudul', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        register_nav_menus(
            array(
                'main-menu' => esc_html__( 'Primary', 'mahmudul' ),
            )
        );
        add_theme_support( 'post-formats', array( 'aside', 'link' ) );
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
        add_theme_support(
            'custom-background',
            apply_filters(
                'mahmudul_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'mahmudul_setup' );

function mahmudul_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'mahmudul_content_width', 640 );
}

add_action( 'after_setup_theme', 'mahmudul_content_width', 0 );

function mahmudul_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'mahmudul' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'mahmudul' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}

add_action( 'widgets_init', 'mahmudul_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mahmudul_scripts() {
    wp_enqueue_style( 'mahmudul-bootstrap.min-css', get_template_directory_uri() . '/css/bootstrap.min.css', null, _S_VERSION );
    wp_enqueue_style( 'mahmudul-all.min-css', get_template_directory_uri() . '/css/all.min.css', null, _S_VERSION );
    wp_register_style( 'mahmudul-simple-line-icons-css', get_template_directory_uri() . '/css/simple-line-icons.css', null, _S_VERSION );
    wp_register_style( 'mahmudul-slick-css', get_template_directory_uri() . '/css/slick.css', null, _S_VERSION );
    wp_register_style( 'mahmudul-animate-css', get_template_directory_uri() . '/css/animate.css', null, _S_VERSION );
    wp_register_style( 'mahmudul-magnific-popup-css', get_template_directory_uri() . '/css/magnific-popup.css', null, _S_VERSION );
    if ( is_front_page() ) {
        wp_enqueue_style( 'mahmudul-simple-line-icons-css' );
        wp_enqueue_style( 'mahmudul-slick-css' );
        wp_enqueue_style( 'mahmudul-animate-css' );
        wp_enqueue_style( 'mahmudul-magnific-popup-css' );
    }
    wp_enqueue_style( 'mahmudul-style-custom-css', get_template_directory_uri() . '/css/style.css', null, _S_VERSION );
    wp_enqueue_style( 'mahmudul-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'mahmudul-style', 'rtl', 'replace' );

    wp_enqueue_script( 'mahmudul-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_register_script( 'mahmudul-jquery.easing.min-js', get_template_directory_uri() . '/js/jquery.easing.min.js', array( 'jquery' ), _S_VERSION, true );
    wp_register_script( 'mahmudul-jquery.waypoints.min-js', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array( 'jquery' ), _S_VERSION, true );
    wp_register_script( 'mahmudul-jquery.counterup.min-js', get_template_directory_uri() . '/js/jquery.counterup.min.js', array( 'jquery' ), _S_VERSION, true );
    wp_enqueue_script( 'mahmudul-popper.min-js', get_template_directory_uri() . '/js/popper.min.js', array( 'jquery' ), _S_VERSION, true );
    wp_enqueue_script( 'mahmudul-bootstrap.min-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), _S_VERSION, true );
    wp_register_script( 'mahmudul-isotope.pkgd.min-js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array( 'jquery' ), _S_VERSION, true );
    wp_enqueue_script( 'mahmudul-infinite-scroll.min-js', get_template_directory_uri() . '/js/infinite-scroll.min.js', array( 'jquery' ), _S_VERSION, true );
    wp_register_script( 'mahmudul-imagesloaded.pkgd.min-js', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array( 'jquery' ), _S_VERSION, true );
    wp_register_script( 'mahmudul-slick.min-js', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), _S_VERSION, true );
    wp_register_script( 'mahmudul-contact-js', get_template_directory_uri() . '/js/contact.js', array( 'jquery', 'mahmudul-validator-js' ), _S_VERSION, true );
    wp_register_script( 'mahmudul-validator-js', get_template_directory_uri() . '/js/validator.js', array( 'jquery' ), _S_VERSION, true );
    wp_register_script( 'mahmudul-wow.min-js', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), _S_VERSION, true );
    wp_register_script( 'mahmudul-morphext.min-js', get_template_directory_uri() . '/js/morphext.min.js', array( 'jquery' ), _S_VERSION, true );
    wp_register_script( 'mahmudul-parallax.min-js', get_template_directory_uri() . '/js/parallax.min.js', array( 'jquery' ), _S_VERSION, true );
    wp_register_script( 'mahmudul-jquery.magnific-popup.min-js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array( 'jquery' ), _S_VERSION, true );
    if ( is_front_page() ) {
        wp_enqueue_script( 'mahmudul-jquery.easing.min-js' );
        wp_enqueue_script( 'mahmudul-jquery.waypoints.min-js' );
        wp_enqueue_script( 'mahmudul-jquery.counterup.min-js' );
        wp_enqueue_script( 'mahmudul-isotope.pkgd.min-js' );
        wp_enqueue_script( 'mahmudul-imagesloaded.pkgd.min-js' );
        wp_enqueue_script( 'mahmudul-slick.min-js' );
        wp_enqueue_script( 'mahmudul-contact-js' );
        wp_enqueue_script( 'mahmudul-validator-js' );
        wp_enqueue_script( 'mahmudul-wow.min-js' );
        wp_enqueue_script( 'mahmudul-morphext.min-js' );
        wp_enqueue_script( 'mahmudul-parallax.min-js' );
        wp_enqueue_script( 'mahmudul-jquery.magnific-popup.min-js' );
    }
    wp_enqueue_script( 'mahmudul-custom-js', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), _S_VERSION, true );

    $skill_category = get_terms( array(
        'taxonomy'   => 'skill_category',
        'hide_empty' => true,
        'order_by'   => 'term_id',
        'order'      => 'DESC'
    ) );

    $active_skill = array();

    foreach ( $skill_category as $item ) {
        $active_skill_check = carbon_get_term_meta( $item->term_id, 'skill_category_status' );
        if ( $active_skill_check ) {
            $active_skill['slug'] = $item->slug;
        }
    }

    wp_localize_script( 'mahmudul-custom-js', 'active_skill', $active_skill );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'mahmudul_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}


function mahmudul_change_logo_class( $html ) {
    $html = str_replace( 'custom-logo-link', 'navbar-brand', $html );
    return $html;
}

add_filter( 'get_custom_logo', 'mahmudul_change_logo_class' );

function mahmudul_hide_admin_bar_from_front_end() {
    if ( is_blog_admin() ) {
        return true;
    }
    return false;
}

add_filter( 'show_admin_bar', 'mahmudul_hide_admin_bar_from_front_end' );


add_filter( 'nav_menu_item_id', '__return_null', 1, 3 );
add_filter( 'nav_menu_css_class', '__return_empty_array', 1, 3 );

function mahmudul_menu_classes( $classes, $item, $args ) {
    if ( 'main-menu' == $args->theme_location ) {
        $classes[] = 'nav-item';
    }
    return $classes;
}

add_filter( 'nav_menu_css_class', 'mahmudul_menu_classes', 1, 3 );

function mahmudul_menu_link_class( $atts, $item, $args ) {
    if ( 'main-menu' == $args->theme_location ) {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'mahmudul_menu_link_class', 1, 3 );


function mahmudul_menu_link_change( $menu_items ) {
    if ( ( is_home() || is_singular() ) && !is_front_page() ) {
        foreach ( $menu_items as $i => $menu_item ) {
            $item_path      = esc_url( $menu_item->url );
            $menu_item->url = home_url() . $item_path;
            $menu_items[$i] = $menu_item;

            if ( $menu_item->post_name == 'blog' ) {
                $menu_item->url = get_permalink( get_option( 'page_for_posts' ) );
                $menu_items[$i] = $menu_item;
            }
        }
    }
    return $menu_items;
}

add_filter( 'wp_nav_menu_objects', 'mahmudul_menu_link_change', 1, 2 );