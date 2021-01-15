<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mahmudul
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title my-0">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title my-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
                <ul class="list-inline unstyled meta mb-0 mt-3">
                    <li class="list-inline-item"><?php echo get_the_date(); ?></li>
                    <li class="list-inline-item">
                        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) ?>"
                           title="Posts by <?php esc_attr( the_author() ); ?>" rel="author">
                            <?php the_author(); ?>
                        </a>
                    </li>
                    <li class="list-inline-item"><a href="#"><?php the_category( ", " ); ?></a></li>
                </ul>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php mahmudul_post_thumbnail(); ?>

	<div class="entry-content clearfix my-4">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mahmudul' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mahmudul' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mahmudul_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
