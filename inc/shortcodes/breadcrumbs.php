<?php
function asipi_breadcrumbs_shortcode_function(){
    echo get_template_part( 'template-parts/header/header-br-content');
}




add_shortcode( 'asipi_breadcrumbs_shortcode', 'asipi_breadcrumbs_shortcode_function' );