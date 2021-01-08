<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mahmudul
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <!-- Preloader -->
    <div id="preloader" class="light">
        <div class="outer">
            <!-- Google Chrome -->
            <div class="infinityChrome">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <!-- Safari and others -->
            <div class="infinity">
                <div>
                    <span></span>
                </div>
                <div>
                    <span></span>
                </div>
                <div>
                    <span></span>
                </div>
            </div>
            <!-- Stuff -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo-outer">
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur"/>
                        <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"/>
                        <feBlend in="SourceGraphic" in2="goo"/>
                    </filter>
                </defs>
            </svg>
        </div>
    </div>

    <!-- desktop header -->
    <header class="desktop-header-3 light fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <?php if ( get_custom_logo() ): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <a class="navbar-brand"
                       href="<?php echo esc_url( home_url( '/' ) ) ?>"><?php bloginfo( 'name' ); ?></a>
                <?php endif; ?>
                <button aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation"
                        class="navbar-toggler" data-target="#navbarNavDropdown" data-toggle="collapse"
                        type="button"><span
                            class="navbar-toggler-icon"></span></button>
                <?php
                wp_nav_menu(
                    array(
                        'menu'            => 'menu-1',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav ml-auto scrollspy',
                        'menu_id'         => ' ',
                        'link_before'     => '<span class="screen-reader-text">',
                        'link_after'      => '</span>',
                        'theme_location'  => 'main-menu'
                    )
                );
                ?>
            </nav>
        </div>
    </header>
