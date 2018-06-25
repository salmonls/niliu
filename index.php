<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

//phpinfo();exit;
/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
if (isset($_GET['_debug']) && $_GET['_debug'] == 1) {
	phpinfo();
	exit;
}


if (isset($_GET['_debug']) && $_GET['_debug'] == 2) {
	include '../server_info.php';
	exit;
}
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
