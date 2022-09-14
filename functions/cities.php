<?php 
// Creating the widget
class cities_widget extends WP_Widget {
 
    function __construct() {
    parent::__construct(
     
    // Base ID of your widget
    'cities_widget', 
     
    // Widget name will appear in UI
    __('Cities Widget', 'cities_widget_domain'), 
     
    // Widget description
    array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'cities_widget_domain' ), )
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
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];

    // get the terms of taxonomy
    $tax_data = get_query_var('taxonomy');
    $terms = get_terms([
        'taxonomy' => $tax_data,
        'hide_empty' => false,
    ]);
    echo "<ul>";
    if (is_single() || in_array($tax_data, array('bulacan_cities', 'pampanga_cities'))){
        foreach ($terms as $term){
            $term_link = get_term_link( $term );
            if( $term->count > 0 )
                // display link to term archive
                echo '<li><a href="' . esc_url( $term_link ) . '">' . $term->name .'</a></li>';
        }
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
    $title = __( 'New title', 'cities_widget_domain' );
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
     
    // Class wpb_widget ends here
    } 
     
    // Register and load the widget
    function cities_widget_load_widget() {
        register_widget( 'cities_widget' );
    }
    add_action( 'widgets_init', 'cities_widget_load_widget' );