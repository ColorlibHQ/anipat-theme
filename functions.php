<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'ANIPAT_DIR_URI' ) ) {
	define( 'ANIPAT_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'ANIPAT_DIR_ASSETS_URI' ) ) {
	define( 'ANIPAT_DIR_ASSETS_URI', ANIPAT_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'ANIPAT_DIR_CSS_URI' ) ) {
	define( 'ANIPAT_DIR_CSS_URI', ANIPAT_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'ANIPAT_DIR_JS_URI' ) ) {
	define( 'ANIPAT_DIR_JS_URI', ANIPAT_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'ANIPAT_DIR_IMGS_URI' ) ) {
	define( 'ANIPAT_DIR_IMGS_URI', ANIPAT_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'ANIPAT_DIR_ICON_IMG_URI' ) ) {
	define( 'ANIPAT_DIR_ICON_IMG_URI', ANIPAT_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'ANIPAT_DIR_PATH' ) ) {
	define( 'ANIPAT_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'ANIPAT_DIR_PATH_INC' ) ) {
	define( 'ANIPAT_DIR_PATH_INC', ANIPAT_DIR_PATH . 'inc/' );
}

//Anipat Libraries Folder Directory
if ( ! defined( 'ANIPAT_DIR_PATH_LIBS' ) ) {
	define( 'ANIPAT_DIR_PATH_LIBS', ANIPAT_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'ANIPAT_DIR_PATH_CLASSES' ) ) {
	define( 'ANIPAT_DIR_PATH_CLASSES', ANIPAT_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'ANIPAT_DIR_PATH_HOOKS' ) ) {
	define( 'ANIPAT_DIR_PATH_HOOKS', ANIPAT_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function anipat_admin_script(){
    wp_enqueue_style( 'anipat-admin', get_template_directory_uri().'/assets/css/anipat-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'anipat_admin', get_template_directory_uri().'/assets/js/anipat-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'anipat_admin_script' );



/**
 * Include File
 *
 */
require_once( ANIPAT_DIR_PATH_INC . 'anipat-breadcrumbs.php' );
require_once( ANIPAT_DIR_PATH_INC . 'anipat-widgets-reg.php' );
require_once( ANIPAT_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( ANIPAT_DIR_PATH_INC . 'post-like.php' );
require_once( ANIPAT_DIR_PATH_INC . 'anipat-functions.php' );
require_once( ANIPAT_DIR_PATH_INC . 'anipat-commoncss.php' );
require_once( ANIPAT_DIR_PATH_INC . 'support-functions.php' );
require_once( ANIPAT_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( ANIPAT_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( ANIPAT_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( ANIPAT_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( ANIPAT_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( ANIPAT_DIR_PATH_HOOKS . 'hooks.php' );
require_once( ANIPAT_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( ANIPAT_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( ANIPAT_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );

/**
 * Instantiate Anipat object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Anipat = new Anipat();