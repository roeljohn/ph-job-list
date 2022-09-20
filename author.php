<?php 
    get_header(); 
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<div class="row g-5">
  <div class="col-md-8">
    <h2>About: <?php echo $curauth->nickname; ?></h2>
    <dl>
        <dt>Website</dt>
        <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
        <dt>Profile</dt>
        <dd><?php echo $curauth->user_description; ?></dd>
    </dl>
    <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
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

