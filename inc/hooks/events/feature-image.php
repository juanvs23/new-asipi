<?php
function tribe_event_featured_image( $post_id = null, $size = 'full', $link = true, $wrapper = true ) {
    if ( is_null( $post_id ) ) {
        $post_id = get_the_ID();
    }
 
    /**
     * Provides an opportunity to modify the featured image size.
     *
     * @param string $size
     * @param int    $post_id
     */
    $size = apply_filters( 'tribe_event_featured_image_size', $size, $post_id );
 
    $featured_image = $wrapper
        ? get_the_post_thumbnail( $post_id, $size )
        : wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), $size, false );
 
    if ( is_array( $featured_image ) ) {
        $featured_image = $featured_image[ 0 ];
    }
 
    /**
     * Controls whether the featured image should be wrapped in a link
     * or not.
     *
     * @param bool $link
     */
    if ( ! empty( $featured_image ) && apply_filters( 'tribe_event_featured_image_link', $link ) ) {
        $featured_image = '<a href="' . esc_url( tribe_get_event_link( $post_id ) ) . '" tabindex="-1">' . $featured_image . '</a>';
    }
 
    /**
     * Whether to wrap the featured image in our standard div (used to
     * assist in targeting featured images from stylesheets, etc).
     *
     * @param bool $wrapper
     */
    if ( ! empty( $featured_image ) && apply_filters( 'tribe_events_featured_image_wrap', $wrapper ) ) {
        $featured_image = '<div class="tribe-events-event-image">' . $featured_image . '</div>';
    }
 
    /**
     * Provides an opportunity to modify the featured image HTML.
     *
     * @param string $featured_image
     * @param int    $post_id
     * @param string $size
     */
    return apply_filters( 'tribe_event_featured_image', $featured_image, $post_id, $size );
}