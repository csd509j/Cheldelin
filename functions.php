<?php 
/*
 * Theme update checker
 *
 * @since Cheldelin 1.0
 */
require WP_CONTENT_DIR . '/plugins/plugin-update-checker-master/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/csd509j/Cheldelin',
	__FILE__,
	'Cheldelin'
);

$myUpdateChecker->setBranch('master'); 

/*
 * Setup style sheets
 *
 * @since Cheldelin 1.0
 */
function cheldelin_theme_enqueue_styles() {
    
	$parent_style = 'csdschools';
	
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'cheldelin-style',
	    get_stylesheet_directory_uri() . '/style.css',
	    array( $parent_style ),
	    wp_get_theme()->get('Version')
	);

}
add_action( 'wp_enqueue_scripts', 'cheldelin_theme_enqueue_styles' );