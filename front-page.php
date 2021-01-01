<?php get_header() ?>

<!-- main layout -->
<main class="content-3">

    <!-- section home -->
    <section id="home" class="home light d-flex align-items-center">
        <div class="container">

            <!-- intro -->
            <div class="intro">
                <!-- avatar image -->
                <?php
                echo wp_get_attachment_image( carbon_get_the_post_meta( 'hero_image' ), 'thumbnail', false, array( 'class' => 'mb-4' ) );
                ?>

                <!-- info -->
                <h1 class="mb-2 mt-0"><?php echo carbon_get_the_post_meta( 'hero_name' ) ?></h1>
                <span><?php esc_attr_e( 'I\'m a', 'mahmudul' ); ?>
                    <span class="text-rotating">
                        <?php
                        $hero_title = carbon_get_the_post_meta( 'hero_title' );
                        $lastEl     = end( $hero_title );
                        if ( $hero_title ) {
                            foreach ( $hero_title as $value ) {
                                echo $value['title'];
                                if ( $value['title'] != $lastEl['title'] ) {
                                    echo ', ';
                                }
                            }
                        }
                        ?>
                    </span>
                </span>

                <!-- social icons -->
                <ul class="social-icons light list-inline mb-0 mt-4">
                    <?php
                    $hero_social = carbon_get_the_post_meta( 'hero_social' );
                    if ( $hero_social ) {
                        foreach ( $hero_social as $social ):
                            ?>
                            <li class="list-inline-item"><a href="<?php echo $social['social_link'] ?>" target="_blank"><i
                                            class="<?php echo $social['social_icon'] ?>"></i></a></li>
                        <?php
                        endforeach;
                    }
                    ?>

                </ul>

                <!-- buttons -->
                <div class="mt-4">
                    <a href="#contact" class="btn btn-default"><?php esc_html_e( 'Hire me', 'mahmudul' ); ?></a>
                </div>
            </div>

            <!-- scroll down mouse wheel -->
            <div class="scroll-down light">
                <a href="#about" class="mouse-wrapper">
                    <span><?php esc_html_e( 'Scroll Down', 'mahmudul' ); ?></span>
                    <span class="mouse">
						<span class="wheel"></span>
					</span>
                </a>
            </div>

            <!-- parallax layers -->
            <div class="parallax" data-relative-input="true">

                <svg width="27" height="29" data-depth="0.3" class="layer p1" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.15625.60099c4.37954 3.67487 6.46544 9.40612 5.47254 15.03526-.9929 5.62915-4.91339 10.30141-10.2846 12.25672-5.37122 1.9553-11.3776.89631-15.75715-2.77856l2.05692-2.45134c3.50315 2.93948 8.3087 3.78663 12.60572 2.22284 4.297-1.5638 7.43381-5.30209 8.22768-9.80537.79387-4.50328-.8749-9.08872-4.37803-12.02821L21.15625.60099z"
                          fill="#FFD15C" fill-rule="evenodd"/>
                </svg>

                <svg width="26" height="26" data-depth="0.2" class="layer p2" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 3.3541L2.42705 24.5h21.1459L13 3.3541z" stroke="#FF4C60" stroke-width="3" fill="none"
                          fill-rule="evenodd"/>
                </svg>

                <svg width="30" height="25" data-depth="0.3" class="layer p3" xmlns="http://www.w3.org/2000/svg">
                    <path d="M.1436 8.9282C3.00213 3.97706 8.2841.92763 14.00013.92796c5.71605.00032 10.9981 3.04992 13.85641 8 2.8583 4.95007 2.8584 11.0491-.00014 16.00024l-2.77128-1.6c2.28651-3.96036 2.28631-8.84002.00011-12.8002-2.2862-3.96017-6.5124-6.40017-11.08513-6.4-4.57271.00018-8.79872 2.43984-11.08524 6.4002l-2.77128-1.6z"
                          fill="#44D7B6" fill-rule="evenodd"/>
                </svg>

                <svg width="15" height="23" data-depth="0.6" class="layer p4" xmlns="http://www.w3.org/2000/svg">
                    <rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#FFD15C"
                          fill-rule="evenodd"/>
                </svg>

                <svg width="15" height="23" data-depth="0.2" class="layer p5" xmlns="http://www.w3.org/2000/svg">
                    <rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5"
                          fill-rule="evenodd"/>
                </svg>

                <svg width="49" height="17" data-depth="0.5" class="layer p6" xmlns="http://www.w3.org/2000/svg">
                    <g fill="#FF4C60" fill-rule="evenodd">
                        <path d="M.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C23.1175 5.50106 25.5 10.78292 25.5 16.5H23c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0C4.90625 7.70116 3 11.92697 3 16.5H.5z"/>
                        <path d="M23.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C46.1175 5.50106 48.5 10.78292 48.5 16.5H46c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0-3.09375 2.28651-5 6.51232-5 11.08535h-2.5z"/>
                    </g>
                </svg>

                <svg width="26" height="26" data-depth="0.4" class="layer p7" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 22.6459L2.42705 1.5h21.1459L13 22.6459z" stroke="#FFD15C" stroke-width="3" fill="none"
                          fill-rule="evenodd"/>
                </svg>

                <svg width="19" height="21" data-depth="0.3" class="layer p8" xmlns="http://www.w3.org/2000/svg">
                    <rect transform="rotate(-40 6.25252 10.12626)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5"
                          fill-rule="evenodd"/>
                </svg>

                <svg width="30" height="25" data-depth="0.3" data-depth-y="-1.30" class="layer p9"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M29.8564 16.0718c-2.85854 4.95114-8.1405 8.00057-13.85654 8.00024-5.71605-.00032-10.9981-3.04992-13.85641-8-2.8583-4.95007-2.8584-11.0491.00014-16.00024l2.77128 1.6c-2.28651 3.96036-2.28631 8.84002-.00011 12.8002 2.2862 3.96017 6.5124 6.40017 11.08513 6.4 4.57271-.00018 8.79872-2.43984 11.08524-6.4002l2.77128 1.6z"
                          fill="#6C6CE5" fill-rule="evenodd"/>
                </svg>

                <svg width="47" height="29" data-depth="0.2" class="layer p10" xmlns="http://www.w3.org/2000/svg">
                    <g fill="#44D7B6" fill-rule="evenodd">
                        <path d="M46.78878 17.19094c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36265-9.0893-.26708-11.74616-4.27524-2.65686-4.00817-3.08917-9.78636-1.13381-15.15866l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12693 2.12514 3.20674 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40949 8.48988-8.70673l2.34923.85505z"/>
                        <path d="M25.17585 9.32448c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36264-9.0893-.26708-11.74616-4.27525C.16049 11.92447-.27182 6.14628 1.68354.77398l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12692 2.12514 3.20675 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40948 8.48988-8.70672l2.34923.85505z"/>
                    </g>
                </svg>

                <svg width="33" height="20" data-depth="0.5" class="layer p11" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32.36774.34317c.99276 5.63023-1.09332 11.3614-5.47227 15.03536-4.37895 3.67396-10.3855 4.73307-15.75693 2.77837C5.76711 16.2022 1.84665 11.53014.8539 5.8999l3.15139-.55567c.7941 4.50356 3.93083 8.24147 8.22772 9.8056 4.29688 1.56413 9.10275.71673 12.60554-2.2227C28.34133 9.98771 30.01045 5.4024 29.21635.89884l3.15139-.55567z"
                          fill="#FFD15C" fill-rule="evenodd"/>
                </svg>

            </div>
        </div>

    </section>

    <!-- section about -->
    <section id="about">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp"><?php esc_html_e( 'About Me', 'mahmudul' ); ?></h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-3">
                    <div class="text-center text-md-left">
                        <!-- avatar image -->
                        <?php echo wp_get_attachment_image( carbon_get_the_post_meta( 'about_image' ), 'thumbnail' ) ?>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-9 triangle-left-md triangle-top-sm">
                    <div class="rounded bg-white shadow-dark padding-30">
                        <div class="row grid-divider">
                            <div class="col-md-6">
                                <!-- about text -->
                                <p class="text-justify"><?php echo carbon_get_the_post_meta( 'about_description' ); ?></p>
                                <div class="mt-3">
                                    <a href="<?php echo wp_get_attachment_url( carbon_get_the_post_meta( 'about_download_cv' ) ) ?>"
                                       class="btn btn-default"
                                       target="_blank"><?php esc_html_e( 'Download CV', 'mahmudul' ); ?></a>
                                </div>
                                <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                            </div>
                            <div class="col-md-6">
                                <ul class="about-extra">
                                    <?php
                                    $others_info = carbon_get_the_post_meta( 'about_others' );
                                    foreach ( $others_info as $info ):
                                        ?>
                                        <li><p><label><span><?php echo $info['title']; ?></span>
                                                    <span> <?php esc_attr_e( ' :', 'mahmudul' ); ?></span></label><span><?php echo $info['description'] ?></span>
                                            </p></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- row end -->

            <div class="spacer" data-height="70"></div>

            <div class="row">
                <?php
                $about_fun_facts = carbon_get_the_post_meta( 'about_fun_facts' );
                foreach ( $about_fun_facts as $fun_fact ):
                    ?>
                    <div class="col-md-<?php echo 12 / count( $about_fun_facts ); ?> col-sm-6">
                        <!-- fact item -->
                        <div class="fact-item">
                            <span class="<?php echo $fun_fact['icon']; ?>"></span>
                            <div class="details">
                                <h3 class="mb-0 mt-0 number"><em class="count"><?php echo $fun_fact['amount']; ?></em>
                                </h3>
                                <p class="mb-0"><?php echo $fun_fact['title']; ?></p>
                            </div>
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </section>

    <!-- section skill -->
    <section id="skill">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp"><?php esc_html_e( 'Skills', 'mahmudul' ); ?></h2>

            <div class="spacer" data-height="60"></div>

            <?php
            $skill_category = get_terms( array(
                'taxonomy'   => 'skill_category',
                'hide_empty' => true,
                'order_by'   => 'term_id',
                'order'      => 'DESC'
            ) );

            $args = array(
                'post_type'      => 'skill',
                'post_status'    => 'publish',
                'posts_per_page' => '-1',
                'orderby'        => 'publish_date',
                'order'          => 'ASC'
            );

            $skills = new WP_Query( $args );
            ?>

            <!-- Skill filter (desktop) -->
            <ul class="skill-filter list-inline wow fadeInUp">
                <?php foreach ( $skill_category as $item ): ?>
                    <?php $checkbox_check = carbon_get_term_meta( $item->term_id, 'skill_category_status' ); ?>
                    <li class="list-inline-item <?php $checkbox_check ? esc_html_e( 'current', 'mahmudul' ) : ''; ?>"
                        data-filter=".<?php echo $item->slug ?>"><?php echo $item->name ?></li>
                <?php endforeach; ?>
            </ul>

            <!-- skill filter (mobile) -->
            <div class="skill-filter-wrapper">
                <select class="skill-filter-mobile form-control">
                    <?php foreach ( $skill_category as $item ): ?>
                        <option value=".<?php echo $item->slug ?>"><?php echo $item->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- skill wrapper -->
            <div class="row skill-wrapper">

                <?php while ( $skills->have_posts() ): $skills->the_post(); ?>
                    <?php $skill_category = get_the_terms( get_the_ID(), 'skill_category' ); ?>
                    <!-- skill item -->
                    <div class="col-md-6 grid-item <?php echo $skill_category[0]->slug; ?>">
                        <div class="skill-item">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0"><?php the_title(); ?></h4>
                                <span class="float-right"><?php echo carbon_get_the_post_meta( 'skill_percentage' );
                                    esc_html_e( '%', 'mahmudul' ); ?></span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                     aria-valuemax="100"
                                     aria-valuenow="<?php echo carbon_get_the_post_meta( 'skill_percentage' ); ?>"
                                     data-color="<?php echo carbon_get_the_post_meta( 'skill_color' ); ?>">
                                </div>
                            </div>
                            <div class="spacer" data-height="20"></div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </section>

    <!-- section services -->
    <section id="services">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp"><?php esc_html_e( 'Services', 'mahmudul' ); ?></h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">
                <?php
                $args = array(
                    'post_type'      => 'service',
                    'post_status'    => 'publish',
                    'posts_per_page' => '-1',
                    'orderby'        => 'publish_date',
                    'order'          => 'ASC'
                );

                $skills = new WP_Query( $args );
                while ( $skills->have_posts() ):
                    $skills->the_post();
                    ?>

                    <div class="col-md-4">
                        <!-- service box -->
                        <div class="service-box rounded data-background padding-30 text-center <?php carbon_get_the_post_meta( 'service_text_light' ) ? esc_html_e( 'text-light ' ) : '';
                        echo carbon_get_the_post_meta( 'service_shadow' ); ?>"
                             data-color="<?php echo carbon_get_the_post_meta( 'service_color' ); ?>">
                            <?php echo get_the_post_thumbnail(); ?>
                            <h3 class="mb-3 mt-0"><?php the_title(); ?></h3>
                            <p class="mb-0"><?php the_content(); ?></p>
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>

                <?php
                endwhile;
                wp_reset_postdata();
                ?>


            </div>

            <div class="mt-5 text-center">
                <p class="mb-0"><?php esc_html_e( 'Looking for a custom job?', 'mahmudul' ); ?> <a
                            href="#contact"><?php esc_html_e( 'Click here', 'mahmudul' ); ?></a> <?php esc_html_e( 'to contact me! 👋', 'mahmudul' ); ?>
                </p>
            </div>

        </div>

    </section>

    <!-- section experience -->
    <section id="experience">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp"><?php esc_html_e( 'Experience', 'mahmudul' ); ?></h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">
                <?php $mahmudul_experience = carbon_get_the_post_meta( 'mahmudul_experience_items' ); ?>

                <div class="col-md-6">

                    <!-- timeline wrapper -->
                    <div class="timeline edu bg-white rounded shadow-dark padding-30 overflow-hidden">
                        <?php
                        foreach ( $mahmudul_experience as $item ):
                            if ( $item['_type'] == 'education' ):
                                ?>
                                <!-- timeline item -->
                                <div class="timeline-container wow fadeInUp">
                                    <div class="content">
                                        <span class="time"><?php echo $item['edu_time']; ?></span>
                                        <h3 class="title"><?php echo $item['edu_title']; ?></h3>
                                        <p><?php echo $item['edu_description']; ?></p>
                                    </div>
                                </div>
                            <?php
                            endif;
                        endforeach;
                        ?>

                        <!-- main line -->
                        <span class="line"></span>

                    </div>

                </div>

                <div class="col-md-6">

                    <!-- responsive spacer -->
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>

                    <!-- timeline wrapper -->
                    <div class="timeline exp bg-white rounded shadow-dark padding-30 overflow-hidden">
                        <?php
                        foreach ( $mahmudul_experience as $item ):
                            if ( $item['_type'] == 'experience' ):
                                ?>
                                <!-- timeline item -->
                                <div class="timeline-container wow fadeInUp">
                                    <div class="content">
                                        <span class="time"><?php echo $item['exp_time']; ?></span>
                                        <h3 class="title"><?php echo $item['exp_title']; ?></h3>
                                        <p><?php echo $item['exp_description']; ?></p>
                                    </div>
                                </div>
                            <?php
                            endif;
                        endforeach;
                        ?>

                        <!-- main line -->
                        <span class="line"></span>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- section works -->
    <section id="works">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Recent works</h2>

            <div class="spacer" data-height="60"></div>
            <?php

            $portfolio_category = get_terms( array(
                'taxonomy'   => 'portfolio_category',
                'hide_empty' => true,
                'order_by'   => 'term_id',
                'order'      => 'ASC'
            ) );

            $args = array(
                'post_type'      => 'portfolio',
                'post_status'    => 'publish',
                'posts_per_page' => '-1',
                'orderby'        => 'publish_date',
                'order'          => 'DESC'
            );

            $mahmudul_portfolio_items           = new WP_Query( $args );
            $mahmudul_portfolio_item_categories = [];
            $mahmudul_number_of_portfolio_items = 6;
            $mahmudul_counter                   = 0;


            if ( count( $mahmudul_portfolio_items->posts ) > 0 ) {
                foreach ( $mahmudul_portfolio_items->posts as $mahmudul_portfolio_item ) {
                    if ( $mahmudul_counter >= $mahmudul_number_of_portfolio_items ) {
                        break;
                    }

                    $mahmudul_portfolio_item_cats = wp_get_object_terms( $mahmudul_portfolio_item->ID, 'portfolio_category', array( 'fields' => 'names' ) );

                    foreach ( $mahmudul_portfolio_item_cats as $mahmudul_portfolio_item_category ) {
                        $mahmudul_portfolio_item_category = trim( $mahmudul_portfolio_item_category );
                        if ( !in_array( $mahmudul_portfolio_item_category, $mahmudul_portfolio_item_categories ) ) {
                            array_push( $mahmudul_portfolio_item_categories, $mahmudul_portfolio_item_category );
                        }
                    }
                    $mahmudul_counter++;
                }
            }

            ?>

            <!-- portfolio filter (desktop) -->
            <ul class="portfolio-filter list-inline wow fadeInUp">
                <?php //$current_check ? esc_html_e( 'current', 'mahmudul' ) : ''; ?>
                <li class="list-inline-item current"
                    data-filter="*"><?php esc_html_e( 'All', 'mahmudul' ); ?></li>
                <?php foreach ( $mahmudul_portfolio_item_categories as $category ): ?>
                    <li class="list-inline-item"
                        data-filter=".<?php echo strtolower( $category ); ?>"><?php echo $category; ?></li>
                <?php endforeach; ?>
            </ul>


            <!-- portfolio filter (mobile) -->
            <div class="pf-filter-wrapper">
                <select class="portfolio-filter-mobile form-control">
                    <option value="*"><?php esc_html_e( 'All', 'mahmudul' ); ?></option>
                    <?php foreach ( $mahmudul_portfolio_item_categories as $category ): ?>
                        <option value=".<?php echo strtolower( $category ); ?>"><?php echo $category; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- portolio wrapper -->
            <div class="row portfolio-wrapper"
                 data-portfolios="<?php esc_attr_e( $mahmudul_number_of_portfolio_items ); ?>"
                 data-ni="<?php esc_attr_e( $mahmudul_number_of_portfolio_items ); ?>">

                <?php
                $mahmudul_counter = 0;
                while ( $mahmudul_portfolio_items->have_posts() ):
                    $mahmudul_portfolio_items->the_post();
                    if ( $mahmudul_counter >= $mahmudul_number_of_portfolio_items ) {
                        break;
                    }

                    $portfolio_item_categories = get_the_terms( get_the_ID(), 'portfolio_category' );
                    $portfolio_categories      = implode( " ", wp_list_pluck( $portfolio_item_categories, 'name' ) );
                    $portfolio_tags            = implode( " | ", wp_list_pluck( $portfolio_item_categories, 'name' ) );

                    if ( carbon_get_the_post_meta( 'mahmudul_portfolio_type' ) == 'popup' ):
                        ?>

                        <!-- portfolio item -->
                        <div class="col-md-4 col-sm-6 grid-item <?php echo strtolower( $portfolio_categories ); ?>">
                            <a href="#small-dialog" class="work-content">
                                <div class="portfolio-item rounded shadow-dark">
                                    <div class="details">
                                        <span class="term"><?php echo $portfolio_tags; ?></span>
                                        <h4 class="title"><?php the_title(); ?></h4>
                                        <span class="more-button"><i class="icon-options"></i></span>
                                    </div>
                                    <div class="thumb">
                                        <?php the_post_thumbnail(); ?>
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                            <div id="small-dialog" class="white-popup zoom-anim-dialog mfp-hide">
                                <?php echo wp_get_attachment_image( carbon_get_the_post_meta( 'portfolio_image' ), 'original' ); ?>
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                                <a href="<?php echo carbon_get_the_post_meta( 'portfolio_btn_link' ); ?>"
                                   class="btn btn-default"
                                   target="_blank"><?php echo carbon_get_the_post_meta( 'portfolio_btn_title' ); ?></a>
                            </div>
                        </div>
                    <?php elseif ( carbon_get_the_post_meta( 'mahmudul_portfolio_type' ) == 'normal' ): ?>
                        <!-- portfolio item -->
                        <div class="col-md-4 col-sm-6 grid-item <?php echo strtolower( $portfolio_categories ); ?>">
                            <a href="<?php echo carbon_get_the_post_meta( 'portfolio_link' ); ?>" target="_blank">
                                <div class="portfolio-item rounded shadow-dark">
                                    <div class="details">
                                        <span class="term"><?php echo $portfolio_tags; ?></span>
                                        <h4 class="title"><?php the_title(); ?></h4>
                                        <span class="more-button"><i class="icon-link"></i></span>
                                    </div>
                                    <div class="thumb">
                                        <?php the_post_thumbnail(); ?>
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php
                    $mahmudul_counter++;
                endwhile;
                wp_reset_postdata();
                ?>

            </div>

            <!-- more button -->
            <div class="load-more text-center mt-4">
                <a href="javascript:" class="btn btn-default"><i
                            class="fas fa-spinner"></i><?php esc_html_e( 'Load more', 'mahmudul' ); ?></a>
                <!-- numbered pagination (hidden for infinite scroll) -->
                <ul class="portfolio-pagination list-inline d-none">
                    <li class="list-inline-item">1</li>
                    <li class="list-inline-item"><a href="works-2.html">2</a></li>
                </ul>
            </div>

        </div>

    </section>

    <!-- section prices -->
    <section id="prices">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeIn">Pricing Plans</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-4 pr-md-0 mt-md-4 mt-0">
                    <!-- price item -->
                    <div class="price-item bg-white rounded shadow-dark text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/price-1.svg" alt="Regular"/>
                        <h2 class="plan">Basic</h2>
                        <p>A Simple option but powerful to manage your business</p>
                        <p>Email support</p>
                        <h3 class="price"><em>$</em>9<span>Month</span></h3>
                        <a href="#" class="btn btn-default">Get Started</a>
                    </div>
                </div>

                <div class="col-md-4 px-md-0 my-4 my-md-0">
                    <!-- price item recommended-->
                    <div class="price-item bg-white rounded shadow-dark text-center best">
                        <span class="badge">Recommended</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/price-2.svg" alt="Premium"/>
                        <h2 class="plan">Premium</h2>
                        <p>Unlimited product including apps integrations and more features</p>
                        <p>Mon-Fri support</p>
                        <h3 class="price"><em>$</em>49<span>Month</span></h3>
                        <a href="#" class="btn btn-default">Get Started</a>
                    </div>
                </div>

                <div class="col-md-4 pl-md-0 mt-md-4 mt-0">
                    <!-- price item -->
                    <div class="price-item bg-white rounded shadow-dark text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/price-3.svg" alt="Ultimate"/>
                        <h2 class="plan">Ultimate</h2>
                        <p>A wise option for large companies and individuals</p>
                        <p>24/7 support</p>
                        <h3 class="price"><em>$</em>99<span>Month</span></h3>
                        <a href="#" class="btn btn-default">Get Started</a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- section testimonials -->
    <section id="testimonials">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Clients & Reviews</h2>

            <div class="spacer" data-height="60"></div>

            <!-- testimonials wrapper -->
            <div class="testimonials-wrapper">

                <!-- testimonial item -->
                <div class="testimonial-item text-center mx-auto">
                    <div class="thumb mb-3 mx-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/avatar-3.svg" alt="customer-name"/>
                    </div>
                    <h4 class="mt-3 mb-0">John Doe</h4>
                    <span class="subtitle">Product designer at Dribbble</span>
                    <div class="bg-white padding-30 shadow-dark rounded triangle-top position-relative mt-4">
                        <p class="mb-0">I enjoy working with the theme and learn so much. You guys make the process fun
                            and interesting. Good luck! 👍</p>
                    </div>
                </div>

                <!-- testimonial item -->
                <div class="testimonial-item text-center mx-auto">
                    <div class="thumb mb-3 mx-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/avatar-1.svg" alt="customer-name"/>
                    </div>
                    <h4 class="mt-3 mb-0">John Doe</h4>
                    <span class="subtitle">Product designer at Dribbble</span>
                    <div class="bg-white padding-30 shadow-dark rounded triangle-top position-relative mt-4">
                        <p class="mb-0">I enjoy working with the theme and learn so much. You guys make the process fun
                            and interesting. Good luck! 🔥</p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/client-1.svg"
                                 alt="client-name"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/client-2.svg"
                                 alt="client-name"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/client-3.svg"
                                 alt="client-name"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/client-4.svg"
                                 alt="client-name"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/client-5.svg"
                                 alt="client-name"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/client-6.svg"
                                 alt="client-name"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/client-7.svg"
                                 alt="client-name"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/client-8.svg"
                                 alt="client-name"/>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- section blog -->
    <section id="blog">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Latest Posts</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row blog-wrapper">

                <div class="col-md-4">
                    <!-- blog item -->
                    <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                        <div class="thumb">
                            <a href="#">
                                <span class="category">Reviews</span>
                            </a>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog/1.svg"
                                     alt="blog-title"/>
                            </a>
                        </div>
                        <div class="details">
                            <h4 class="my-0 title"><a href="#">5 Best App Development Tool for Your Project</a></h4>
                            <ul class="list-inline meta mb-0 mt-2">
                                <li class="list-inline-item">09 February, 2020</li>
                                <li class="list-inline-item">Bolby</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- blog item -->
                    <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                        <div class="thumb">
                            <a href="#">
                                <span class="category">Tutorial</span>
                            </a>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog/2.svg"
                                     alt="blog-title"/>
                            </a>
                        </div>
                        <div class="details">
                            <h4 class="my-0 title"><a href="#">Common Misconceptions About Payment</a></h4>
                            <ul class="list-inline meta mb-0 mt-2">
                                <li class="list-inline-item">07 February, 2020</li>
                                <li class="list-inline-item">Bolby</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- blog item -->
                    <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                        <div class="thumb">
                            <a href="#">
                                <span class="category">Business</span>
                            </a>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog/3.svg"
                                     alt="blog-title"/>
                            </a>
                        </div>
                        <div class="details">
                            <h4 class="my-0 title"><a href="#">3 Things To Know About Startup Business</a></h4>
                            <ul class="list-inline meta mb-0 mt-2">
                                <li class="list-inline-item">06 February, 2020</li>
                                <li class="list-inline-item">Bolby</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <!-- more button -->
            <div class="text-center mt-5">
                <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="btn btn-default"><i
                            class="fas fa-spinner"></i> View more</a>
            </div>

        </div>

    </section>

    <!-- section contact -->
    <section id="contact">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Get In Touch</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-4">
                    <!-- contact info -->
                    <div class="contact-info">
                        <h3 class="wow fadeInUp">Let's talk about everything!</h3>
                        <p class="wow fadeInUp">Don't like forms? Send me an <a
                                    href="mailto:<?php echo get_option( 'admin_email' ); ?>">email</a>.
                            👋</p>
                    </div>
                </div>

                <div class="col-md-8">
                    <!-- Contact Form -->
                    <form id="contact-form" class="contact-form mt-6" method="post"
                          action="https://jthemes.net/themes/html/bolby/demo/form/contact.php">

                        <div class="messages"></div>

                        <div class="row">
                            <div class="column col-md-6">
                                <!-- Name input -->
                                <div class="form-group">
                                    <input type="text" class="form-control" name="InputName" id="InputName"
                                           placeholder="Your name" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-6">
                                <!-- Email input -->
                                <div class="form-group">
                                    <input type="email" class="form-control" id="InputEmail" name="InputEmail"
                                           placeholder="Email address" required="required"
                                           data-error="Email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-12">
                                <!-- Email input -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="InputSubject" name="InputSubject"
                                           placeholder="Subject" required="required" data-error="Subject is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-12">
                                <!-- Message textarea -->
                                <div class="form-group">
                                    <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5"
                                              placeholder="Message" required="required"
                                              data-error="Message is required."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Send
                            Message
                        </button><!-- Send Button -->

                    </form>
                    <!-- Contact Form end -->
                </div>

            </div>

        </div>

    </section>

    <div class="spacer" data-height="96"></div>
</main>

<?php get_footer(); ?>
