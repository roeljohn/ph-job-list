<?php
/**
 * The functions.php file behaves like a WordPress plugin, adding features and functionality to a 
 * WordPress site. You can use it to call WordPress functions and to define your own functions.
 */

/*
* Creating a function to create our CPT
*/
  
function custom_post_type() {
  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Manila', 'Post Type General Name', 'ph-job-list' ),
            'singular_name'       => _x( 'Manila', 'Post Type Singular Name', 'ph-job-list' ),
            'menu_name'           => __( 'Manila', 'ph-job-list' ),
            'parent_item_colon'   => __( 'Parent Manila', 'ph-job-list' ),
            'all_items'           => __( 'All Manila', 'ph-job-list' ),
            'view_item'           => __( 'View Manila', 'ph-job-list' ),
            'add_new_item'        => __( 'Add New Manila', 'ph-job-list' ),
            'add_new'             => __( 'Add New', 'ph-job-list' ),
            'edit_item'           => __( 'Edit Manila', 'ph-job-list' ),
            'update_item'         => __( 'Update Manila', 'ph-job-list' ),
            'search_items'        => __( 'Search Manila', 'ph-job-list' ),
            'not_found'           => __( 'Not Found', 'ph-job-list' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'ph-job-list' ),
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'manila', 'ph-job-list' ),
            'description'         => __( 'Metro Manila Jobs', 'ph-job-list' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies' => array('post_tag','category'),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );

            // Bulacan Label Post Type
            $blabels = array(
              'name'                => _x( 'Bulacan', 'Post Type General Name', 'ph-job-list' ),
              'singular_name'       => _x( 'Bulacan', 'Post Type Singular Name', 'ph-job-list' ),
              'menu_name'           => __( 'Bulacan', 'ph-job-list' ),
              'parent_item_colon'   => __( 'Parent Bulacan', 'ph-job-list' ),
              'all_items'           => __( 'All Bulacan', 'ph-job-list' ),
              'view_item'           => __( 'View Bulacan', 'ph-job-list' ),
              'add_new_item'        => __( 'Add New Bulacan', 'ph-job-list' ),
              'add_new'             => __( 'Add New', 'ph-job-list' ),
              'edit_item'           => __( 'Edit Bulacan', 'ph-job-list' ),
              'update_item'         => __( 'Update Bulacan', 'ph-job-list' ),
              'search_items'        => __( 'Search Bulacan', 'ph-job-list' ),
              'not_found'           => __( 'Not Found', 'ph-job-list' ),
              'not_found_in_trash'  => __( 'Not found in Trash', 'ph-job-list' ),
          );
            
      // Bulacan Args
            
          $bargs = array(
              'label'               => __( 'bulacan', 'ph-job-list' ),
              'description'         => __( 'Bulacan Jobs', 'ph-job-list' ),
              'labels'              => $blabels,
              // Features this CPT supports in Post Editor
              'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
              // You can associate this CPT with a taxonomy or custom taxonomy. 
              'taxonomies' => array('post_tag','category'),
              /* A hierarchical CPT is like Pages and can have
              * Parent and child items. A non-hierarchical CPT
              * is like Posts.
              */
              'hierarchical'        => false,
              'public'              => true,
              'show_ui'             => true,
              'show_in_menu'        => true,
              'show_in_nav_menus'   => true,
              'show_in_admin_bar'   => true,
              'menu_position'       => 5,
              'can_export'          => true,
              'has_archive'         => true,
              'exclude_from_search' => false,
              'publicly_queryable'  => true,
              'capability_type'     => 'post',
              'show_in_rest' => true,
        
          );
            // Pampanga Label Post Type
            $plabels = array(
              'name'                => _x( 'Pampanga', 'Post Type General Name', 'ph-job-list' ),
              'singular_name'       => _x( 'Pampanga', 'Post Type Singular Name', 'ph-job-list' ),
              'menu_name'           => __( 'Pampanga', 'ph-job-list' ),
              'parent_item_colon'   => __( 'Parent Pampanga', 'ph-job-list' ),
              'all_items'           => __( 'All Pampanga', 'ph-job-list' ),
              'view_item'           => __( 'View Pampanga', 'ph-job-list' ),
              'add_new_item'        => __( 'Add New Pampanga', 'ph-job-list' ),
              'add_new'             => __( 'Add New', 'ph-job-list' ),
              'edit_item'           => __( 'Edit Pampanga', 'ph-job-list' ),
              'update_item'         => __( 'Update Pampanga', 'ph-job-list' ),
              'search_items'        => __( 'Search Pampanga', 'ph-job-list' ),
              'not_found'           => __( 'Not Found', 'ph-job-list' ),
              'not_found_in_trash'  => __( 'Not found in Trash', 'ph-job-list' ),
          );
            
      // Pampanga Args
            
          $pargs = array(
              'label'               => __( 'pampanga', 'ph-job-list' ),
              'description'         => __( 'Pampanga Jobs', 'ph-job-list' ),
              'labels'              => $blabels,
              // Features this CPT supports in Post Editor
              'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
              // You can associate this CPT with a taxonomy or custom taxonomy. 
              'taxonomies' => array('post_tag','category'),
              /* A hierarchical CPT is like Pages and can have
              * Parent and child items. A non-hierarchical CPT
              * is like Posts.
              */
              'hierarchical'        => false,
              'public'              => true,
              'show_ui'             => true,
              'show_in_menu'        => true,
              'show_in_nav_menus'   => true,
              'show_in_admin_bar'   => true,
              'menu_position'       => 5,
              'can_export'          => true,
              'has_archive'         => true,
              'exclude_from_search' => false,
              'publicly_queryable'  => true,
              'capability_type'     => 'post',
              'show_in_rest' => true,
        
          );
        // Registering your Custom Post Type
        register_post_type( 'manila', $args );
        register_post_type( 'bulacan', $bargs );
        register_post_type( 'pampanga', $pargs );
      
    }
      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      
    add_action( 'init', 'custom_post_type', 0 );

    add_action( 'init', 'create_subjects_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it subjects for your posts
 
function create_subjects_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Employee Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Employee Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Employee Type' ),
    'all_items' => __( 'All Employee Type' ),
    'parent_item' => __( 'Parent Employee Type' ),
    'parent_item_colon' => __( 'Parent Employee Type:' ),
    'edit_item' => __( 'Edit Employee Type' ), 
    'update_item' => __( 'Update Employee Type' ),
    'add_new_item' => __( 'Add New Employee Type' ),
    'new_item_name' => __( 'New Employee Type Name' ),
    'menu_name' => __( 'Employee Types' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('employee_types',array('post', 'manila', 'bulacan', 'pampanga'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'employee_type' ),
  ));
 
}