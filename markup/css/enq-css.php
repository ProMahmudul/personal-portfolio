#!/usr/bin/env php
<?php
foreach ( glob( '*.css' ) as $css ) {
    echo "wp_enqueue_style('mahmudul-{$css}', get_template_directory_uri().'/css/{$css}', null, _S_VERSION);\n";
}
