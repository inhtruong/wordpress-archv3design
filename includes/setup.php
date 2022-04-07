<?php
    if(!function_exists('wkt_theme_setup')) {
        function wkt_theme_setup() {
            // text domain - translate
            $lang_folder = get_theme_file_path( '/languages');
            load_theme_textdomain( 'wkt', $lang_folder );

            //title tag 
            add_theme_support('title-tag');
            add_theme_support(
                'html5',
                array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption')
            );

            // menu support
            register_nav_menu( 'wtk_primary_menu', __('Primary Menu','wtk') );

            // post thumbnail
            add_theme_support('post-thumbnails');
            // link rs
            add_theme_support('automatic-feed-link');

            //image size
            add_image_size('grid-post-thumbnail', 347, 260, true);
            add_image_size('full-post-thumbnail', 1266, 841, true);
            add_image_size('list-mini-thumbnail', 44, 44, true);
        }
    }
?>