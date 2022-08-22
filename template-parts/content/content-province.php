
<div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title"><?php echo $args; ?> <span class="badge text-bg-info float-end">13</span></h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <?php get_template_part( 'template-parts/content/province/province', 'cities', $args); ?>
            </div>
        </div>
    </div>