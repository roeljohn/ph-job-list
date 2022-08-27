<?php get_header(); ?>
<?php 
 $queried_object = get_queried_object();
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $custom_args = array(
		'tax_query' => array(
			array(
				'taxonomy' => $queried_object->taxonomy,
				'field'    => 'slug',
				'terms'    => $queried_object->slug,
			),
		),
        'posts_per_page' => 10,
        'paged' => $paged
    );
    $custom_query = new WP_Query( $custom_args ); 
?>
<?php the_archive_title( '<h1 class="page-title">', '</h1>' );
	?>


<div class="row g-5">
    <div class="col-md-8">

<div class="list-group mb-3">

<?php if( $custom_query->have_posts() ) : while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
<?php
get_template_part( 'template-parts/archive/post', null );
    ?>
<?php endwhile; endif; wp_reset_postdata(); ?>
</div>
<?php
    if (function_exists('job_custom_pagination')) {
        job_custom_pagination($custom_query->max_num_pages,"",$paged);
    }
?>

    </div>

    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>