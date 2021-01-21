<?php
function mahmudul_crb_load() {
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'after_setup_theme', 'mahmudul_crb_load' );

require_once get_template_directory() . "/inc/meta-boxes/home-sections.php";