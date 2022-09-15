<?php 
// Creating the widget
class provinces_widget extends WP_Widget {
 
    function __construct() {
    parent::__construct(
     
    // Base ID of your widget
    'provinces_widget', 
     
    // Widget name will appear in UI
    __('Provinces Widget', 'provinces_widget'), 
     
    // Widget description
    array( 'description' => __( 'Provinces Widget ', 'provinces_widget' ), )
    );
    }
     
    // Creating widget front-end
     
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
     
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    // set heading to h3
    $args['before_title'] = "<h4>";
    $args['after_title'] = "</h4>";
    $cities = array(
        'bulacan-cities',
        'pampanga-cities'
    );
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
     
    // This is where you run the code and display the output
    $post_types = get_post_types( array( 'public' => true ), 'names', 'and' );
    // remove attachment from the list
    unset( $post_types['attachment'] );
    unset( $post_types['post'] );
    unset( $post_types['page'] );
    echo "<ul>";
    foreach ( $post_types  as $post_type ) {
        echo '<li><a href="' . get_post_type_archive_link( $post_type ) . '">' . $post_type .'</a></li>';
    }
    echo "</ul>";
    echo $args['after_widget'];
    }
     
    // Widget Backend
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'New title', 'provinces_widget' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php
    }
     
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class provinces_widget ends here
    } 
     
    // Register and load the widget
    function provinces_load_widget() {
        register_widget( 'provinces_widget' );
    }
    add_action( 'widgets_init', 'provinces_load_widget' );