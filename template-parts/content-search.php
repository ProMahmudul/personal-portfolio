<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mahmudul
 */

?>

<div class="blog-img-text bg-white rounded blog-standard">
    <div class="blog-img mb-4">
        <?php mahmudul_post_thumbnail(); ?>
    </div>
    <div class="blog-text-title">
        <h4 class="mt-0 title"><a
                    href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <ul class="list-inline unstyled meta mb-3 mt-3">
            <li class="list-inline-item"><?php echo get_the_date(); ?></li>
            <li class="list-inline-item">
                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) ?>"
                   title="Posts by <?php esc_attr( the_author() ); ?>" rel="author">
                    <?php the_author(); ?>
                </a></li>
            <li class="list-inline-item"><?php the_category( ", " ); ?></li>
        </ul>
        <?php the_excerpt(); ?>
        <div class="br-more mt-3">
            <a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'mahmudul' ); ?></a>
        </div>
    </div>
</div>
