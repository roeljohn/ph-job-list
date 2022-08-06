<div class="row g-5">
    <div class="col-md-8">
      <h1 class="pb-4 mb-4 fst-italic border-bottom">
        <?php the_title(); ?>
      </h1>

      <article class="blog-post">
        <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
        <?php the_content(); ?>
      </article>




      <nav class="blog-pagination" aria-label="Pagination">
      <?php 		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf( __( 'Older', 'ph-job-list' ), '%title' ),
        'next_text' => sprintf( __( 'Newer', 'ph-job-list' ), '%title' )
			)
		);
    ?>
      </nav>
      

    </div>
  <?php get_sidebar(); ?>
  </div>