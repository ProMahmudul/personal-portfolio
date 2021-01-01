<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function mahmudul_frontpage_meta() {
    Container::make( 'post_meta', __( 'Home Sections', 'mahmudul' ) )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_tab( __( 'Hero Section', 'mahmudul' ), array(
            Field::make( 'image', 'hero_image', __( 'Image', 'mahmudul' ) ),
            Field::make( 'text', 'hero_name', __( 'Name', 'mahmudul' ) ),
            Field::make( 'complex', 'hero_title', __( 'Bouncing Titles', 'mahmudul' ) )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make( 'text', 'title', __( 'Title', 'mahmudul' ) )
                ) ),
            Field::make( 'complex', 'hero_social', __( 'Social', 'mahmudul' ) )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make( 'text', 'social_name', __( 'Name', 'mahmudul' ) )->set_width( 20 ),
                    Field::make( 'text', 'social_icon', __( 'Icon', 'mahmudul' ) )->set_width( 20 ),
                    Field::make( 'text', 'social_link', __( 'Link', 'mahmudul' ) )->set_width( 60 )
                ) )
        ) )
        ->add_tab( __( 'About Me', 'mahmudul' ), array(
            Field::make( 'image', 'about_image', __( 'Image', 'mahmudul' ) )->set_width( 20 ),
            Field::make( 'textarea', 'about_description', __( 'Description', 'mahmudul' ) )->set_width( 80 ),
            Field::make( 'file', 'about_download_cv', __( 'CV Download Link' ) )->set_type( 'application/pdf' )->set_width( 20 ),
            Field::make( 'complex', 'about_others', __( 'Others Info' ) )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make( 'text', 'title', __( 'Title', 'mahmudul' ) )->set_width( 30 ),
                    Field::make( 'text', 'description', __( 'Description', 'mahmudul' ) )->set_width( 70 )
                ) )->set_width( 80 ),
            Field::make( 'complex', 'about_fun_facts', __( 'Fun Facts', 'mahmudul' ) )
                ->set_layout( 'tabbed-horizontal' )
                ->set_max( 4 )
                ->add_fields( array(
                    Field::make( 'text', 'icon', __( 'Icon', 'mahmudul' ) )->set_width( 30 ),
                    Field::make( 'text', 'amount', __( 'Amount', 'mahmudul' ) )->set_width( 20 ),
                    Field::make( 'text', 'title', __( 'Title', 'mahmudul' ) )->set_width( 50 )
                ) )
        ) )
        ->add_tab( __( 'Experience', 'mahmudul' ), array(
            Field::make( 'complex', 'mahmudul_experience_items' )
                ->set_layout( 'tabbed-horizontal' )
                ->set_max( 6 )
                ->add_fields( 'education', array(
                    Field::make( 'text', 'edu_time', __( 'Time', 'mahmudul' ) )->set_width( 50 ),
                    Field::make( 'text', 'edu_title', __( 'Title', 'mahmudul' ) )->set_width( 50 ),
                    Field::make( 'textarea', 'edu_description', __( 'Description', 'mahmudul' ) )->set_rows( 2 )
                ) )
                ->add_fields( 'experience', array(
                    Field::make( 'text', 'exp_time', __( 'Time', 'mahmudul' ) )->set_width( 50 ),
                    Field::make( 'text', 'exp_title', __( 'Title', 'mahmudul' ) )->set_width( 50 ),
                    Field::make( 'textarea', 'exp_description', __( 'Description', 'mahmudul' ) )->set_rows( 2 )
                ) )
        ) );

    Container::make( 'post_meta', __( 'Skill Extra Info', 'mahmudul' ) )
        ->where( 'post_type', '=', 'skill' )
        ->add_fields( array(
            Field::make( 'text', 'skill_percentage', __( 'Percentage', 'mahmudul' ) )->set_width( 50 ),
            Field::make( 'color', 'skill_color', __( 'Bar Color', 'mahmudul' ) )->set_width( 50 )
                ->set_palette( array( '#FFD15C', '#6C6CE5', '#FF4C60' ) )
                ->set_alpha_enabled( true ),
        ) );

    Container::make( 'term_meta', __( 'Show Active', 'mahmudul' ) )
        ->where( 'term_taxonomy', '=', 'skill_category' )
        ->add_fields( array(
            Field::make( 'checkbox', 'skill_category_status', __( 'Active', 'mahmudul' ) )
        ) );

    /**
     * Services
     */

    Container::make( 'post_meta', __( 'Service Color', 'mahmudul' ) )
        ->where( 'post_type', '=', 'service' )
        ->set_context( 'side' )
        ->add_fields( array(
            Field::make( 'color', 'service_color', __( 'Card Color', 'mahmudul' ) )
                ->set_palette( array( '#6C6CE5', '#FFD15C', '#FF4C60' ) )
                ->set_alpha_enabled( true ),
            Field::make( 'checkbox', 'service_text_light', __( 'Text Light', 'mahmudul' ) ),
            Field::make( 'select', 'service_shadow', __( 'Box Shadow' ) )
                ->set_options( array(
                    'shadow-blue'   => __( 'Blue' ),
                    'shadow-yellow' => __( 'Yellow' ),
                    'shadow-pink'   => __( 'Pink' ),
                ) )
        ) );

    /**
     * Portfolio
     */

    Container::make( 'post_meta', __( 'Portfolio Extra', 'mahmudul' ) )
        ->where( 'post_type', '=', 'portfolio' )
        ->set_context( 'side' )
        ->add_fields( array(
            Field::make( 'select', 'mahmudul_portfolio_type', __( 'Portfolio Type' ) )
                ->set_options( array(
                    'normal' => __( 'Normal' ),
                    'popup'  => __( 'Popup' ),
                ) )
        ) );

    Container::make( 'post_meta', __( 'Portfolio Popup Info', 'mahmudul' ) )
        ->where( 'post_type', '=', 'portfolio' )
        ->where( 'post_id', 'CUSTOM', function ( $id ) {
            if ( carbon_get_post_meta( $id, 'mahmudul_portfolio_type' ) == 'popup' ) {
                return true;
            }
            return false;
        } )
        ->add_fields( array(
            Field::make( 'image', 'portfolio_image', __( 'Image', 'mahmudul' ) ),
            Field::make( 'text', 'portfolio_btn_title', __( 'Button Title', 'mahmudul' ) )->set_width( 30 ),
            Field::make( 'text', 'portfolio_btn_link', __( 'Button Link', 'mahmudul' ) )->set_width( 70 ),
        ) );

    Container::make( 'post_meta', __( 'Portfolio Info', 'mahmudul' ) )
        ->where( 'post_type', '=', 'portfolio' )
        ->where( 'post_id', 'CUSTOM', function ( $id ) {
            if ( carbon_get_post_meta( $id, 'mahmudul_portfolio_type' ) == 'normal' ) {
                return true;
            }
            return false;
        } )
        ->add_fields( array(
            Field::make( 'text', 'portfolio_link', __( 'Portfolio Link', 'mahmudul' ) )->set_width( 70 ),
        ) );

    /**
     * Test Conditional
     */

    Container::make( 'post_meta', 'Custom Data' )
        ->where( 'post_type', '=', 'post' )
        ->set_context( 'side' )
        ->add_fields( array(
            Field::make( 'checkbox', 'crb_show_content', __( 'Show Content' ) )
                ->set_option_value( 'yes' )
        ) );

    Container::make( 'post_meta', 'Extra Data' )
        ->where( 'post_type', '=', 'post' )
        ->where( 'post_id', 'CUSTOM', function ( $id ) {
            if ( carbon_get_post_meta( $id, 'crb_show_content' ) == 'yes' ) {
                return true;
            }
            return false;
        } )
        ->set_context( 'side' )
        ->add_fields( array(
            Field::make( 'text', 'crb_phone_number', __( 'Phone Number' ) )
        ) );

}

add_action( 'carbon_fields_register_fields', 'mahmudul_frontpage_meta' );
