<?php

function add_job_custom_roles() {
    if ( get_option( 'employee' ) < 1 ) {
        add_role( 'employee', 'Employee', array( 'read' => true, 'level_0' => true ) );
        update_option( 'employee', 1 );
    }

    if ( get_option( 'employer' ) < 1 ) {
        add_role( 'employer', 'Employer', array( 
            'read' => true, 
            'delete_posts' => true,
            'delete_published_posts' => true,
            'edit_posts' => true,
            'edit_published_posts' => true,
            'publish_posts' => true,
            'upload_files' => true,
            'level_0' => true 
        ) );
        update_option( 'employer', 1 );
    }
}
add_action( 'init', 'add_job_custom_roles' );