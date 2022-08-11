<div class="row g-5">
    <div class="col-md-8">
      <?php
        get_template_part( 'template-parts/content/post/post-title' );
        get_template_part( 'template-parts/content/post/post-content' );
        get_template_part( 'template-parts/content/post/post-navigation' );
      ?>
    </div>
    <?php get_sidebar(); ?>
</div>