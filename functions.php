<?php
/**
 * The functions.php file behaves like a WordPress plugin, adding features and functionality to a 
 * WordPress site. You can use it to call WordPress functions and to define your own functions.
 */
require_once( __DIR__ . '/functions/global.php');
require_once( __DIR__ . '/functions/custom.php');
require_once( __DIR__ . '/functions/employment_type.php');
require_once( __DIR__ . '/functions/cities.php');
require_once( __DIR__ . '/functions/widget/provinces.php');

add_action( 'after_setup_theme', 'register_my_menu' );

function register_my_menu() {
   register_nav_menu( 'primary', __( 'Primary Menu', 'wp-wedding-theme-one' ) );
   register_nav_menu( 'footer', __( 'Footer Menu', 'wp-wedding-theme-one' ) );
}
function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
function add_menu_list_item_class($classes, $item, $args) {
  if (property_exists($args, 'list_item_class')) {
      $classes[] = $args->list_item_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);



function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
/**
 * Enqueue scripts and styles
 */
function ph_job_list_enqueue_scripts() {
  // all styles
  wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/dist/css/bootstrap.css', array(), '5.2.0' );
  wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0' );
  // all scripts
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/dist/js/bootstrap.min.js', array('jquery'), '20120206', true );
}
add_action( 'wp_enqueue_scripts', 'ph_job_list_enqueue_scripts' );
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
              'labels'              => $plabels,
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
    'name' => _x( 'Employment Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Employment Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Employment Type' ),
    'all_items' => __( 'All Employment Type' ),
    'parent_item' => __( 'Parent Employment Type' ),
    'parent_item_colon' => __( 'Parent Employment Type:' ),
    'edit_item' => __( 'Edit Employment Type' ), 
    'update_item' => __( 'Update Employment Type' ),
    'add_new_item' => __( 'Add New Employment Type' ),
    'new_item_name' => __( 'New Employment Type Name' ),
    'menu_name' => __( 'Employment Types' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('employment_types',array('post', 'manila', 'bulacan', 'pampanga'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'employment_type' ),
  ));

  // Bulacan Cities Taxonomy
  $labels = array(
    'name' => _x( 'Bulacan Cities', 'taxonomy general name' ),
    'singular_name' => _x( 'Bulacan City', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Bulacan City' ),
    'all_items' => __( 'All Bulacan Cities' ),
    'parent_item' => __( 'Parent Bulacan City' ),
    'parent_item_colon' => __( 'Parent Bulacan City:' ),
    'edit_item' => __( 'Edit Bulacan City' ), 
    'update_item' => __( 'Update Bulacan City' ),
    'add_new_item' => __( 'Add New Bulacan City' ),
    'new_item_name' => __( 'New Bulacan City' ),
    'menu_name' => __( 'Bulacan Cities' ),
  );   
  register_taxonomy('bulacan-cities',array('bulacan'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'bulacan-cities' ),
  ));
   // Pampanga Cities Taxonomy
   $labels = array(
    'name' => _x( 'Pampanga Cities', 'taxonomy general name' ),
    'singular_name' => _x( 'Pampanga City', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Pampanga City' ),
    'all_items' => __( 'All Pampanga Cities' ),
    'parent_item' => __( 'Parent Pampanga City' ),
    'parent_item_colon' => __( 'Parent Pampanga City:' ),
    'edit_item' => __( 'Edit Pampanga City' ), 
    'update_item' => __( 'Update Pampanga City' ),
    'add_new_item' => __( 'Add New Pampanga City' ),
    'new_item_name' => __( 'New Pampanga City' ),
    'menu_name' => __( 'Pampanga Cities' ),
  );   
  register_taxonomy('pampanga-cities',array('pampanga'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'pampanga-cities' ),
  ));
}
add_action( 'wp_login_failed', 'my_front_end_login_fail' );  // hook failed login

function my_front_end_login_fail( $username ) {
   $referrer = $_SERVER['HTTP_REFERER'];  // where did the post submission come from?
   // if there's a valid referrer, and it's not the default log-in screen
   if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
      wp_redirect( $referrer . '?login=failed' );  // let's append some information (login=failed) to the URL for the theme to use
      exit;
   }
}
// Login Shortcode
function wpdocs_log_me_shortcode_fn() {
 
  $args = array(
    'echo'           => true,
    'remember'       => true,
    //'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    //'redirect' => get_permalink(),
    'form_id'        => 'loginform',
    'id_username'    => 'user_login',
    'id_password'    => 'user_pass',
    'id_remember'    => 'rememberme',
    'id_submit'      => 'wp-submit',
    'label_username' => __( 'Username or Email Address' ),
    'label_password' => __( 'Password' ),
    'label_remember' => __( 'Remember Me' ),
    'label_log_in'   => __( 'Log In' ),
    'value_username' => '',
    'value_remember' => false
);
 
  return wp_login_form( $args );
 
}
add_shortcode( 'wpdocs_log_me', 'wpdocs_log_me_shortcode_fn' );


/** Add class in next/previous link function */

