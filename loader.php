<?php

if( ( defined('WP_DEBUG') && WP_DEBUG ) || ( defined('SKIP_REQUIRED_PLUGINS') && SKIP_REQUIRED_PLUGINS ) {
	return;
}

add_action('muplugins_loaded', 'voce_required_plugins_load_plugins');

function voce_required_plugins_load_plugins() {
	do_action('wp_load_dependency', 'limit-login-attempts');
	do_action('wp_load_dependency', 'force-strong-passwords', 'slt-force-strong-passwords');
}
