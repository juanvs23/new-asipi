<?php
function newasipi_scripts() {
    /**
    * Enqueue script
    * wp_enqueue_script( 
    * string $handle, 
    * string $src           = '', 
	* string[] $deps        = array(), 
	* string|bool|null $ver = false, 
	* array|bool $in_footer = false
    * );
   */
   /**
    * Enqueue style
    * wp_enqueue_style( 
	* string $handle, 
	* string $src           = '', 
	* string[] $deps        = array(), 
	* string|bool|null $ver = false, 
	* string $media         = 'all'
    * );
   */
  


    wp_enqueue_style('font','https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap',array(),NEWASIPI_VERSION,'all');

    wp_enqueue_style('bootstrap',NEWASIPI_URL.'/assets/libs/bootstrap/css/bootstrap.min.css',array(),NEWASIPI_VERSION,'all');
  
    wp_enqueue_style('newasipi-style',NEWASIPI_URL.'/assets/css/custom.css',array('bootstrap'),NEWASIPI_VERSION,'all');

    wp_enqueue_script('newasipi-script',NEWASIPI_URL.'/assets/js/custom.js',array('jquery'),NEWASIPI_VERSION,true);
}
add_action('wp_enqueue_scripts','newasipi_scripts',99999999);