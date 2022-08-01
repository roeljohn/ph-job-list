<div class="row g-5">
    <div class="col-md-8">
      <h1 class="pb-4 mb-4 fst-italic border-bottom">
        <?php the_title(); ?>
      </h1>

      <article class="blog-post">
        <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

     


      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
        <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
      </nav>

    </div>
  <?php get_sidebar(); ?>
  </div>