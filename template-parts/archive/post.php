<a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action border-0 px-0" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
      <p class="mb-1"><?php the_title(); ?></p>
      <small><?php echo get_the_date('j F Y', get_the_ID()) ?></small>
    </div>
  </a>