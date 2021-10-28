<?php
/*
*/

// Required classes
require_once('library/classes/title.php');
require_once('library/classes/button.php');

// Required functions
require_once('library/functions/acf-blocks.php');
require_once('library/functions/acf-options-page.php');
require_once('library/functions/acf-load-field.php');
require_once('library/functions/cleanup.php');
require_once('library/functions/enqueueing.php');
require_once('library/functions/randomness.php');
require_once('library/functions/theme-support.php');
require_once('library/inc/woocommerce.php');
/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );
function mk_setup() {
    // let's get language support going, if you need it
    load_theme_textdomain( 'mk', get_template_directory() . '/library/translation' );

    // launching operation cleanup
    // A better title
    add_filter( 'wp_title', 'rw_title', 10, 3 );
    // remove WP version from RSS
    // remove pesky injected css for recent comments widget
    // clean up comment styles in the head

    // enqueue base scripts and styles
    add_action( 'wp_enqueue_scripts', 'mk_scripts_and_styles', 999 );

    // launching this stuff after theme setup
    mk_theme_support();

    // cleaning up random code around images
    // cleaning up excerpt
}

// let's get this party started
add_action( 'after_setup_theme', 'mk_setup' );


// Custom template tags for this theme.
require get_template_directory() . '/library/inc/template-tags.php';

// Custom functions that act independently of the theme templates.
require get_template_directory() . '/library/inc/extras.php';

// Load Woocommerce compatibility file.
//require get_template_directory() . '/library/inc/woocommerce.php';


//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/library/Fontawesome-4/font-awesome-4.7.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

/* Add bootstrap support to the Wordpress theme*/

function theme_add_bootstrap() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/library/bootstrap-5.2/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/library/bootstrap-5.2/dist/js/bootstrap.bundle.min.js', array(), '5.7.2', true );
}

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );
?>