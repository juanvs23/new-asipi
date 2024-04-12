<?php
/**
 * 
 * Add defer to script
 * 
 */

function newasipi_async_scripts( $tag, $handle, $src ) {
    if ( ! is_admin() ) {
        if ( strpos($handle, 'elementor')!== false || strpos($handle, 'backbone')!== false || strpos($handle, 'underscore')!== false || strpos($handle, 'wp-embed')!== false || strpos($handle, 'polyfill')!== false ) {
            $tag = '<script  id='.$handle.' src="' . $src . '"></script>';
        }elseif ($handle === 'jquery-core') {
            $tag = '<script  id='.$handle.' src="' . $src . '"></script>';
        }elseif ($handle === 'jquery-migrate') {
            $tag = '<script  id='.$handle.' src="' . $src . '"></script>';
        }else{
            $tag = '<script defer id='.$handle.' src="' . $src . '"></script>';
        }
    }
    return $tag;
}
//add_filter( 'script_loader_tag', 'newasipi_async_scripts', 99999,3 );