<?php
/**
 * FUNCTIONS FOR AMP PAGE
 *
 * Docs - https://github.com/Automattic/amp-wp/blob/master/readme.md
 * @package ZikokoTheme
**/







function xyz_amp_set_custom_template( $file, $type, $post ) {
    if ( 'single' === $type ) {
        $file = get_template_directory() . '/amp/single.php';
    }
    return $file;
}
add_filter( 'amp_post_template_file', 'xyz_amp_set_custom_template', 10, 3 );




function xyz_amp_remove_from_meta( $meta_parts ) {
    foreach ( array_keys( $meta_parts, 'meta-taxonomy', true ) as $key ) {
        unset( $meta_parts[ $key ] );
    }
    foreach ( array_keys( $meta_parts, 'meta-time', true ) as $key ) {
        unset( $meta_parts[ $key ] );
    }
    return $meta_parts;
}
add_filter( 'amp_post_template_meta_parts', 'xyz_amp_remove_from_meta' );


function xyz_amp_set_custom_author_meta_template( $file, $type, $post ) {
    if ( 'meta-author' === $type ) {
        $file = get_template_directory() . '/amp/meta-author.php';
    }
    return $file;
}
add_filter( 'amp_post_template_file', 'xyz_amp_set_custom_author_meta_template', 10, 3 );




?>