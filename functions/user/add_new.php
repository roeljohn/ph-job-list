<?php

function add_new_user_789() {
    //update media files title and alt tags here
    //
    // at the end redirect to target page
    if( is_user_logged_in() ){ wp_redirect( home_url('') ); exit;}
    $fname = $_POST['userFirstName'];
    $lname = $_POST['userLastName'];
    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPassword'];
    $userName = $_POST['userName'];
    $website = "http://example.com";
    if (!empty($userEmail && $userPass && $userName)) {
        $userdata = array(
            'user_login' => $userName,
            'user_email' => $userEmail,
            'user_pass' => $userPass,
            'first_name' => $fname,
            'last_name' => $lname,
            'role' => 'subscriber'
        );
        $user_id = wp_insert_user( wp_slash( $userdata ) );
        if ( ! is_wp_error( $user_id ) ) {
            wp_redirect( home_url('?message=success_new_user') );
        } else {
            $error = $user_id->get_error_message();
            //var_dump($error);
            wp_redirect( home_url('/register/?register_failed='.$error.'') );
        }
    }

}
add_action( 'admin_post_nopriv_add_new_user908', 'add_new_user_789' );