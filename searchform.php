<?php
/**
 * The searchform.php template. You can create your own search form in this template
 *
 * Used any time that get_search_form() is called.
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
global $wp;

$wp_default_unique_id = wp_unique_id( 'search-form-' );

$wp_default_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';

$current_url = add_query_arg( $wp->query_string, '', home_url( $wp->request ) );
?>

<form role="search" <?php echo $wp_default_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form d-flex mb-3" action="<?php echo $current_url;?>">
	<input type="search" id="<?php echo esc_attr( $wp_default_unique_id ); ?>" class="search-field p-2 w-100 rounded-0" value="<?php echo get_search_query(); ?>" name="s" />
	<input type="submit" class="search-submit p-2 flex-shrink-1 btn btn-primary rounded-0" value="<?php echo esc_attr_x( 'Search', 'submit button', 'ph-job-list' ); ?>" />
</form>
