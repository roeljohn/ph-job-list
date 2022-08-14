<?php
$terms = get_terms([
    'taxonomy' => ''. $args .'_provinces',
    'hide_empty' => false,
]);

foreach ($terms as $term){
    echo $term->slug." : ";
    echo $term->name;
    echo "<br><br>";
  }