function post_link_attributes($output) {
  $code = 'class="btn btn-outline-primary rounded-pill"';
  return str_replace('<a href=', '<a '.$code.' href=', $output);
}

add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');

add_filter( 'pre_get_posts', 'add_custom_type_to_tag_archive' );

function add_custom_type_to_tag_archive( $query )
{
    if ( ! is_main_query() or ! is_tag() )
        return $query;

    $query->set( 'post_type', array ( 'manila', 'bulacan', 'pampanga' ) );
    $query->set( 'posts_per_page', 10 );

    return $query;
}


// PAGINATION
function job_custom_pagination($numpages = '', $pagerange = '', $paged='') {
  if (empty($pagerange)) {
      $pagerange = 2;
  }
  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default queries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
      $paged = 2;
  }
  if ($numpages == '') {
      global $wp_query;
      $numpages = $wp_query->max_num_pages;
      if(!$numpages) {
              $numpages = 1;
      }
  }
  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  
  $pagination_args = array(
      'base' => str_replace( $pagerange, '%#%', esc_url( get_pagenum_link( $pagerange ) ) ),
      'format'          => '?paged=%#%',
      'total'           => $numpages,
      'current'         => $paged,
      'show_all'        => False,
      'end_size'        => 1,
      'mid_size'        => $pagerange,
      'prev_next'       => True,
      'prev_text'       => __('&laquo;'),
      'next_text'       => __('&raquo;'),
      'type'            => 'plain',
      'add_args'        => false,
      'add_fragment'    => ''
  );
  $paginate_links = paginate_links($pagination_args);
  if ($paginate_links) {
      echo "<div class='custom-pagination'>";
          echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
          echo "<span class='float-end'>" . $paginate_links . "</span>";
      echo "</div>";
  }
}

function wpb_widgets_init() {
 
  register_sidebar( array(
      'name' => __( 'Sidebar', 'wpb' ),
      'id' => 'sidebar',
      'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'ph-job-list' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
  ) );
  /** Add another one */
}

add_action( 'widgets_init', 'wpb_widgets_init' );

function namespace_add_custom_types( $query ) {
  if( is_category() || is_tag() ) {
    $query->set( 'post_type', array(
              'bulacan', 'manila', 'pampanga'
            ));
    return $query;
   }
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );

function wpbeginner_numeric_posts_nav() {
  
  if( is_singular() )
    return;
  
  global $wp_query;
  
  /** Stop execution if there's only 1 page */
  if( $wp_query->max_num_pages <= 1 )
    return;
  
  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
  $max   = intval( $wp_query->max_num_pages );
  
  /** Add current page to the array */
  if ( $paged >= 1 )
    $links[] = $paged;
  
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
  
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
  
    echo '<div class="navigation btn-toolbar"><ul class="btn-group p-0" role="group">' . "\n";
  
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="btn btn-outline-secondary">%s</li>' . "\n", get_previous_posts_link() );
  
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
  
        printf( '<li class="btn btn-outline-secondary" %s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
  
        if ( ! in_array( 2, $links ) )
            echo '<li class="btn btn-outline-secondary">…</li>';
    }
  
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li class="btn btn-outline-secondary" %s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
  
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li class="btn btn-outline-secondary">…</li>' . "\n";
  
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li class="btn btn-outline-secondary" %s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
  
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="btn btn-outline-secondary">%s</li>' . "\n", get_next_posts_link() );
  
    echo '</ul></div>' . "\n";
  
}
add_action( 'admin_post_add_foobar', 'prefix_admin_add_foobar' );

//this next action version allows users not logged in to submit requests
//if you want to have both logged in and not logged in users submitting, you have to add both actions!
add_action( 'admin_post_nopriv_add_foobar', 'prefix_admin_add_foobar' );

function prefix_admin_add_foobar() {
    
    if( ! is_user_logged_in() ){ wp_redirect( home_url('') ); exit;}
    // Do some minor form validation to make sure there is content

    if (isset ($_POST['title'])) {
        $title =  $_POST['title'];
    } else {
        echo 'Please enter a  title';
    }
    if (isset ($_POST['description'])) {
        $description = $_POST['description'];
    } else {
        echo 'Please enter the content';
    }
    $tags = $_POST['post_tags'];

    // Add the content of the form to $post as an array
    $new_post = array(
        'post_title'    => $title,
        'post_content'  => $description,
        'post_category' => array($_POST['cat']),  // Usable for custom taxonomies too
        'tags_input'    => array($tags),
        'post_status'   => 'publish',           // Choose: publish, preview, future, draft, etc.
        'post_type' => 'post'  //'post',page' or use a custom post type if you want to
    );


    // Insert the post into the database.
    $post_id = wp_insert_post( $new_post );
    if(!is_wp_error($post_id)){
      //the post is valid
      wp_redirect( home_url('?message=success') ); exit;
    }else{
      //there was an error in the post insertion, 
      echo $post_id->get_error_message();
    }

}

add_action( 'init', 'process_post' );

function process_post() {
  if($_GET['message'] == 'success'){ 
    //display your message 
    echo 'Success';
  }
}
