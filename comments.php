<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mahmudul
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comment-area-section">

    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) :
        ?>
        <h3 class="comments-title">
            <?php
            $mahmudul_comment_count = get_comments_number();
            if ( '1' === $mahmudul_comment_count ) {
                printf(
                /* translators: 1: title. */
                    esc_html__( 'One comment on &ldquo;%1$s&rdquo;', 'mahmudul' ),
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            } else {
                printf(
                /* translators: 1: comment count number, 2: title. */
                    esc_html( _nx( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $mahmudul_comment_count, 'comments title', 'mahmudul' ) ),
                    number_format_i18n( $mahmudul_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            }
            ?>
        </h3><!-- .comments-title -->

        <?php the_comments_navigation(); ?>

        <ol class="comment-list">
            <?php
            wp_list_comments( 'type=all&callback=my_custom_comment' );
            ?>
        </ol><!-- .comment-list -->


        <?php
        the_comments_navigation();

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( !comments_open() ) :
            ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'mahmudul' ); ?></p>
        <?php
        endif;

    endif; // Check for have_comments().

    $args = array(
        'title_reply_before'   => '<h2 id="reply-title" class="comment-reply-title">',
        'title_reply_after'    => '</h2>',
    );
    comment_form($args);
    ?>

</div><!-- #comments -->
