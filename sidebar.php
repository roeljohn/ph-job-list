<div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
      <?php if (is_single()) : ?>
        <?php get_template_part( 'template-parts/sidebar/sidebar', 'single' ); ?>
      <?php else : ?>
        <?php get_template_part( 'template-parts/sidebar/sidebar', 'form' ); ?>
      <?php endif; ?>

<div class="p-4">
      </div>
    </div>