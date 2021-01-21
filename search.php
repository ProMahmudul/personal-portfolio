<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Mahmudul
 */

get_header();
?>

    <section id="blog-page-area" class="blog-page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <main id="primary" class="site-main">
                        <div class="blog-post-content">
                            <?php if ( have_posts() ) : ?>

                                <header class="page-header">
                                    <h1 class="page-title">
                                        <?php
                                        /* translators: %s: search query. */
                                        printf( esc_html__( 'Search Results for: %s', 'mahmudul' ), '<span>' . get_search_query() . '</span>' );
                                        ?>
                                    </h1>
                                </header><!-- .page-header -->

                                <?php
                                /* Start the Loop */
                                while ( have_posts() ) :
                                    the_post();

                                    /**
                                     * Run the loop for the search to output the results.
                                     * If you want to overload this in a child theme then include a file
                                     * called content-search.php and that will be used instead.
                                     */
                                    get_template_part( 'template-parts/content', 'search' );

                                endwhile;


                            else :

                                get_template_part( 'template-parts/content', 'none' );

                            endif;
                            ?>
                        </div>
                        <div class="blog-pagination text-center">
                            <?php
                            if ( have_posts() ):
                                echo paginate_links( [
                                    'type'      => 'list',
                                    'prev_text' => "&laquo;",
                                    'next_text' => "&raquo"
                                ] );
                            endif;
                            ?>
                        </div>

                    </main><!-- #main -->
                </div>
                <div class="col-md-4">
                    <?php
                    get_sidebar();
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
