#!/usr/bin/env php
<?php
foreach ( glob( '*.js' ) as $js ) {
    echo "wp_enqueue_script('mahmudul-{$js}', get_template_directory_uri().'/js/{$js}', array('jquery'), _S_VERSION, true);\n";
}