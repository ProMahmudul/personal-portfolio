<?php get_header(); ?>
<main class="content-3">
    <!-- Blog Page -->
    <section id="blog-page-area" class="blog-page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-post-content">
                        <?php if ( have_posts() ):
                            while ( have_posts() ):
                                the_post();
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

                            <?php
                            endwhile;
                        endif; ?>

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
                </div>
                <!-- /blog-post-content -->
                <div class="col-md-4">
                    <?php
                    get_sidebar();
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
