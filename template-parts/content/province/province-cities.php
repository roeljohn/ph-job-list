<?php
    $terms = get_terms([
        'taxonomy' => ''. $args .'_cities',
        'hide_empty' => false,
    ]);
?>
<ol class="list-group list-group-numbered border-0">
    <?php
        foreach ($terms as $term){
            $term_link = get_term_link( $term );
            get_template_part( 'template-parts/content/province/cities/city', '', array( 
                'city_data'  => array(
                  'name' => $term->name,
                  'job_count' => $term->count,
                  'city_link' => $term_link
                 )
            ));
        }
    ?>
</ol>