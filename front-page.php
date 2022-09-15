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
<?php get_search_form(); ?>
<div class="row row-cols-1 row-cols-md-3 g-4">
    
    <?php
        $post_types = get_post_types( array( 'public' => true ), 'names', 'and' );
        // remove attachment from the list
        unset( $post_types['attachment'] );
        unset( $post_types['post'] );
        unset( $post_types['page'] );
        foreach ( $post_types  as $post_type ) {
            get_template_part( 'template-parts/content/content-province', '', $post_type);
        }
    ?>
</div>

<?php get_footer();