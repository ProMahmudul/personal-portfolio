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
                            <h1 class="my-0">5 Best App Development Tool for Your Project</h1>
                            <ul class="list-inline unstyled meta mb-0 mt-3">
                                <li class="list-inline-item">28 February 2020</li>
                                <li class="list-inline-item"><a href="#" title="Posts by Bolby Doe" rel="author">Bolby Doe</a></li>
                                <li class="list-inline-item"><a href="#">Reviews</a></li>
                            </ul>
                            <div class="thumb-wrapper mt-4"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/1-1.svg" alt=""></div>
                            <article>
                                <div class="clearfix my-4"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p><p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p><p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p><p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p><p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p></div>
                            </article>
                            <div class="comment-area-section clearfix">
                                <h3>3 Comment Found</h3>
                                <div class="comment-inner-box">
                                    <div class="comment-author-img float-left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ab.jpg" alt="">
                                    </div>
                                    <div class="comment-author-text">
                                        <h4><a href="#">John Doe</a></h4>
                                        <span>September 7, 2020 at 7:50 pm</span>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis.</p>
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
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis.</p>
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
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis.</p>
                                        <div class="reply-btn">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="respond" class="comment-respond">
                                <h2 id="reply-title" class="comment-reply-title">Leave a Reply</h2>
                                <form action="#" method="post" id="commentform" class="section-inner thin max-percentage" novalidate="">
                                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                    <p class="comment-form-comment"><label for="comment">Comment</label><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
                                    <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required"></p>
                                    <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required"></p>
                                    <p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url" value="" size="30" maxlength="200"></p><p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /blog-post-content -->
                    <div class="col-md-4">
                        <div class="blog-side-bar">
                            <div class="widget bg-white rounded shadow-dark">
                                <form class="searchform" role="search" method="get" id="search-form" action="#">
                                    <label class="screen-reader-text" for="s"></label>
                                    <input type="text" value="" name="s" id="s" placeholder="Search ...">
                                    <input type="submit" id="searchsubmit" value="Search">
                                </form>
                            </div>
                            <div class="widget bg-white rounded shadow-dark">
                                <h3 class="widget-header">Recent Posts</h3>
                                <ul>
                                    <li> <a href="#">5 Best App Development Tool for Your Project</a></li>
                                    <li> <a href="#">Common Misconceptions About Payment</a></li>
                                    <li> <a href="#">3 Things To Know About Startup Business</a></li>
                                </ul>
                            </div>
                            <div class="widget bg-white rounded shadow-dark">
                                <h3 class="widget-header">Archives</h3>
                                <ul>
                                    <li><a href="#">February 2020</a></li>
                                </ul>
                            </div>
                            <div class="widget bg-white rounded shadow-dark">
                                <h3 class="widget-header">Categories</h3>
                                <ul>
                                    <li class="cat-item cat-item-4"><a href="#">Business</a></li>
                                    <li class="cat-item cat-item-6"><a href="#">Reviews</a></li>
                                    <li class="cat-item cat-item-5"><a href="#">Tutorial</a></li>
                                </ul>
                            </div>
                            <div class="widget bg-white rounded shadow-dark">
                                <h3 class="widget-header">Meta</h3>
                                <ul>
                                    <li><a href="#">Log in</a></li>
                                    <li><a href="#">Entries feed</a></li>
                                    <li><a href="#">Comments feed</a></li>
                                    <li><a href="#">WordPress.org</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <main id="primary" class="site-main">

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

                </main><!-- #main -->
            </div>
            <div class="col-md-4">
                <?php
                get_sidebar();
                ?>
            </div>
        </div>
    </div>

<?php
get_footer();
