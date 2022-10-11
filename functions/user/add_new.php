<?php

function add_new_user_789() {
    //update media files title and alt tags here
    //
    // at the end redirect to target page
    wp_redirect( home_url('?message=success_new_user') );
}
add_action( 'admin_post_add_new_user908', 'add_new_user_789' );