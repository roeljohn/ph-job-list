<?php get_header(); ?>

<?php the_archive_title( '<h1 class="page-title">', '</h1>' );
	?>


<div class="row g-5">
    <div class="col-md-8">

<div class="list-group mb-3">

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<?php
get_template_part( 'template-parts/forms/form', 'submit-job', null );
    ?>
<?php endwhile; endif; wp_reset_postdata(); ?>
</div>

    </div>

    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>