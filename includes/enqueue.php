<?php 
    if (!function_exists('wkt_enqueue')) {
        
        function wkt_enqueue() {
            $version = time();
            //css
            wp_register_style( 'wkt_google_font', 'http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700');
            wp_register_style( 'wkt_google_font_2', 'https://fonts.googleapis.com/css?family=Montserrat:700');
            wp_register_style( 'wkt_bootstrap', THEME_URI.'/assets/bootstrap/css/bootstrap.min.css');
            wp_register_style( 'wkt_magnific_popup', THEME_URI.'/assets/css/magnific-popup.css');
            wp_register_style( 'wkt_owl', THEME_URI.'/assets/css/owl.carousel.css');
            wp_register_style( 'wkt_flex_slider', THEME_URI.'/assets/css/flexslider.css');
            wp_register_style( 'wkt_animate', THEME_URI.'/assets/css/animate.min.css');
            wp_register_style( 'wkt_vertical', THEME_URI.'/assets/css/vertical.min.css');
            wp_register_style( 'wkt_template_blue', THEME_URI.'/assets/css/template-blue.css');

            wp_enqueue_style('wkt_google_font');
            wp_enqueue_style('wkt_google_font_2');
            wp_enqueue_style('wkt_bootstrap');
            wp_enqueue_style('wkt_magnific_popup');
            wp_enqueue_style('wkt_owl');
            wp_enqueue_style('wkt_flex_slider');
            wp_enqueue_style('wkt_animate');
            wp_enqueue_style('wkt_vertical');
            wp_enqueue_style('wkt_template_blue');

            // JS
            wp_deregister_script( 'jquery-core' );
            wp_register_script('wkt_font_awesome', 'https://kit.fontawesome.com/4f6aa91745.js', array(), $version, false);
            wp_register_script('jquery-core', THEME_URI.'/assets/js/jquery-2.2.3.min.js', array(), $version, 'in_footer');
            wp_register_script('wkt_google_api', 'http://maps.googleapis.com/maps/api/js?v=3', array(), $version, 'in_footer');
            wp_register_script('wkt_bootstrap', THEME_URI.'/assets/bootstrap/js/bootstrap.min.js', array('wkt_jquery'), $version, 'in_footer');
            wp_register_script('wkt_plugins', THEME_URI.'/assets/js/plugins.min.js', array(), $version, 'in_footer');
            wp_register_script('wkt_custom', THEME_URI.'/assets/js/custom.min.js', array(), $version, 'in_footer');

            wp_enqueue_script('wkt_font_awesome');
            wp_enqueue_script('jquery-core');
            wp_enqueue_script('wkt_google_api');
            wp_enqueue_script('wkt_bootstrap');
            wp_enqueue_script('wkt_plugins');
            wp_enqueue_script('wkt_custom');

        }
    }
?>