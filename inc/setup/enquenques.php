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
  


    wp_enqueue_style('googleFonts','https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap',array(),NEWASIPI_VERSION,'all');

    wp_enqueue_style('bootstrap',NEWASIPI_URL.'/assets/libs/bootstrap/css/bootstrap.min.css',array('googleFonts'),NEWASIPI_VERSION,'all');

    wp_enqueue_style('all-min',NEWASIPI_URL.'/assets/libs/fontawesome-free/css/all.min.css',array('googleFonts','bootstrap'),NEWASIPI_VERSION,'all');
  
    wp_enqueue_style('animate',NEWASIPI_URL.'/assets/libs/animate/animate.compat.css',array('googleFonts','bootstrap','all-min'),NEWASIPI_VERSION,'all');

    wp_enqueue_style('simple-line-icons',NEWASIPI_URL.'/assets/libs/simple-line-icons/css/simple-line-icons.min.css',array('googleFonts','bootstrap','all-min','animate'),NEWASIPI_VERSION,'all');
    
    wp_enqueue_style('owl-carousel',NEWASIPI_URL.'/assets/libs/owl.carousel/assets/owl.carousel.min.css',array('googleFonts','bootstrap','all-min','animate','simple-line-icons'),NEWASIPI_VERSION,'all');

    wp_enqueue_style('owl-carousel-theme',NEWASIPI_URL.'/assets/libs/owl.carousel/assets/owl.theme.default.min.css',array('googleFonts','bootstrap','all-min','animate','simple-line-icons','owl-carousel'),NEWASIPI_VERSION,'all');

    wp_enqueue_style('magnific-popup',NEWASIPI_URL.'/assets/libs/magnific-popup/magnific-popup.min.css',array('googleFonts','bootstrap','all-min','animate','simple-line-icons','owl-carousel','owl-carousel-theme'),NEWASIPI_VERSION,'all');

    wp_enqueue_style('theme',NEWASIPI_URL.'/assets/css/theme.css',array('googleFonts','bootstrap','all-min','animate','simple-line-icons','owl-carousel','owl-carousel-theme','magnific-popup'),NEWASIPI_VERSION,'all');

    wp_enqueue_style('theme-elements',NEWASIPI_URL.'/assets/css/theme-elements.css',array('googleFonts','bootstrap','all-min','animate','simple-line-icons','owl-carousel','owl-carousel-theme','magnific-popup','theme'),NEWASIPI_VERSION,'all');

    wp_enqueue_style('theme-blog',NEWASIPI_URL.'/assets/css/theme-blog.css',array('googleFonts','bootstrap','all-min','animate','simple-line-icons','owl-carousel','owl-carousel-theme','magnific-popup','theme','theme-elements'),NEWASIPI_VERSION,'all');

    wp_enqueue_style('demo-transportation-logistic',NEWASIPI_URL.'/assets/css/demos/demo-transportation-logistic.css',array('googleFonts','bootstrap','all-min','animate','simple-line-icons','owl-carousel','owl-carousel-theme','magnific-popup','theme','theme-elements','theme-blog'),NEWASIPI_VERSION,'all');
    
    wp_enqueue_style('skin-transportation-logistic',NEWASIPI_URL.'/assets/css/skins/skin-transportation-logistic.css',array('googleFonts','bootstrap','all-min','animate','simple-line-icons','owl-carousel','owl-carousel-theme','magnific-popup','theme','theme-elements','theme-blog','demo-transportation-logistic'),NEWASIPI_VERSION,'all');
    
    wp_enqueue_style('newasipi-style',NEWASIPI_URL.'/assets/css/custom.css',array('skin-transportation-logistic'),NEWASIPI_VERSION,'all');




    wp_enqueue_script('plugins',NEWASIPI_URL.'/assets/libs/plugins/js/plugins.min.js',array('jquery'),NEWASIPI_VERSION,true);

    wp_enqueue_script('theme-js',NEWASIPI_URL.'/assets/js/theme.js',array('jquery','plugins'),NEWASIPI_VERSION,true);

    wp_enqueue_script('demo-transportation-logistic-js',NEWASIPI_URL.'/assets/js/demos/demo-transportation-logistic.js',array('jquery','plugins','theme-js'),NEWASIPI_VERSION,true);

    wp_enqueue_script('view-contact-js',NEWASIPI_URL.'/assets/js/views/view.contact.js',array('jquery','plugins','theme-js','demo-transportation-logistic-js'),NEWASIPI_VERSION,true);

    wp_enqueue_script('newasipi-script',NEWASIPI_URL.'/assets/js/custom.js',array('jquery','plugins','theme-js','demo-transportation-logistic-js','view-contact-js'),NEWASIPI_VERSION,true);

    wp_enqueue_script('theme-init',NEWASIPI_URL.'/assets/js/theme.init.js',array('jquery','plugins','theme-js','demo-transportation-logistic-js','view-contact-js','newasipi-script'),NEWASIPI_VERSION,true);

    
}
add_action('wp_enqueue_scripts','newasipi_scripts',99999999);