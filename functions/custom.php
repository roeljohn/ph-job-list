<?php

function count_province_post($post_type_name){
    if ($post_type_name){
        $count_pages = wp_count_posts( $post_type = $post_type_name );
        return $count_pages->publish;
    }
}

function get_employment_type(){
    // your taxonomy name
$tax = 'employment_types';

// get the terms of taxonomy
$terms = get_terms( $tax, $args = array(
  'hide_empty' => false, // do not hide empty terms
));

// loop through all terms
foreach( $terms as $term ) {

    // Get the term link
    $term_link = get_term_link( $term );

    if( $term->count > 0 )
        // display link to term archive
        echo '<a href="' . esc_url( $term_link ) . '">' . $term->name .'</a>';

    elseif( $term->count !== 0 )
        // display name
        echo '' . $term->name .'';
}
}