<?php get_header(); ?>

<?php the_archive_title( '<h1 class="page-title">', '</h1>' );
	?>





<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<?php
get_template_part( 'template-parts/forms/form', 'register', null );
    ?>
<?php endwhile; endif; wp_reset_postdata(); ?>

  <?php get_footer(); ?>