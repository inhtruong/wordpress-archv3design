<?php
    if(!function_exists('wkt_post_excerpt')){
        function wkt_post_excerpt($limit, $id_post){
            // string rất dài
            $excerpt = explode(' ', get_the_excerpt(  ), $limit + 1);
            array_pop($excerpt);
            $excerpt = implode(' ',$excerpt );
                //    .'... <a href="'.get_permalink( $id_post )
                //    .'">'.__('Read more','wkt').'</a>';
            echo $excerpt;
        }
    }
    if(!function_exists('wkt_post_title')){
        function wkt_post_title($limit, $id_post){
            // string rất dài
            $title = explode(' ', get_the_excerpt(  ), $limit);
            array_pop($title);
            $title = implode(' ',$title );
            echo $title;
        }
    }
?>