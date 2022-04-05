<?php

// SET UP - DEFINE
define('THEME_URI', get_theme_file_uri( ));

// INCLUDES 
include(get_theme_file_path( ).'/includes/enqueue.php');
include(get_theme_file_path('/includes/setup.php' ));

// HOOK ACTION - FILTER
add_action('wp_enqueue_scripts', 'wkt_enqueue');
add_action('init', 'wkt_theme_setup');

// SHORT CODE


?>