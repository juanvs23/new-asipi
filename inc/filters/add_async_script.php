<?php
/**
 * 
 * Add defer to script
 * 
 */

function newasipi_async_scripts( $tag, $handle, $src ) {
    if ( ! is_admin() ) {
        if ( $handle === 'devxtheme-styles' ) {
            $tag = '<script defer id='.$handle.' src="' . $src . '"></script>';
        }elseif ($handle === 'jquery-core') {
            $tag = '<script defer id='.$handle.' src="' . $src . '"></script>';
        }elseif ($handle === 'jquery-migrate') {
            $tag = '<script defer id='.$handle.' src="' . $src . '"></script>';
        }else{
            $tag = '<script defer id='.$handle.' src="' . $src . '"></script>';
        }
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'newasipi_async_scripts', 10, 3  );