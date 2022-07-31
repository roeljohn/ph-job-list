<?php
/**
 * A front-page is a static homepage
 * Wordpress call this first instead of index.php or home.php
 * 
 * By default, WordPress sets your site’s home page to display your latest blog posts. This page
 * is called the blog posts index. You can also set your blog posts to display on a separate static
 * page. The template file home.php is used to render the blog posts index, whether it is being
 * used as the front page or on separate static page. If home.php does not exist, WordPress will
 * use index.php.
 * 
 * If front-page.php exists, it will override the home.php template
 * 
 * index.php last one to be called if home.php and front-page.php can find in wp
 */

get_header(); ?>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Manila <span class="badge text-bg-info float-end">13</span></h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <ol class="list-group list-group-numbered border-0">
                    <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Subheading</div>
                        Content for list item
                        </div>
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Subheading</div>
                        Content for list item
                        </div>
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Subheading</div>
                        Content for list item
                        </div>
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                </ol>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Bulacan <span class="badge text-bg-info float-end">15</span></h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Pampanga <span class="badge text-bg-info float-end">20</span></h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <img src="..." class="card-img-top" alt="...">
        </div>
    </div>
</div>

<?php get_footer();