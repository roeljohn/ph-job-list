<?php get_header(); ?>
<div class="row g-5">
  <div class="col-md-8">
    <h1> Search: <?php echo get_search_query(); ?></h1>
    <?php if ( have_posts() ) : ?>
      <div class="list-group mb-3">
      <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'template-parts/sections/part', 'list', null ); ?>
      <?php endwhile; ?>
      </div>
      <!-- end of the loop -->
      <?php wpbeginner_numeric_posts_nav(); ?>
      <!-- pagination here -->
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

