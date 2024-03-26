<?php

function newasipi_defer_css_rel_preload( $html, $handle, $href, $media ) {
   /*  $styles = [
        'devxtheme-styles',
        
    ]; */
    if ( ! is_admin() ) {
       /*  if ( $handle === 'devxtheme-styles' )  {
            $html = '<link rel="preload" href="' . $href . '" as="style" id="' . $handle . '" media="' . $media . '" onload="this.onload=null;this.rel=\'stylesheet\'">'
            . '<noscript>' . $html . '</noscript>';
        } */
        if (str_contains($handle,'font')) {
            $html = '<link rel="preconnect" href="'.get_bloginfo('url').'">
            <link rel="preload" id="'.$handle.'" href="'.$href.'?display=swap" rel="stylesheet">';
        }else{
            $html = '<link rel="preload" href="' . $href . '" as="style" id="' . $handle . '" media="' . $media . '" onload="this.onload=null;this.rel=\'stylesheet\'">'
            . '<noscript>' . $html . '</noscript>';
        }
        
    }
    return $html;
}
add_filter( 'style_loader_tag','newasipi_defer_css_rel_preload', 10, 4 );