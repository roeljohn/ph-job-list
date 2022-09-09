<?php

function count_province_post($post_type_name){
    if ($post_type_name){
        $count_pages = wp_count_posts( $post_type = $post_type_name );
        return $count_pages->publish;
    }
}