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

<div class="comment-area-section clearfix">

    <h3><?php printf( _n( '%s Comment Found', '%s Comments Found', get_comments_number() == 0 ? 1 : get_comments_number(), 'mahmudul' ), number_format_i18n( get_comments_number() ) ); ?></h3>
    <div class="comment-inner-box">
        <div class="comment-author-img float-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ab.jpg" alt="">
        </div>
        <div class="comment-author-text">
            <h4><a href="#">John Doe</a></h4>
            <span>September 7, 2020 at 7:50 pm</span>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                ligula eget dolor. Aenean massa. Cum sociis.</p>
            <div class="reply-btn">
                <a href="#">Reply</a>
            </div>
        </div>
    </div>
    <div class="comment-inner-box  reply-comment">
        <div class="comment-author-img float-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ab.jpg" alt="">
        </div>
        <div class="comment-author-text">
            <h4><a href="#">John Doe</a></h4>
            <span>September 7, 2020 at 7:50 pm</span>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                ligula eget dolor. Aenean massa. Cum sociis.</p>
            <div class="reply-btn">
                <a href="#">Reply</a>
            </div>
        </div>
    </div>
    <div class="comment-inner-box">
        <div class="comment-author-img float-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ab.jpg" alt="">
        </div>
        <div class="comment-author-text">
            <h4><a href="#">John Doe</a></h4>
            <span>September 7, 2020 at 7:50 pm</span>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                ligula eget dolor. Aenean massa. Cum sociis.</p>
            <div class="reply-btn">
                <a href="#">Reply</a>
            </div>
        </div>
    </div>
</div>
<div id="respond" class="comment-respond">
    <h2 id="reply-title" class="comment-reply-title">Leave a Reply</h2>
    <form action="#" method="post" id="commentform"
          class="section-inner thin max-percentage" novalidate="">
        <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span>
            Required fields are marked <span class="required">*</span></p>
        <p class="comment-form-comment"><label for="comment">Comment</label><textarea
                    id="comment" name="comment" cols="45" rows="8" maxlength="65525"
                    required="required"></textarea></p>
        <p class="comment-form-author"><label for="author">Name <span
                        class="required">*</span></label> <input id="author" name="author"
                                                                 type="text" value=""
                                                                 size="30" maxlength="245"
                                                                 required="required"></p>
        <p class="comment-form-email"><label for="email">Email <span
                        class="required">*</span></label> <input id="email" name="email"
                                                                 type="email" value=""
                                                                 size="30" maxlength="100"
                                                                 aria-describedby="email-notes"
                                                                 required="required"></p>
        <p class="comment-form-url"><label for="url">Website</label> <input id="url"
                                                                            name="url"
                                                                            type="url"
                                                                            value=""
                                                                            size="30"
                                                                            maxlength="200">
        </p>
        <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent"
                                                       name="wp-comment-cookies-consent"
                                                       type="checkbox" value="yes"> <label
                    for="wp-comment-cookies-consent">Save my name, email, and website in
                this browser for the next time I comment.</label></p>
        <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                      value="Post Comment"></p>
    </form>
</div>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$mahmudul_comment_count = get_comments_number();
			if ( '1' === $mahmudul_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'mahmudul' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $mahmudul_comment_count, 'comments title', 'mahmudul' ) ),
					number_format_i18n( $mahmudul_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'mahmudul' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
