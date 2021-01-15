<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mahmudul
 */
get_header();
?>

    <main class="content-3">
        <!-- Blog Page -->
        <section id="blog-page-area" class="blog-page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-single blog-standard shadow-dark">
                            <?php
                            while ( have_posts() ) :
                                the_post();

                                get_template_part( 'template-parts/content', get_post_type() );

                                the_post_navigation(
                                    array(
                                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'mahmudul' ) . '</span> <span class="nav-title">%title</span>',
                                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'mahmudul' ) . '</span> <span class="nav-title">%title</span>',
                                    )
                                );

                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;

                            endwhile; // End of the loop.
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php
                        get_sidebar();
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
