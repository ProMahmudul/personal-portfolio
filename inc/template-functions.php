<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Mahmudul
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function mahmudul_body_classes( $classes ) {
    // Adds a class of hfeed to non-singular pages.
    if ( !is_singular() ) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if ( !is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}

add_filter( 'body_class', 'mahmudul_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function mahmudul_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}

add_action( 'wp_head', 'mahmudul_pingback_header' );


if ( !function_exists( "mahmudul_pagination" ) ) {
    function mahmudul_pagination() {
        global $wp_query;
        $links = paginate_links( array(
            'current'  => max( 1, get_query_var( 'paged' ) ),
            'total'    => $wp_query->max_num_pages,
            'type'     => 'list',
            'mid_size' => 3
        ) );
        $links = str_replace( "page-numbers", "pgn__num", $links );
        $links = str_replace( "<ul class='pgn__num'>", "<ul>", $links );
        $links = str_replace( "next pgn__num", "pgn__next", $links );
        $links = str_replace( "prev pgn__num", "pgn__prev", $links );
        echo wp_kses_post( $links );
    }
}