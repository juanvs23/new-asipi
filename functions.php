<?php
/*
 * Theme Name: Asipi Theme
 * Theme URI: https://ztgroupcorp.com/
 * Author: ztgroup LLC
 * Description: Tema desarrollado para ASIPI.
 * Requires PHP: 8.13
 * Version: 1.0.0
 * Text Domain: newasipi
 */
Namespace NewAsipi;
 /*
  * Constants
  */

if (!defined('NEWASIPI_PATH')) {
    define('NEWASIPI_PATH', get_stylesheet_directory());
}
if (!defined('NEWASIPI_URL')) {
    define('NEWASIPI_URL', get_stylesheet_directory_uri());
}
if (!defined('NEWASIPI_VERSION')) {
    define('NEWASIPI_VERSION', '1.0.0');
}
if (file_exists(NEWASIPI_PATH.'/inc/includes.php')) { 
    require NEWASIPI_PATH.'/inc/includes.php';
 }