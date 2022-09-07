<form role="search" action="<?php echo esc_url( home_url( '/filter' ) ); ?>" method="GET">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Search</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
    <h5>Employee Type</h5>
    <?php 
    $terms = get_terms( 'employee_types' );
    if ( ! is_wp_error( $terms ) ){
        foreach ( $terms as $term ) {
           get_template_part( 'template-parts/forms/form', 'employee_type', $term );
        }
    }
    ?>
    <select class="form-select mb-3" name="province">
    <?php
        $post_types = get_post_types( array( 'public' => true ), 'names', 'and' );
        // remove attachment from the list
        unset( $post_types['attachment'] );
        unset( $post_types['post'] );
        unset( $post_types['page'] );
        foreach ( $post_types  as $post_type ) {
            get_template_part( 'template-parts/forms/form', 'province', $post_type );
        }
    ?>
    </select>
    <div class="col-12">
        <input class="btn btn-primary float-end" type="submit" value="Submit" />
    </div>
    
</form>