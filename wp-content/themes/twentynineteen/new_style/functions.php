<?php
if (! defined ( 'WHISTLE_BASE_URL' )) {
	define ( 'WHISTLE_BASE_URL', get_template_directory_uri () . '/' );
}
define ( 'WHISTLE_FW_URL', WHISTLE_BASE_URL . 'framework/' );
define ( 'WHISTLE_CORE_PLUGIN', WP_PLUGIN_DIR.'/designthemes-core-features' );
define ( 'WHISTLE_FW', get_template_directory() . '/framework/' );
define ( 'WHISTLE_SETTINGS', 'mytheme' );

/*
 * Define WHISTLE_NAME Objective: Used to show theme name where ever needed( eg: in widgets title ar the back-end).
 */
// get themedata version wp 3.4+
if (function_exists ( 'wp_get_theme' )) :
	$theme_data = wp_get_theme ();
	define ( 'WHISTLE_NAME', $theme_data->get ( 'Name' ) );
	define ( 'WHISTLE_FOLDER_NAME', $theme_data->template );
	define ( 'WHISTLE_VERSION', ( float ) $theme_data->get ( 'Version' ) );
endif;

define ( 'WHISTLE_SAMPLE_FONT', esc_html__ ( 'The quick brown fox jumps over the lazy dog', 'whistle' ) );

if (! isset ( $content_width ))
	$content_width = 1170;

// BACKEND DETAILS WILL BE IN include.php
require_once (get_template_directory () . '/framework/include.php');

$page_layout = whistle_option('specialty', 'global-page-layout');
$GLOBALS['page_layout'] = !empty($page_layout) ? $page_layout : 'content-full-width';
$GLOBALS['force_enable'] = whistle_option('specialty', 'force-enable-global-layout'); ?>