<?php
/**
 * Bella Theme — functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue extra styles not possible in theme.json.
 */
function bella_theme_extras() {
	$css = "
		::selection { background: #e8a849; color: #0d0d0d; }
		::-moz-selection { background: #e8a849; color: #0d0d0d; }
		a { text-decoration: none; border-bottom: 1px solid rgba(232,168,73,0.3); transition: all 0.2s; }
		a:hover { border-bottom-color: currentColor; }
		.wp-block-navigation a { border-bottom: none; }
		.wp-block-site-title a { border-bottom: none; }
		::-webkit-scrollbar { width: 6px; }
		::-webkit-scrollbar-track { background: #0d0d0d; }
		::-webkit-scrollbar-thumb { background: #2a2520; border-radius: 3px; }
		::-webkit-scrollbar-thumb:hover { background: #3a3530; }
		body { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
	";
	wp_add_inline_style( 'global-styles', $css );
}
add_action( 'wp_enqueue_scripts', 'bella_theme_extras', 20 );
