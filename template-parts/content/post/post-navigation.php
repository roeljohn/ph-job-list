<nav class="blog-pagination" aria-label="Pagination">
    <?php 		
        the_post_navigation(
            array(
                /* translators: %s: Parent post link. */
                'prev_text' => sprintf( __( 'Older', 'ph-job-list' ), '%title' ),
                'next_text' => sprintf( __( 'Newer', 'ph-job-list' ), '%title' )
            )
		);
    ?>
</nav>